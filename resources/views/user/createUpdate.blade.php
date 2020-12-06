@extends('layouts.user')
@section('head')
<title>Создать Новость | YoWa"</title>

    <script src="{{ asset('/js/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
    @endsection
@section('content')

    <main class="mt-5 height-100vh">
        
        
    <div class="container mb-4">
        <div class="row">
            <div class="col-8 mx-auto">
                <h3 class="h3 text-center">Создать Новость</h3>
            <form action="" method="POST" enctype="multipart/form-data" class="border p-3">
             @csrf
              <div class="form-group">
                <label>Название новости(Заголовок): </label>
                <input type="text" name="pledgeName" class="form-control">
              </div>
              <div class="form-group">
                <label>в кратце:</label>
                <textarea name="shortcut" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label>Новость:</label>
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