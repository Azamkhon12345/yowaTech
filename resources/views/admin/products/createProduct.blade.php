@extends('layouts.admin')

@section('content')
       <form action="/admin/products/create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="page-title-wrapper">
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                                <i class="pe-7s-graph text-success">
                                </i>
                            </div>
                            <div>Создать товар:
                                <div class="page-title-subheading">Здесь вы можете добавить товар.

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
                    <div class="card-body"><h5 class="card-title">Добавление товара</h5>
                        <form class="">

                        <div class="position-relative row form-group"><label for="name" class="col-sm-2 col-form-label" required>Название товара</label>
                                <div class="col-sm-10"><input name="name" id="name" placeholder="Напиши сюда Название товара" type="text" class="form-control" required></div>
                            </div>

                            <div class="position-relative row form-group"><label for="price" class="col-sm-2 col-form-label" required>Цена</label>
                                <div class="col-sm-10"><input name="price" id="price" placeholder="Напиши сюда цену" type="number" class="form-control" required></div>
                            </div>

                            <div class="position-relative row form-group"><label for="visible" class="col-sm-2 col-form-label">Статус:</label>
                                <div class="col-sm-10">
                                    <select name="visible" id="visible" class="form-control">
                                        <option value="1"> Активный </option>
                                        <option value="0"> Скрытый </option>

                                    </select>
                                </div>
                            </div>

                            <div class="position-relative row form-group"><label for="category" class="col-sm-2 col-form-label">Категория:</label>
                                <div class="col-sm-10">
                                    <select name="category" id="category" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{$category->category}}"> {{$category->category}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="position-relative row form-group"><label for="subcategory" class="col-sm-2 col-form-label">Подкатегория:</label>
                                <div class="col-sm-10">
                                    <select name="subcategory" id="subcategory" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="position-relative row form-group"><label for="prime_status" class="col-sm-2 col-form-label">prime status:</label>
                                <div class="col-sm-10">
                                    <select name="prime_status" id="prime_status" class="form-control">
                                        <option value="hot"> hot </option>
                                        <option value="new"> new </option>
                                        <option value="sell"> sell </option>
                                        <option value="none"> none </option>
                                    </select>
                                </div>
                            </div>
                            <div class="position-relative row form-group"><label for="size" class="col-sm-2 col-form-label">size:</label>
                                <div class="col-sm-10">
                                    <select name="size" id="size" class="form-control">
                                        <option value="xl"> xl </option>
                                        <option value="m"> m </option>
                                        <option value="l"> l </option>
                                        <option value="ml"> ml </option>
                                        <option value="lm"> lm </option>
                                    </select>
                                </div>
                            </div>


                            <div class="position-relative row form-group">
                                <label for="summary-ckeditor" class="col-sm-2 col-form-label">
                                    Описание товара:
                                </label>

                                <div class="col-sm-10">
                                    <textarea name="description" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleFile" class="col-sm-2 col-form-label">Изображения Товара</label>
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

       <script type="text/javascript" src="{{asset('./js/JQuery3.3.1.js')}}"></script>
       <script type="text/javascript">

           // $.ajaxSetup({
           //     headers:{
           //         'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content'),
           //     }
           // })
           $.ajax({
               type:"POST",
               url:"/admin/subacategory/createPage",
               data:{
                   "category": $('#category').val(),
                   "_token": "{{ csrf_token() }}",
               },
               success: function (result) {

                   $('#subcategory').html(result);
               },
               error:function (result,error) {
                   alert(error);
               }
           })
           $('#category').change(function (e) {
               e.preventDefault();
               $.ajax({
                   type:"POST",
                   url:"/admin/subacategory/createPage",
                   data:{
                       "category": $(this).val(),
                       "_token": "{{ csrf_token() }}",
                   },
                   success: function (result) {

                       $('#subcategory').html(result);
                   },
                   error:function (result,error) {
                       alert(error);
                   }
               })
           })
       </script>
@endsection
