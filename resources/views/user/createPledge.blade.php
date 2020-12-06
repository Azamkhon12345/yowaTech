@extends('layouts.user')
@section('head')
<title>Создать Подарок | YoWa"</title>

    <script src="{{ asset('/js/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
    @endsection
@section('content')

    <main class="mt-5 height-100vh">
        
        
    <div class="container mb-4">
        <div class="row">
            <div class="col-8 mx-auto">
                <h3 class="h3 text-center">Создать Подарок</h3>
            <form action="" method="POST" enctype="multipart/form-data" class="border p-3">
             @csrf
              <div class="form-group">
                <label>Название подарка: </label>
                <input type="text" name="pledgeName" class="form-control">
              </div>
              <div class="form-group">
                <label>Картинка</label>
                <input type="file" name="projectPhoto" class="form-control-file">
              </div>
              <div class="form-group">
                <label>Цена :</label>
                <input type="text" name="price" class="form-control">
              </div>
              <div class="form-group">
                <label>Полное описание подарки</label>
                <textarea name="description" id="summary-ckeditor" class="form-control"></textarea>
              </div>
              
              <div class="row">
                  <div class="col-6"><div class="form-group form-check">
                <input type="checkbox" class="form-check-input">
                <label class="form-check-label">Согласен с <a href="/rules">условиями</a></label>
              </div></div>
                  <div class="col-6 text-right"><button type="submit" class="btn btn-primary">Создать</button></div>
              </div>
  
            </form>
        
            </div>
        </div>
    </div>    
        
        
        
    
    </main>

    <script type="text/javascript">
        CKEDITOR.replace( 'summary-ckeditor', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
    @endsection