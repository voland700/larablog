@extends('layouts.admin')

@section('content')



    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"> <strong class="card-title">Список публикаций</strong> </div>
            <div class="table-stats order-table ov-h">
                <table class="table ">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Изображение</th>
                        <th>Активен</th>
                        <th>Избранное</th>
                        <th>Категория</th>
                        <th>Автор</th>
                        <th>Поробнее</th>
                        <th>Редактировать</th>
                        <th>Удалить</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1.</td>
                        <td><a href="#">О ноотропах и об их будущем</a></td>
                        <td><img src="#" alt="img"></td>
                        <td><span>Да</span></td>
                        <td><span>Наука</span></td>
                        <td><span>Лена Миро</span></td>
                        <td><button type="button" class="btn btn-primary"><i class="fa fa-star"></i>&nbsp; Primary</button></td>
                        <td><button type="button" class="btn btn-danger btn-lg">Danger</button></td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>














    </div>


@endsection
