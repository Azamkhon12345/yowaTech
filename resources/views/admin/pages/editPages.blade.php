@extends('layouts.admin')

    @section('content')

        @foreach($news as $item)
           <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="page-title-wrapper">
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                                <i class="pe-7s-graph text-success">
                                </i>
                            </div>
                            <div>Редактировать новсоть
                                <div class="page-title-subheading">There you can add, edit or delete any product.
                                </div>
                            </div>
                        </div>
                        <div class="page-title-actions">
                            <div class="d-inline-block dropdown">
                                <input type="submit" class="mb-2 mr-2 btn-hover-shine btn btn-success" value="Сохранить">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Редактировать новсоть</h5>
                        <form class="">
                            <div class="position-relative row form-group"><label for="title"
                                                                                 class="col-sm-2 col-form-label">Название</label>
                                <div class="col-sm-10"><input name="title" id="title" value="{{$item->title}}" type="text" class="form-control"></div>
                            </div>

                            <div class="position-relative row form-group"><label for="visible"
                                                                                 class="col-sm-2 col-form-label">Статус:</label>
                                <div class="col-sm-10">
                                    <select name="visible" id="visible" class="form-control">
                                        @if($item->visible)
                                        <option value="1" selected> Активный </option>
                                        <option value="0"> Скрытый </option>
                                            @else
                                            <option value="1"> Активный </option>
                                            <option value="0" selected> Скрытый </option>
                                            @endif
                                    </select>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="summary-ckeditor" class="col-sm-2 col-form-label">
                                    В кратце:
                                </label>

                                <div class="col-sm-10">
                                    <textarea name="shortcut" class="form-control">{{$item->shortcut}}</textarea>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="summary-ckeditor" class="col-sm-2 col-form-label"> Text </label>
                                <div class="col-sm-10"><textarea name="body" id="summary-ckeditor"
                                                                 class="form-control">{!! htmlspecialchars_decode($item->body) !!}</textarea></div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleFile" class="col-sm-2 col-form-label">Изображение новости</label>
                                <div class="col-sm-10 put-img">
                                    <div class="img-box2">
                                    	<img src="{{asset('/storage/'.$item->image)}}">
                                    </div>
                                    <input name="image" id="exampleFile" type="file" class="form-control-file">
                                </div>
                            </div>
                            <div class="position-relative row form-check">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </form>
        @endforeach


        <script type="text/javascript">
            CKEDITOR.replace( 'summary-ckeditor', {
                filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });
        </script>
    @endsection
