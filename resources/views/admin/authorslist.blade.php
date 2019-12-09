@extends('layouts.admin')

@section('content')



    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <a href="{{route('adminauthornew')}}" type="button" class="btn btn-primary"><i class="fa fa-star"></i>&nbsp; Создать Автора</a>
            </div>
            <div class="card-header"> <strong class="card-title">Список авторов</strong> </div>
            <div class="table-stats order-table ov-h">
                <table class="table ">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>Изображение</th>
                        <th>Редактировать</th>
                        <th>Удалить</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if($authors)
                    @foreach ($authors as $author)
                    <tr>
                        <td>{{$author->id}}.</td>
                        <td>{{$author->author_name}}</td>
                        <td><img src="/images/authors/{{$author->author_img}}" alt="img" width="200"></td>
                        <td><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Изменить</button></td>
                        <td><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-times"></i>&nbsp;Удалить</button></td>
                    </tr>
                    @endforeach
                   @endif
                    </tbody>
                </table>
            </div>
        </div>

















    </div>


@endsection
