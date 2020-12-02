@extends('layouts.admin')

    @section('content')

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/min/dropzone.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js"></script>

        @foreach($product as $item)

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
                            <div>Редактировать продукт
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
                <input type="hidden" class="JQsubcat" value="{{$item->subcategory}}">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Редактировать product</h5>

                            <div class="position-relative row form-group"><label for="name" class="col-sm-2 col-form-label" required>Название товара</label>
                                <div class="col-sm-10"><input name="name" id="name" placeholder="Напиши сюда Название товара" type="text" class="form-control" value="{{$item->name}}" required></div>
                            </div>

                            <div class="position-relative row form-group"><label for="price" class="col-sm-2 col-form-label" required>Цена</label>
                                <div class="col-sm-10"><input name="price" id="price" placeholder="Напиши сюда цену" type="number" class="form-control" value="{{$item->price}}" required></div>
                            </div>

                            <div class="position-relative row form-group"><label for="visible" class="col-sm-2 col-form-label">Статус:</label>
                                <div class="col-sm-10">
                                    <select name="visible" id="visible" class="form-control">
                                        @if($item->visible)
                                        <option value="1"> Активный </option>
                                        <option value="0"> Скрытый </option>
                                        @else
                                            <option value="0"> Скрытый </option>
                                            <option value="1"> Активный </option>
                                            @endif
                                    </select>
                                </div>
                            </div>

                            <div class="position-relative row form-group"><label for="category" class="col-sm-2 col-form-label">Категория:</label>
                                <div class="col-sm-10">
                                    <select name="category" id="category" class="form-control">

                                        @foreach($categories as $category)
                                            @if(strcmp($category->category,$item->category)==0)
                                                <option value="{{$category->category}}" autocomplete="off"  selected="selected"> {{$category->category}} </option>
                                            @else
                                                <option value="{{$category->category}}" autocomplete="off"  > {{$category->category}} </option>
                                            @endif
                                        @endforeach
{{--                                        @foreach($categories as $category)--}}
{{--                                        @if($strcmp(category,$item->category)!=0)--}}
{{--                                            <option value="{{$category->category}}" autocomplete="off" > {{$category->category}} </option>--}}
{{--                                        @endif--}}
{{--                                        @endforeach--}}
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
                                    <textarea name="description" class="form-control">{{$item->description}}</textarea>
                                </div>
                            </div>

{{--                        <style>--}}
{{--                            .fullw {--}}
{{--                                width: 100% !important;--}}
{{--                            }--}}
{{--                            .catalogue-wrap-main{--}}
{{--                                width: 100%;--}}
{{--                            }--}}
{{--                            .catalogue-wrap-main .row{--}}
{{--                                width: 100%;--}}
{{--                            }--}}
{{--                            .good-row {--}}
{{--                                display: flex;--}}
{{--                                /*flex-wrap: wrap;*/--}}
{{--                                width: 100%;--}}
{{--                                justify-content: space-between;--}}
{{--                                border-bottom: 1px solid darkgrey;--}}
{{--                                padding-bottom: 10px;--}}
{{--                                margin-bottom: 10px;--}}
{{--                            }--}}
{{--                            .good-row .gl{--}}
{{--                                display: flex;--}}
{{--                                /*flex-wrap: wrap;*/--}}
{{--                            }--}}
{{--                            .good-row .gr{--}}
{{--                                margin-top: 15px;--}}
{{--                            }--}}
{{--                            .good-row .gr>*{--}}
{{--                                max-width: 85px;--}}
{{--                            }--}}
{{--                            .good-row .gr *{--}}
{{--                                width: 100%;--}}
{{--                            }--}}
{{--                            .good-row div>span{--}}
{{--                                display: block;--}}
{{--                                margin-bottom: 10px;--}}
{{--                            }--}}
{{--                            .good-info b{--}}
{{--                                font-weight: bold;--}}
{{--                            }--}}
{{--                            .img-div{--}}
{{--                                min-width: 150px;--}}
{{--                                max-width: 150px;--}}
{{--                                height: 150px;--}}
{{--                                margin-right: 15px;--}}
{{--                            }--}}
{{--                            .img-div img{--}}
{{--                                width: 100%;--}}
{{--                                height: 100%;--}}
{{--                                object-fit: cover;--}}
{{--                            }--}}
{{--                            .myForm{--}}
{{--                                display:none;--}}
{{--                                position:absolute;--}}
{{--                            }--}}
{{--                        </style>--}}
{{--                        <div class="good-row">--}}
{{--                            <div class="gl">--}}
{{--                                @if($item->image != NULL)--}}
{{--                                    <div class="img-div">--}}
{{--                                        <img src="{{'/storage/'.$item->image}}" alt="main image">--}}
{{--                                    </div>--}}
{{--                                    <div class="good-info">--}}
{{--                                        <b>Main image</b>--}}
{{--                                    </div>--}}
{{--                            </div>--}}
{{--                            <div class="gr">--}}

{{--                                <form action="/delete/mainimage/{{$item->id}}" method="POST">--}}
{{--                                    @method('DELETE')--}}
{{--                                    @csrf--}}
{{--                                    <input type="hidden" name="{{$item->image}}" value="delete">--}}
{{--                                    <input type="submit" name="submit" class="btn btn-danger text-capitalize" value="удалить">--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                        <?php $a = json_decode($item->otherImage,1) ?>--}}
{{--                        @if($a != NULL)--}}
{{--                            @foreach($a as $key => $image)--}}
{{--                                <div class="good-row">--}}
{{--                                    <div class="gl">--}}
{{--                                        <div class="img-div">--}}
{{--                                            <img src="{{'/storage/'.$image}}" alt="other image image">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="gr">--}}

{{--                                    <!--<label for="file-upload{{$key}}" class="custom-file-upload btn btn-warning">-->--}}
{{--                                        <!--   Upload-->--}}
{{--                                        <!--    <form method="POST" class="myForm" enctype="multipart/form-data">-->--}}
{{--                                        <!--        @csrf-->--}}
{{--                                    <!--        @method('PUT')-->--}}
{{--                                    <!--        <input type="hidden" name="{{$key}}" value="upload">-->--}}
{{--                                    <!--        <input id="file-upload{{$key}}" name="image" type="file"/>-->--}}
{{--                                        <!--    </form>-->--}}
{{--                                        <!--</label>-->--}}

{{--                                        <form action="" method="POST">--}}
{{--                                            @method('DELETE')--}}
{{--                                            @csrf--}}
{{--                                            <input type="hidden" name="{{$key}}" value="delete">--}}
{{--                                            <input type="submit" name="submit" class="btn btn-danger text-capitalize" value="удалить">--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        @endif--}}
                    </div>
                </div>
                    </div>
            </form>

            <div class="position-relative row form-group">
                <label for="exampleFile" class="col-sm-2 col-form-label">Изображения Товара</label>
                <div class="col-sm-10">
                    <form method="post" action="{{'/admin/product/'.$item->id}}" enctype="multipart/form-data" class="dropzone" id="mydropzone">
                        @csrf
                    </form>
                </div>
            <div class="position-relative row form-check">
                </div>

        </div>

        @endforeach


        <script src="{{asset('./js/JQuery3.3.1.js')}}"></script>
        <script src="{{asset('./js/image-compressor.js')}}"></script>
        <script type="text/javascript">
            $.ajax({
                type:"POST",
                url:"/admin/subacategory/editPage",
                data:{
                    "category": $('#category').val(),
                    "subcategory": $('.JQsubcat').val(),
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
                    url:"/admin/subacategory/editPage",
                    data:{
                        "category": $(this).val(),
                        "subcategory": $('.JQsubcat').val(),
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
        <script type="text/javascript">

            Dropzone.options.mydropzone = {
                transformFile: function(file, done) {
                    const imageCompressor = new ImageCompressor();

                    imageCompressor.compress(file, {
                        // I assume the output image won't have the meta data anymore
                        checkOrientation: true,
                        // Limit output image width & height
                        // For controllable file size & avoid blank output image
                        // https://github.com/xkeshi/image-compressor#maxwidth
                        maxWidth: 1000,
                        maxHeight: 1000,
                        // 0.8 is the default and already good enough
                        // https://github.com/xkeshi/image-compressor#quality
                        quality: 0.6,
                        // Convert ALL PNG images to JPEG
                        convertSize: 0,
                    })
                        .then((result) => {
                            // Handle the compressed image file.
                            done(result)
                        })
                        .catch((err) => {
                            // Handle the error
                            throw err
                        })
                },
                maxFilesize: 20,
                renameFile: function (file) {
                    var dt = new Date();
                    var time = dt.getTime();
                    return time + file.name;
                },
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                addRemoveLinks: true,
                timeout: 60000,
                success: function (file, response) {
                    console.log(response);
                },
                error: function (file, response) {
                    return false;
                }
            }
        </script>
    @endsection
