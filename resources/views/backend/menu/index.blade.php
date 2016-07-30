@extends('backend.layout')

@section('title', 'Menu')

@push('styles')
@endpush

@section('content')
    {{ Form::open(['route' => 'admin::menu.update', 'files' => true, 'method' => 'put']) }}
    <div id="page_content">
        <div id="page_content_inner">
            <h3 class="heading_b uk-margin-bottom">Menu</h3>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-accordion uk-sortable" data-uk-accordion="{ collapse: true }" data-uk-sortable>
                                @foreach($menu_items as $item)
                                    <div>
                                        <h3 class="uk-accordion-title">{{ $item->title }}</h3>
                                        <div class="uk-accordion-content" data-id="{{$item->id}}">
                                            <div class="uk-form-row">
                                                <label for="menu_title[{{$item->id}}]">Title</label>
                                                {{ Form::text( 'menu['.$item->id.'][title]', $item->title, [ 'id' => 'menu_title['.$item->id.']', 'class' => 'md-input', 'required' ] ) }}
                                            </div>
                                            <div class="uk-form-row">
                                                <label for="menu[{{ $item->id }}][icon]">Icon</label>
                                                <select class="md-input" name="menu[{{ $item->id }}][icon]">
                                                    @foreach($iconList as $id => $name)
                                                        <option value="{{ $id }}">{{ $name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <p><em>Note: Sub menu items are generated by associated sub pages of a page.</em></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="md-fab-wrapper">
        <button class="md-fab md-fab-accent" type="submit" id="menuSave" data-uk-tooltip="{pos:'left'}" title="Save Menu">
            <i class="material-icons md-color-white">&#xE161;</i>
        </button>
    </div>
    {{ Form::close() }}
@stop

@push('scripts')
<script src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/pages/forms_file_input.min.js') }}" type="text/javascript"></script>
@endpush