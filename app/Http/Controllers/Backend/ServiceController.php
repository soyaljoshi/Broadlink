<?php

namespace App\Http\Controllers\Backend;

use DB;
use App\Http\Requests;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceUpdateRequest;
use App\Http\Requests\ServiceCreateRequest;

class ServiceController extends Controller {

    /**
     * @return \Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $services = Service::orderBy('order')->get();

        return view('backend.service.index', compact('services'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view('backend.service.create');
    }

    /**
     * @param ServiceCreateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ServiceCreateRequest $request)
    {
        $service = DB::transaction(function () use ($request)
        {
            $service = Service::create($request->serviceFillData());

            if ($request->hasFile('icon'))
            {
                $icon = $request->file('icon');
                $service->icon()->create(['name' => cleanFileName($icon)])->upload($icon);
            }

            return $service;
        });

        return redirect()
            ->route('admin::service.edit', $service->slug)
            ->with('success', trans('messages.create_success', ['entity' => 'Service']));
    }

    /**
     * @param Service $service
     * @return \Illuminate\Contracts\View\Factory
     */
    public function edit(Service $service)
    {
        return view('backend.service.edit', compact('service'));
    }

    /**
     * @param Service $service
     * @param ServiceUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Service $service, ServiceUpdateRequest $request)
    {
        DB::transaction(function () use ($service, $request)
        {
            $service->update($request->serviceFillData());

            if ($request->hasFile('icon'))
            {
                $icon = $request->file('icon');

                if ($service->icon)
                {
                    $service->icon->upload($icon);
                } else
                {
                    $service->icon()->create(['name' => cleanFileName($icon)])->upload($icon);
                }
            }

            if ($request->hasFile('image'))
            {
                $image = $request->file('image');

                $service->serviceImage()->firstOrCreate([]);

                if ($service->serviceImage->image)
                {
                    $service->serviceImage->image->upload($image);
                } else
                {
                    $service->serviceImage->image()->create(['name' => cleanFileName($image)])->upload($image);
                }
            }
        });

        return redirect()->back()->with('success', trans('messages.update_success', ['entity' => 'Service']));
    }

    /**
     * @param Service $service
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Service $service)
    {
        if ($service->delete())
        {
            return response()->json([
                'Result' => 'OK'
            ]);
        }

        return response()->json([
            'Result' => 'Error'
        ], 500);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateSortOrder(Request $request)
    {
        $order = $request->get('order');

        foreach ($order as $order => $id)
        {
            $service = Service::findOrFail($id);
            $service->order = $order;
            $service->save();
        }

        return response()->json([
            'Result'  => 'OK',
            'Message' => trans('messages.update_success', ['entity' => 'Order'])
        ]);
    }
}
