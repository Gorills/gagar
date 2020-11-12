@extends('layouts.custom')

@section('title', 'Новости в SEO и новинки технологий по разработке и продвижению сайтов')
@section('description', 'SEO/IT новости - свежие и интересные материалы по разработке и продвижению сайтов.')
@section('keywords', 'новости seo, новости it')
@section('canonical', '/news')
@section('og:title', 'Новости в SEO и новинки технологий по разработке и продвижению сайтов')
@section('og:description', 'SEO/IT новости - свежие и интересные материалы по разработке и продвижению сайтов.')
@section('og:url', '/news')
@section('twitter:title', 'Новости в SEO и новинки технологий по разработке и продвижению сайтов')
@section('twitter:description', 'SEO/IT новости - свежие и интересные материалы по разработке и продвижению сайтов.')
@section('image', '')


@section('content')

@component('components.breadcrumbs')
    @slot('title')
        Новости 
    @endslot

    @slot('parent')
        Главная
    @endslot

  

    @slot('active')
        Новости
    @endslot

    @slot('activelink')
        {{ url('/news') }}
    @endslot

    @slot('img')
        {{ URL::asset('/images/breadcrumbs.png') }}
    @endslot


@endcomponent


<div class="news">
    <div class="container">
        <div class="news__inner">
            


            <div class="news__row">

                @foreach ($news as $new)
                <a href="{{  url('/news'.'/'.$new->slug) }}" class="news__item">
                    
                    <div class="news__wrap">
                        <img src="{{ Storage::url($new->image) }}" alt="{{ $new->title }}" class="news__img">    
                    </div>
                    
                    <h3 class="news__title">{{ $new->title }}</h3>
                    <p class="news__desc">{{ $new->description }}</p>
                    <p class="news__time">{{ $new->created_at->format('Y-m-d') }}</p>
                    

                </a>
            @endforeach
                   
              


            </div>
        </div>
    </div>
</div>





@endsection
