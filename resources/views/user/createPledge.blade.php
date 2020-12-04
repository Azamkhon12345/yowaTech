@extends('layouts.user')
@section('head')

    <script src="{{ asset('/js/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
@endsection
@section('content')

    <main class="mt-5 height-100vh">
        <h1 class="mt-5">There is creating a project</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <table align="center">
                <tr>
                    <td>Название проекта</td>
                    <td><input type="text" name="pledgeName"></td>
                </tr>
                <tr>
                    <td>Картинка <br>
                        Размер 640x390
                    </td>
                    <td><input type="file" name="main-image"></td>
                </tr>
                <tr>
                    <td>Полное описание подарка или сервиса:</td>
                    <td>
                        <textarea name="description" id="summary-ckeditor" class="form-control"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Полное описание подарка или сервиса:</td>
                    <td>
                        <textarea name="description" id="summary-ckeditor" class="form-control"></textarea>
                    </td>
                </tr>
            </table>
            <input type="submit" value="submit">
        </form>
    </main>

    <script type="text/javascript">
        CKEDITOR.replace( 'summary-ckeditor', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection