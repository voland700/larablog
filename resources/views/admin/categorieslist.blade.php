@extends('layouts.admin')

@section('content')



    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <a href="{{route('admincategorynew')}}" type="button" class="btn btn-primary"><i class="fa fa-star"></i>&nbsp; Создать категорию</a>
            </div>
            <div class="card-header"> <strong class="card-title">Список авторов</strong> </div>
            <div class="table-stats order-table ov-h">
                <table class="table ">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Наименование</th>
                        <th>Количество</th>
                        <th>Редактировать</th>
                        <th>Удалить</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if($categories)
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category['id']}}.</td>
                        <td>{{$category['name']}}</td>
                        <td>{{$category['count']}}</td>
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
