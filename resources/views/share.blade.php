@extends('layouts.custom')

@section('title', $stock->meta_title)
@section('description', $stock->meta_description)
@section('keywords', '')
@section('canonical', url('/shares/'.$stock->slug))
@section('og:title', $stock->meta_title)
@section('og:description', $stock->meta_description)
@section('og:url', url('/shares/'.$stock->slug))
@section('twitter:title', $stock->meta_title)
@section('twitter:description', $stock->meta_description)
@section('image', Storage::url($stock->image))
@section('image-mess', Storage::url($stock->image))


@section('content')

@component('components.breadcrumbs')
    @slot('title')
        {{ $stock->title ?? ''}}
    @endslot

    @slot('parent')
        Главная
    @endslot

    @slot('prev')
        Акции
    @endslot

    @slot('link')
        {{ url('/shares') }}
    @endslot

    @slot('active')
        {{ $stock->title ?? ''}}
    @endslot

    @slot('activelink')
        {{ url('/shares/'.$stock->slug) }}
    @endslot

    @slot('img')
    {{ Storage::url($stock->image) }}
    @endslot


@endcomponent

<section class="posad">
    <div class="container">
        <div class="posad__inner">
            {{-- <h2 class="posad__title">{{ $stock->title }}</h2> --}}
            <p class="posad__desc">{{ $stock->description }}</p>
            {{-- <div class="posad__wrap">
                <img src="{{ Storage::url($stock->image) }}" alt="{{ $stock->title }}" class="posad__img">
            </div> --}}
            <div class="posad__text">{!! $stock->full_description !!}</div>

        </div>
    </div>
</section>



   

    


@endsection
