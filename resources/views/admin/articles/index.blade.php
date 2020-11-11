@extends('admin.layouts.app_admin')



@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Список новостей@endslot
            @slot('parent') Главная @endslot
            @slot('active') Все новости@endslot

        @endcomponent

        <hr>
        <div class="text-right">
            <a href="{{route('admin.article.create')}}" class="btn btn-primary mb-3"><i class="fas fa-plus mr-3"></i>Содать новость</a>
        </div>

        <table class="table table-striped mb-5">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">image</th>
                <th scope="col">title</th>

                <th scope="col">Действие</th>
            </tr>
            </thead>
            <tbody>

            @forelse($articles as $article)
                <tr>
                    <th scope="row">{{ $article->id }}</th>
                    <td>

                        <img style="height: 40px" src="{{ Storage::url($article->image) }}" alt="">

                    </td>
                    <td>{{ $article->title }}</td>


                    <td class="text-right">

                        <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false}" action="{{ route('admin.article.destroy', $article) }}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}
                            <a href="{{ route('admin.article.edit', $article) }}" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
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
                        {{ $articles->links() }}
                    </ul>
                </td>
            </tr>
            </tfoot>

        </table>
    </div>


@endsection
