@extends('admin.layouts.app_admin')



@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Список отзывов @endslot
            @slot('parent') Главная @endslot
            @slot('active') Все отывы @endslot

        @endcomponent

        <hr>
        <div class="text-right">
            <a href="{{route('admin.work.create')}}" class="btn btn-primary mb-3"><i class="fas fa-plus mr-3"></i>Добавить отзыв</a>
        </div>

        <table class="table table-striped mb-5">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Дата</th>
                <th scope="col">ФИО</th>

                <th scope="col">Действие</th>
            </tr>
            </thead>
            <tbody>

            @forelse($works as $work)
                <tr>
                    <th scope="row">{{ $work->id }}</th>
                    <td>{{ $work->description }}</td>
                    <td>{{ $work->title }}</td>


                    <td class="text-right">

                        <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false}" action="{{ route('admin.work.destroy', $work) }}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}
                            <a href="{{ route('admin.work.edit', $work) }}" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </form>


                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center"><h2>Данные отсутствуют</h2></td>
                </tr>

            @endforelse

            </tbody>
            <tfoot>
            <tr>
                <td colspan="4">
                    <ul class="pagination text-right">
                        {{ $works->links() }}
                    </ul>
                </td>
            </tr>
            </tfoot>

        </table>
    </div>


@endsection
