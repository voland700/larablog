@extends('layouts.admin')

@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"> <strong>Новая категория</strong></div>
            <div class="card-body card-block">
                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="name" class=" form-control-label">Наименование</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="name" name="name" placeholder="Text" class="form-control"><small class="form-text text-muted">Введите название категории</small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="slag" class=" form-control-label">URL (slug)</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="slag" name="slag" placeholder="Text" class="form-control"><small class="form-text text-muted">чпу - ссылка</small></div>
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
                        <div class="col col-md-3"><label for="category_description" class=" form-control-label">Описание категории</label></div>
                        <div class="col-12 col-md-9"><textarea name="category_description" id="category_description" rows="9" placeholder="Описание..." class="form-control"></textarea><small class="form-text text-muted">СЕО - описание страницы</small></div>
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
    <script> var editor = CKEDITOR.replace( 'category_description' );</script>

@endsection
