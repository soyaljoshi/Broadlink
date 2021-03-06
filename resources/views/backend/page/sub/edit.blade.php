@extends('backend.layout')

@section('title', 'SubPage')

@push('styles')
@endpush

@section('content')
    <div id="page_content">
        <div id="page_content_inner">
            {{ Form::model($subPage, [ 'route' => [ 'admin::page.sub.update', $page->slug, $subPage->slug ], 'class' => 'uk-form-stacked', 'id' => 'sub_page_edit_form', 'method' => 'put' ]) }}
            @include('backend.page.partials.form', [ 'title' => 'Edit SubPage (Page: '.$page->title.')' ])
            {{ Form::close() }}
        </div>
    </div>
@stop

@push('scripts')
<!-- tinymce -->
<script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>

<script src="{{ asset('assets/backend/js/pages/forms_wysiwyg.min.js') }}"></script>
@endpush