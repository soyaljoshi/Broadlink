@extends('frontend.layouts.master')

@section('title', 'Broadlink :: Vouchers')

@section('header')
    {{ Html::style('assets/frontend/css/style.css')}}
@stop

@section('body')
    @include('frontend.partials.banner', ['title' => 'Vouchers'])
    <section id="our-services-index" class="uk-block uk-margin-remove uk-padding-remove">
        <div class="uk-container uk-container-center bl-margin-top-ve uk-block-default bl-padding-2-tb bl-card">
            <div class="uk-grid">
                <div class="uk-width-8-10 uk-container-center">
                    <div class="uk-grid">
                        @foreach(vouchers() as $voucher )
                            <div class="uk-width-small-1-2 uk-width-medium-1-3 uk-margin-large-bottom">
                                <figure class="uk-overlay uk-overlay-hover uk-hover">
                                    <img src="{{ image('assets/frontend/img/'.str_slug($voucher->voucher).'.png') }}">
                                    <figcaption class="uk-overlay-panel uk-overlay-slide-bottom uk-overlay-bottom uk-overlay-background uk-text-center bl-text-light">
                                        <div class="uk-float-left">
                                            <h3 class="uk-margin-top">Rs. {{ $voucher->voucher }}</h3>
                                        </div>
                                        <div class="uk-text-right">
                                            <div class="uk-grid">
                                                <div class="uk-width-1-1">
                                                    <a href="{{ route('voucher::show', str_slug($voucher->voucher)) }}" class="uk-button uk-button-small bl-button">
                                                        View
                                                        <i class="material-icons uk-vertical-align-middle">&#xE88E;</i>
                                                    </a>
                                                </div>
                                                <div class="uk-width-1-1">
                                                    <a href="{{ route('voucher::buy', str_slug($voucher->voucher)) }}" class="uk-button uk-button-small bl-button">
                                                        Add to Cart
                                                        <i class="material-icons uk-vertical-align-middle">&#xE854;</i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('frontend.partials.notes')
@stop