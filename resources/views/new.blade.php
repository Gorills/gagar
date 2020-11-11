@extends('layouts.custom')

@section('title', $new->meta_title)
@section('description', $new->meta_description)
@section('keywords', '')
@section('canonical', url('/news/'.$new->slug))
@section('og:title', $new->meta_title)
@section('og:description', $new->meta_description)
@section('og:url', url('/shares/'.$new->slug))
@section('twitter:title', $new->meta_title)
@section('twitter:description', $new->meta_description)
@section('image', Storage::url($new->image))
@section('image-mess', Storage::url($new->image))

@section('content')

@component('components.breadcrumbs')
    @slot('title')
        {{ $new->title ?? ''}}
    @endslot

    @slot('parent')
        Главная
    @endslot

    @slot('prev')
        Новости
    @endslot

    @slot('link')
        {{ url('/news') }}
    @endslot

    @slot('active')
        {{ $new->title ?? ''}}
    @endslot

    @slot('activelink')
        {{ url('/news/'.$new->slug) }}
    @endslot

    @slot('img')
        {{ Storage::url($new->image) }}
    @endslot


@endcomponent

<article class="posad">
    <div class="container">
        <div class="posad__inner">
            {{-- <p class="posad__desc">{{ $new->description }}</p> --}}
            {{-- <div class="posad__wrap">
                <img src="{{ Storage::url($new->image) }}" alt="{{ $new->title }}" class="posad__img">
            </div> --}}
            <div class="posad__text">{!! $new->full_description !!}</div>
        </div>
    </div>


@component('components.share')
@slot('link')
    {{ url('/news/'.$new) }}
@endslot


@endcomponent
</article>





@endsection
