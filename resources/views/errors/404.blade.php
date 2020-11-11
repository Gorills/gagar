@extends('layouts.custom')


@section('title', 'Ошибка 404')
@section('description', 'Ошибка 404')
@section('keywords', 'Ошибка 404')
@section('canonical', '')
@section('og:title', 'Ошибка 404')
@section('og:description', 'Ошибка 404')
@section('og:url', '')
@section('twitter:description', 'Ошибка 404')
@section('twitter:title', 'Ошибка 404')

@section('content')

@component('components.breadcrumbs')
    @slot('title')
        Ошибка 404 
    @endslot

    @slot('parent')
        Главная
    @endslot



    @slot('active')
        Ошибка 404
    @endslot

    @slot('activelink')
        {{ url('/') }}
    @endslot

    @slot('img')
        {{ URL::asset('/images/breadcrumbs.png') }}
    @endslot


@endcomponent



    @endcomponent

    <div class="error">
        <div class="container">
            <div class="error__inner">
                <h1 class="error__title">Такая страница не найдена! Ошибка 404!</h1>


            </div>
        </div>
    </div>





@endsection
