@extends('layouts.admin')

@section('content')



    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{route('adminpostnew')}}" type="button" class="btn btn-primary"><i class="fa fa-star"></i>&nbsp; Создать пост</a>
            </div>
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
                        <th>Редактировать</th>
                        <th>Удалить</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if($posts)
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}.</td>
                        <td><a href="/post/{{$post->slag}}" target="_blank">{{$post->name}}</a></td>
                        <td><img src="/images/{{$post->img}}" alt="img" width="200"></td>
                        <td><span>{{$post->active==1 ? 'Да' : 'Нет'}}</span></td>
                        <td><span>{{$post->choice==0 ? 'Нет' : 'Да'}}</span></td>
                        <td><span>{{$post->category->name}}</span></td>
                        <td><span>{{$post->autor->author_name }}</span></td>
                        <td><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Изменить</button></td>
                        <td><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-times"></i>&nbsp;Удалить</button></td>
                    </tr>
                    @endforeach
                   @endif
                    </tbody>
                </table>
            </div>
        </div>

        {{ $posts->links() }}















    </div>


@endsection
