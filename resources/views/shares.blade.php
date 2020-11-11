@extends('layouts.custom')

@section('title', 'Скидки на разработку и продвижение сайтов | Gagarin')
@section('description', 'Акции, скидки и антикризисные предложения для наших клиентов.')
@section('keywords', 'скидка на сайт, разработка сайта дешево, акции gagarin')
@section('canonical', '/shares')
@section('og:title', 'Скидки на разработку и продвижение сайтов | Gagarin')
@section('og:description', 'Акции, скидки и антикризисные предложения для наших клиентов.')
@section('og:url', '/shares')
@section('twitter:title', 'Скидки на разработку и продвижение сайтов | Gagarin')
@section('twitter:description', 'Акции, скидки и антикризисные предложения для наших клиентов.')


@section('content')

@component('components.breadcrumbs')
    @slot('title')
        Акции
    @endslot

    @slot('parent')
        Главная
    @endslot


    @slot('active')
        Акции
    @endslot

    @slot('activelink')
        {{ url('/shares') }}
    @endslot

    @slot('img')
        {{ URL::asset('/images/breadcrumbs.png') }}
    @endslot


@endcomponent

<div class="news">
    <div class="container">
        <div class="news__inner">
            
            

            <div class="news__row">


                @foreach ($stocks as $stock)
                    <a href="{{  url('/shares'.'/'.$stock->slug) }}" class="news__item">
                        
                        <div class="news__wrap">
                            <img src="{{ Storage::url($stock->image) }}" alt="{{ $stock->title }}" class="news__img">    
                        </div>
                        
                        <h3 class="news__title">{{ $stock->title }}</h3>
                        <p class="news__desc">{{ $stock->description }}</p>
                    </a>
                @endforeach
               


            </div>
        </div>
    </div>
</div>





@endsection
