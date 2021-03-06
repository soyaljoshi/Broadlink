@extends('backend.layout')

@section('title', 'Client')

@push('styles')
<link href="{{ asset('assets/backend/skins/dropify/css/dropify.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
    <div id="page_content">
        <div id="page_content_inner">
            {{ Form::model($client, [ 'route' => ['admin::client.update', $client->slug], 'class' => 'uk-form-stacked', 'id' => 'client_create_form', 'method' => 'put', 'files' => true ]) }}
            @include('backend.client.partials.form', [ 'title' => 'Edit Client' ])
            {{ Form::close() }}
        </div>
    </div>
@stop

@push('scripts')
<script src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/pages/forms_file_input.min.js') }}" type="text/javascript"></script>
@endpush