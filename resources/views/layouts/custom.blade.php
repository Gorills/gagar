<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ URL::asset('css/site.css?').('v.1.0.0') }}">
    <script src="https://kit.fontawesome.com/0af96d350a.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')" />
    <link rel="canonical" href="@yield('canonical')"/>
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('og:title')" />
    <meta property="og:description" content="@yield('og:description')" />
    <meta property="og:url" content="@yield('og:url')" />
    <meta name="theme-color" content="#9d231f">
    <meta property="og:site_name" content="" />
    <meta property="vk:image" content="@yield('image')" />
    <meta property="og:image" content="@yield('image')" />
    <meta property="og:image" content="@yield('image-mess')" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="@yield('twitter:title')" />
    <meta name="twitter:description" content="@yield('twitter:description')" />

    <link rel="shortcut icon" href="{{URL::asset('favicon.ico')}}" type="image/x-icon" />
    <link rel="icon" type="image/png" href="{{URL::asset('favicon-32x32.png')}}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{URL::asset('/fav/apple-touch-icon.png')}}" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{URL::asset('/fav/apple-touch-icon-57x57.png')}}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{URL::asset('/fav/apple-touch-icon-72x72.png')}}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('/fav/apple-touch-icon-76x76.png')}}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{URL::asset('/fav/apple-touch-icon-114x114.png')}}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{URL::asset('/fav/apple-touch-icon-120x120.png')}}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{URL::asset('/fav/apple-touch-icon-144x144.png')}}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{URL::asset('/fav/apple-touch-icon-152x152.png')}}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('/fav/apple-touch-icon-180x180.png')}}" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>



@component('components.header')

@endcomponent





@yield('content')










@component('components.footer')

@endcomponent


@component('components.popup')
@endcomponent


@component('components.schema')

@endcomponent






<style src="{{ URL::asset('js/app.js') }}"></style>
<script src="{{ URL::asset('js/site.js') }} "></script>


</body>
</html>
