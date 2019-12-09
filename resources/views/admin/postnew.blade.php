@extends('layouts.admin')

@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"> <strong>Новая категория</strong></div>
            <div class="card-body card-block">
                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="name" class=" form-control-label">Название поста</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="name" name="name" placeholder="Text" class="form-control"><small class="form-text text-muted">Введите название поста</small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="slag" class=" form-control-label">URL (slug)</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="slag" name="slag" placeholder="Text" class="form-control"><small class="form-text text-muted">чпу - ссылка</small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Активен</label></div>
                        <div class="col col-md-9">
                            <div class="form-check">
                                <div class="checkbox">
                                    <label for="active" class="form-check-label ">
                                        <input type="checkbox" id="active" name="active" value="1" checked class="form-check-input">Да
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Избранное</label></div>
                        <div class="col col-md-9">
                            <div class="form-check">
                                <div class="checkbox">
                                    <label for="choice" class="form-check-label ">
                                        <input type="checkbox" id="choice" name="choice" value="0" class="form-check-input">Да
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col col-md-3"><label for="sort" class=" form-control-label">Индекс сортировки</label></div>
                        <div class="col-1 col-md-1"><input type="text" id="sort" name="sort" value="500" placeholder="500" class="form-control"></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="category_id" class="form-control-label">Категория поста</label></div>
                        <div class="col-2 col-md-2">
                            <select name="category_id" id="category_id" class="form-control">
                                @if($categotries)
                                    @foreach($categotries as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                     @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="autor_id" class="form-control-label">Автор поста</label></div>
                        <div class="col-2 col-md-2">
                            <select name="autor_id" id="autor_id" class="form-control">
                                @if($authors)
                                    @foreach($authors as $author)
                                        <option value="{{$author->id}}">{{$author->author_name}}</option>
                                    @endforeach
                                @endif


                                <option value="0">Олег Макаренко</option>
                                <option value="1">Сергей Веселовский</option>
                                <option value="2">Лена Миро</option>
                                <option value="3">Доктор Малявин</option>
                                <option value="0">Лёвик</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="mata_title" class=" form-control-label">Meta title</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="mata_title" name="mata_title" placeholder="Text" class="form-control"><small class="form-text text-muted">CEO заголовк браузера</small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="meta_key" class=" form-control-label">Meta keys</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="meta_key" name="meta_key" placeholder="Text" class="form-control"><small class="form-text text-muted">СЕО - ключевые слова</small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="mata_description" class=" form-control-label">Meta discription</label></div>
                        <div class="col-12 col-md-9"><textarea name="mata_description" id="mata_description" rows="3" placeholder="Описание..." class="form-control"></textarea><small class="form-text text-muted">СЕО - описание страницы</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="prev" class=" form-control-label">Краткое  описаниие</label></div>
                        <div class="col-12 col-md-9"><textarea name="prev" id="prev" rows="3" placeholder="Краткое  описаниие..." class="form-control"></textarea><small class="form-text text-muted">Краткое описание</small></div>
                    </div>


                    <div class="row form-group">
                        <div class="col col-md-3"><label for="description" class=" form-control-label">Содержание поста</label></div>
                        <div class="col-12 col-md-9"><textarea name="description" id="description" rows="9" placeholder="Описание..." class="form-control"></textarea><small class="form-text text-muted">СЕО - описание страницы</small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="img" class=" form-control-label">Изображение поста</label></div>
                        <div class="col-12 col-md-9"><input type="file" id="img" name="img" class="form-control-file"></div>
                    </div>



                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-primary"> <i class="fa fa-dot-circle-o"></i> Submit </button>
                        <button type="reset" class="btn btn-secondary"> <i class="fa fa-ban"></i> Reset </button>
                    </div>
                </form>
            </div>
             <div class="card-footer"></div>
         </div>
    </div>

    <script src="{{ asset('/assets/admin/js/ckeditor/ckeditor.js') }}"  type="text/javascript" charset="utf-8" ></script>
    <script> var editor = CKEDITOR.replace( 'description' );</script>

@endsection
