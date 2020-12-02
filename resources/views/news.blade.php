@extends('layouts.user')
@section('head')

    <title>VeloCITY | YoWa</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="{{asset("assets/img/favicon.png")}}" rel="icon">
    <link href="{{asset("assets/img/apple-touch-icon.png")}}" rel="apple-touch-icon">

@endsection
@section('content')

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>VeloCITY</h2>
                    <ol>
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="all-projects.php">Все Проекты</a></li>
                        <li>VeloCITY</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row">

                    <div class="col-lg-8 mb-3">
                        <h2 class="portfolio-title">Первая арт-студия велосипедов в Узбекистане</h2>
                        <iframe width="100%" height="80%" src="https://www.youtube.com/embed/4bUQ_2dyjp8?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <!-- <div class="owl-carousel portfolio-details-carousel">
                          <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                          <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                          <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                        </div> -->
                    </div>

                    <div class="col-lg-4 portfolio-info">
                        <h3>Информация О Проекте</h3>
                        <ul class="mb-3">
                            <li><strong>Категория</strong>: Web design</li>
                            <li><strong>Поставщик Услуг</strong>: ASU Company</li>
                            <li><strong>Дата Создания Проекта</strong>: 01 March, 2020</li>
                            <li><strong>URL проекта</strong>: <a href="#">www.example.com</a></li>
                        </ul>
                        <button type="button" class="btn btn-primary mx-auto" data-toggle="modal" data-target="#donateModal">Поддержать</button>



                        <div class="modal fade" id="donateModal" tabindex="-1" aria-labelledby="donateModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Поддержать</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <p>Вы должны сделать оплату по реквизитам ниже и в течение минуты ввести сумму оплаты и своей контакт для получения награждения в поля ниже.</p>

                                            <hr>

                                            <p>Реквизиты для оплаты:</p>
                                            <p>UZCARD: 8600 0000 0000 0000</p>

                                            <hr>

                                            <div class="form-group">
                                                <label for="donate-name" class="col-form-label">Фамилия и имя владельца карты:</label>
                                                <input type="text" class="form-control" id="donate-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="donate-phone" class="col-form-label">Телефон:</label>
                                                <input type="text" class="form-control" id="donate-phone">
                                            </div>
                                            <div class="form-group">
                                                <label for="donate-money" class="col-form-label">Сумма:</label>
                                                <input type="text" class="form-control" id="donate-money">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                        <button type="button" class="btn btn-primary">Отправить</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>
                            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                        </p>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <p>Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Amet praesentium blanditiis ex eos, obcaecati ipsum, harum placeat nemo pariatur id ea voluptatibus non atque alias provident suscipit consectetur sit modi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae iusto ab quos itaque maiores corrupti debitis, impedit perspiciatis et, pariatur eveniet consequuntur quas consectetur fugit asperiores similique numquam aut assumenda. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel recusandae hic ea illo sed culpa aliquam natus sequi repudiandae doloremque distinctio, mollitia soluta temporibus quis nemo! Perferendis excepturi rerum autem. </p>
                        <img src="assets/img/more-services-5.png" alt="Img" class="img-fluid">
                        <p>Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Amet praesentium blanditiis ex eos, obcaecati ipsum, harum placeat nemo pariatur id ea voluptatibus non atque alias provident suscipit consectetur sit modi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae iusto ab quos itaque maiores corrupti debitis, impedit perspiciatis et, pariatur eveniet consequuntur quas consectetur fugit asperiores similique numquam aut assumenda. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel recusandae hic ea illo sed culpa aliquam natus sequi repudiandae doloremque distinctio, mollitia soluta temporibus quis nemo! Perferendis excepturi rerum autem. </p>
                        <img src="assets/img/more-services-5.png" alt="Img" class="img-fluid">
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection