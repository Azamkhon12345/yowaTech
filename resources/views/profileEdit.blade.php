@extends("layouts.user")
@section('content')
    @foreach($user_data as $user)
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <a href="/add/product/{{$user->id}}" class="btn btn-prime">Добавить товар</a>
            </div>
            <div class="col-xl-6 d-flex justify-content-between">
                <div>
                    <h3>Ваш баланс :</h3>  <span> {{$user->pocket}}</span>
                </div>
                <div>
                    <button type="button" class="btn btn-primary mx-auto" data-toggle="modal" data-target="#pocket">Пополнить баланс</button>
                </div>
            </div>
            <div class="col-xl-12 p-3">
                <hr>
                <form action="" enctype="multipart/form-data" method="POST">
                    @csrf
                    <table class="w-100 justify-content-center mt-5 mb-5">
                        <tr>
                            <td>name</td>
                            <td><input type="text" name="name" class="form-control"  value="{{$user->name}}" id=""></td>
                        </tr>
                        <tr>
                            <td>Аватар</td>
                            <td><input type="file" class="form-control" name="avatar" id=""></td>
                        </tr>
                        <tr>
                            <td>about me</td>
                            <td>
                                <textarea name="aboutme"  class="form-control" id="">
                                     {{$user->aboutme}}
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>my motto</td>
                            <td>
                                <input type="text" name="motto"  value="{{$user->motto}}" class="form-control" id="">
                            </td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td><input type="email" class="form-control"  name="email" value="{{$user->email}}" id=""></td>
                        </tr>
                        <tr >
                            <td></td>
                            <td class="d-flex justify-content-between">
                                <div></div>
                                <input type="submit" class="form-control"  name="Submit"  id=""></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="pocket" tabindex="-1" aria-labelledby="donateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Пополнение баланса</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="POST" action="/pocket/donate/{{$user->id}}">
                <div class="modal-body">
                        @csrf
                        <p>Вы должны сделать оплату по реквизитам ниже и ввести сумму оплаты и своей контакт для получения награждения в поля ниже.</p>
                        <hr>
                        <p>Реквизиты для оплаты:</p>
                        <p>UZCARD: 8600 0000 0000 0000</p>

                        <hr>
                        <div class="form-group">
                            <label for="donate-name" class="col-form-label">Фамилия и имя владельца карты:</label>
                            <input type="text" class="form-control" name="name" id="donate-name">
                        </div>
                        <div class="form-group">
                            <label for="donate-phone" class="col-form-label">Телефон:</label>
                            <input type="text" class="form-control" name="phone" id="donate-phone">
                        </div>
                        <div class="form-group">
                            <label for="donate-money" class="col-form-label">Сумма:</label>
                            <input type="text" class="form-control" name="cash" id="donate-money">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
                </form>
            </div>

        </div>
    </div>
@endforeach
@endsection