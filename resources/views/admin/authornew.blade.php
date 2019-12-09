@extends('layouts.admin')

@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"> <strong>Новая категория</strong></div>
            <div class="card-body card-block">
                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="author_name" class=" form-control-label">Имя автора</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="author_name" name="author_name" placeholder="Text" class="form-control"><small class="form-text text-muted">Введите имя автора</small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="slug" class=" form-control-label">URL (slug)</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="slug" name="slug" placeholder="Text" class="form-control"><small class="form-text text-muted">чпу - ссылка</small></div>
                    </div>


                    <div class="row form-group">
                        <div class="col col-md-3"><label for="author_txt" class=" form-control-label">Краткое описание</label></div>
                        <div class="col-12 col-md-9"><textarea name="author_txt" id="author_txt" rows="3" placeholder="текст " class="form-control"></textarea><small class="form-text text-muted">Тектс - об авторе</small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="author_img" class=" form-control-label">File input</label></div>
                        <div class="col-12 col-md-9"><input type="file" id="author_img" name="author_img" class="form-control-file"></div>
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
    <script> var editor = CKEDITOR.replace( 'author_txt' );</script>

@endsection
