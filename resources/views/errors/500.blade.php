@extends('layouts.custom')


@section('title', 'Ошибка 500')
@section('description', 'Ошибка 500')
@section('keywords', '')
@section('canonical', '')
@section('og:title', 'Ошибка 500')
@section('og:description', 'Ошибка 500')
@section('og:url', '')
@section('twitter:description', 'Ошибка 500')
@section('twitter:title', 'Ошибка 500')

@section('content')

    <?php $pages = 'Ошибка 404' ?>

    @component('components.breadcrumb')
        {{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot
        {{--        @slot('prev') Предыдущая @endslot--}}

        @slot('active') Ошибка 500 @endslot
        @slot('activelink')  @endslot



    @endcomponent

    <div class="error">
        <div class="container">
            <div class="error__inner">
                <h1 class="error__title">Ошибка 500!</h1>


            </div>
        </div>
    </div>





@endsection
