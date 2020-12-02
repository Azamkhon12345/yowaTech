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
                <td><input type="text" name="projectName"></td>
            </tr>
            <tr>
                <td>Картинка <br>
                    Размер 640x390
                </td>
                <td><input type="file" name="projectPhoto"></td>
            </tr>
            <tr>
                <td>Коротко о проекте</td>
                <td><input type="text" name="projectShortcut"></td>
            </tr>
                <tr>
                    <td>Регион реализации</td>
                    <td><input type="text" name="projectPlace"></td>
                </tr>
                <tr>
                    <td>Category:</td>
                    <td><input type="text" name="projectCategory"></td>
                </tr>
                <tr>
                    <td>Финансовая цель:</td>
                    <td><input type="text" name="projectPrice"></td>
                </tr>
                <tr>
                    <td>Срок окончания проекта:</td>
                    <td><input type="date" name="projectDeadline"></td>
                </tr>
                <tr>
                    <td>Полное описание проекта:</td>
                    <td>
                        <textarea name="projectDescription" id="summary-ckeditor" class="form-control"></textarea>
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