<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/my.css">
    <![endif]-->
    <link rel="stylesheet" href="/css/rcnttym.css">
    <title>title</title>
</head>
<body style="padding-top:20px">



<div class="container">
    <div class="row">
        <div class="span3 pagination-centered">


            <a href="/"><img style="padding-top:15px; padding-left:20px;" width=92% src="/img/logo.jpg" /></a>

            <!--   <div id="leftside"> !-->

        </div>

        <div class="span9">
            <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                    <li data-target="#myCarousel" data-slide-to="6"></li>
                    <li data-target="#myCarousel" data-slide-to="7"></li>
                    <li data-target="#myCarousel" data-slide-to="8"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="/img/carousel/1.jpg" alt="">
                        <div class="carousel-caption">
                            <h4>Фототехнічний гурток</h4>
                            <p>Робота над панорамо палацу графа Потоцького.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/img/carousel/2.jpg" alt="">
                        <div class="carousel-caption">
                            <h4>Гурток початкового технічного моделювання</h4>
                            <p>Підготовка до виставки.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/img/carousel/3.jpg" alt="">
                        <div class="carousel-caption">
                            <h4>Гурток різьблення по дереву</h4>
                            <p>Майстер-клас з деркоративного оздоблення виробів.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/img/carousel/4.jpg" alt="">
                        <div class="carousel-caption">
                            <h4>Гурток конструювання малогабаритної сільськогосподарської техніки</h4>
                            <p>Обласний конкурс на базі Печерської ЗШ.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="pulic/img/carousel/5.jpg" alt="">
                        <div class="carousel-caption">
                            <h4>Відеостудія "Фокус"</h4>
                            <p>Зйомки нового фільму в цетральному парку м. Тульчина .</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/img/carousel/6.jpg" alt="">
                        <div class="carousel-caption">
                            <h4>Гурток початкового технічного моделювання</h4>
                            <p>Вихованці виготовляють моделі літаків з картону.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/img/carousel/7.jpg" alt="">
                        <div class="carousel-caption">
                            <h4>Гурток юних користувачів персонального комп’ютера</h4>
                            <p>Учні під час практичної роботи.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/img/carousel/8.jpg" alt="">
                        <div class="carousel-caption">
                            <h4>Гурток радіоконструювання</h4>
                            <p>Вчимось працювати з паяльником.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/img/carousel/9.jpg" alt="">
                        <div class="carousel-caption">
                            <h4>Гурток конструювання малогабаритної сільськогосподарської техніки</h4>
                            <p>Вихованці Тарасівської ЗШ.</p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>
    </div>

    <div class="nav navbar">
        <hr class="hr-primary" />
        <ol class="breadcrumb bread-primary navbar-light bg-light">
            <button href="/home" class="btn btn-primary"><i class="fa fa-newspaper-o"></i>Головна</button>
            <li><a href="/contacts" class="btn btn-primary">Контакти</a></li>
            <li><a href="/news" class="btn btn-primary">Новини</a></li>
        </ol>
    </div>

    <script>
        function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>


<div class="container">
    @yield('content')
</div>

    <div class="row">
        <div class="span3">

            <div class="well pagination-centered">
                <!-- SEARCH FORM!! !-->
                <legend>Пошук на сайті</legend>

                <div class="control-group pagination-centered">
                    <div class="controls">
                        <div class="input-prepend">
                <span class="add-on">
                    <i class="icon-search"></i>
                </span>
                            <input class="span2" placeholder="Пошук" type="text" name="search_query" />
                        </div>
                    </div>
                </div>

                <div class="pagination-centered">
                    <button class="btn-primary btn-small btn" type="submit"><i class="icon-search"></i> Знайти</button>
                </div>
            </div>


            <div class="pagination-centered">
                <a href="http://www.mon.gov.ua/" target="_blank"><img style="margin:10px 0 0 0" src="/img/220x90_MONMS_static.gif" width="160" height="60"> </a>
                <a href="http://www.stepanivka.narod.ru/" target="_blank"><img style="margin:10px 0 0 0" src="/img/stepanivka.png"> </a>
            </div>

        </div>


        <div class="span9">
        </div>
    </div>
</div>
<!--     <div class="row">
	<div class="span12">

	    <p align="center">Copyright &copy; 2013 Тульчинський РЦНТТУМ | Site by Dead Dead133@gmail.com</p>
      </div>
         </div>!-->
</div>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
</script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script>
    !function ($) {
        $(function(){
            // carousel demo
            $('#myCarousel').carousel()
        })
    }(window.jQuery)
</script>
</body>
</html>
