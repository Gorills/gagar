@extends('admin.layouts.app_admin')


@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Редактирование отзыва @endslot
            @slot('parent') Главная @endslot
            @slot('active') Отзывы @endslot
        @endcomponent

        <hr />


        <form action="{{route('admin.work.update', $work)}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}

            @include('admin.works.partials.form')

        </form>






    </div>

@endsection
