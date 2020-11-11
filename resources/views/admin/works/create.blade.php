@extends('admin.layouts.app_admin')


@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Добавить отзыв @endslot
            @slot('parent') Главная @endslot
            @slot('active') Отзывы @endslot
        @endcomponent

        <hr />


        <form action="{{route('admin.work.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            @include('admin.works.partials.form')

        </form>






    </div>

@endsection
