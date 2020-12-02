@extends('layouts.admin')
@section('content')
    <link rel="stylesheet" href="{{asset('./main.css')}}">
    @foreach($category as $item)
        <form action="" method="POST" enctype="multipart/form-data">
        @method('POST')
    @csrf
            <input type="hidden" class="count" name="count" value="0">
    <div class="page-title-wrapper">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-graph text-success">
                        </i>
                    </div>
                    <div>Изменение категории
                        <div class="page-title-subheading">Внести изменение к категорию {{$item->category}}
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
            <div class="card-body"><h5 class="card-title">Изменение категории</h5>
                <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Название</label>
                    <div class="col-sm-10">
                        <input type="text" name="category" value="{{$item->category}}" class="form-control">
                    </div>
                </div>
{{--                <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2   col-form-label">Главная </label>--}}
{{--                    <div class="col-sm-1">--}}
{{--                        <input type="checkbox" name="onMain" class="form-control" checked="{{$item->onMain}}">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="position-relative row form-group">--}}
{{--                    <label for="exampleSelect" class="col-sm-2 col-form-label">Изображения</label>--}}
{{--                    <div class="col-sm-10">--}}
{{--                        <input type="file" name="image" class="form-control">--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div id="subcategory">
                    <div class="position-relative row form-group"><label for="subcategory" class="col-sm-2 col-form-label">Подкатегория</label>
                        <div class="col-sm-10 input-div" >
<!--                            --><?php $count =0 ?>
                            @foreach(json_decode($item->subcategory,true) as $subcategory)
                                    <input type="text" placeholder="Пустые удаляются" name="{{$subcategory['id']}}" value="{{$subcategory['subcategory']}}" class="form-control"> <br/>
                                        <?php $count= $subcategory['id'] ?>
                            @endforeach
                        <a   class="mb-2 mr-2 btn-hover-shine btn btn-light add_btn"> Добавить подкатегорию</a>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </div>
    </form>
    @endforeach
                   
                    <script type="text/javascript" src="{{asset('./js/JQuery3.3.1.js')}}">




                    </script>
                <script type="text/javascript">
                    var i={{$count+1}};
                    $(".add_btn").click(function () {

                        $('.input-div').prepend('' +
                            '<input type="text" class="form-control" placeholder="Введите подкатегория. Пустые удаляются" name="'+ i +'">'+'<br>'+
                            '');
                        // alert('asd');
                        i++;
                        $('.count').val(i);
                    });
                </script>
@endsection
