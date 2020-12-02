@extends("layouts.user")
@section('content')
    @foreach($user_data as $user)
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <table>
                    <tr>
                        <td>name</td>
                        <td><input type="text" name="name" id=""></td>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td><input type="text" name="name" id=""></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    @endforeach
    @endsection