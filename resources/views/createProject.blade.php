@extends('layouts.user')
@section('head')
<title>Создать Проект | YoWa"</title>

    <script src="{{ asset('/js/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
    @endsection
@section('content')

    <main class="mt-5 height-100vh">
        
        
    <div class="container mb-4">
        <div class="row">
            <div class="col-8 mx-auto">
                <h3 class="h3 text-center">Создать Проект</h3>
                <form action="" method="POST" enctype="multipart/form-data" class="border p-3">
            @csrf
  <div class="form-group">
    <label>Название проекта</label>
    <input type="text" name="projectName" class="form-control">
  </div>
  <div class="form-group">
    <label>Картинка</label>
    <input type="file" name="projectPhoto" class="form-control-file">
  </div>
  <div class="form-group">
    <label>Коротко о проекте</label>
    <input type="text" name="projectShortcut" class="form-control">
  </div>
   <div class="form-group">
    <label>Регион реализации</label>
    <select class="form-control" name="projectPlace">
        
      <option>город Ташкент</option>
      <option>Ташкентская область</option>
      <option>Сырдарьинская область</option>
      <option>Джизакская область</option>
      <option>Самаркандская область</option>
      <option>Кашкадарьинская область</option>
      <option>Сурхандарьинская область</option>
      <option>Навоинская область</option>
      <option>Бухарская область</option>
      <option>Хорезмская область</option>
      <option>Андижанская область</option>
      <option>Наманганская область</option>
      <option>Ферганская область</option>
      <option>Республика Каракалпакстан</option>
      <option>Другой регион</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Категория</label>
    <select class="form-control" name="projectCategory">
        @foreach($categories as $category)
         <option>{{$category->category}}</option>
        @endforeach
    </select>
  </div>
  <div class="form-group">
    <label>Финансовая цель</label>
    <input type="text" name="projectPrice" class="form-control">
  </div>
  <div class="form-group">
    <label>Срок окончания проекта</label>
    <input type="date" name="projectDeadline" class="form-control">
  </div>
  <div class="form-group">
    <label>Полное описание проекта</label>
    <textarea name="projectDescription" id="summary-ckeditor" class="form-control"></textarea>
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