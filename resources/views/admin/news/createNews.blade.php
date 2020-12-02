@extends('layouts.admin')

@section('content')
       <form action="/admin/news/create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="page-title-wrapper">
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                                <i class="pe-7s-graph text-success">
                                </i>
                            </div>
                            <div>Создать новость
                                <div class="page-title-subheading">Здесь вы можете добавить новость.

                                </div>
                            </div>
                        </div>
                        <div class="page-title-actions">
                            <div class="d-inline-block dropdown">
                                <input type="submit" class="mb-2 mr-2 btn-hover-shine btn btn-success" value="Создать">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Добавление новости</h5>
                        <form class="">
                            <div class="position-relative row form-group"><label for="name" class="col-sm-2 col-form-label" required>Заголовок</label>
                                <div class="col-sm-10"><input name="title" id="name" placeholder="Напиши сюда заголовок" type="text" class="form-control" required></div>
                            </div>

                            <div class="position-relative row form-group"><label for="visible" class="col-sm-2 col-form-label">Статус:</label>
                                <div class="col-sm-10">
                                    <select name="visible" id="visible" class="form-control">

                                        <option value="1"> Активный </option>
                                        <option value="0"> Скрытый </option>

                                    </select>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="summary-ckeditor" class="col-sm-2 col-form-label">
                                    В кратце:
                                </label>

                                <div class="col-sm-10">
                                    <textarea name="shortcut" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="summary-ckeditor" class="col-sm-2 col-form-label">
                                    Новость
                                </label>

                                <div class="col-sm-10">
                                    <textarea name="body" id="summary-ckeditor" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleFile" class="col-sm-2 col-form-label">Изображения новости</label>
                                <div class="col-sm-10">
                                    <input name="image" id="exampleFile" type="file" class="form-control-file" required>
                                    <small class="form-text text-muted">This is some placeholder block-level help text
                                        for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                </div>
                            </div>
                            <div class="position-relative row form-check">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </form>

      <script type="text/javascript">
            CKEDITOR.replace( 'summary-ckeditor', {
                filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });
        </script>

       <script type="text/javascript">

       </script>
@endsection
