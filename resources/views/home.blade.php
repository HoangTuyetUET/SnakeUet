<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Snake-UET</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <!-- Styles -->
</head>
<body>
<header>
    <section id="navArea">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="collapse navbar-collapse navbar-ex1-collapse text-home">
                    <ul>
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#" >Tài liệu </a></li>
                        <li><a href="#">Đề thi</a></li>
                            <div class="dropdown top-right1">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">{{ Auth::user()->name }}
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Đăng bài</a></li>
                                    <li><a  href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Đăng xuất
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </div>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    </section>
    <section id="newSec">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9" id="intro">
                <h1 id="font">SNAKE-UET</h1>
                <h6 id="m-font">University Of Engineering And Technology</h6>
            </div>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Tìm tài liệu">
                </div>
                <button type="submit" class="btn btn-default">Tìm</button>
            </form>
        </div>
    </section>
</header> <!-- end header -->

<div id="content">
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <h3 id="newdoctitle">SNAKE-UET</h3>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <aside class="center-content">
                        <h4 id="newdoctitle">Tài liệu mới nhất</h4>
                        <div id="jssor_1" class="m-jssor_1" >
                            <!-- Loading Screen -->
                            <div data-u="loading" class="load">
                                <div class="m-load"></div>
                                <div class="m-loading"></div>
                            </div>
                            <div data-u="slides" class="slide">
                                <div data-p="100.60">
                                    <img data-u="image" src="{{asset('css/image/002.jpg')}}" />
                                    <div data-u="thumb">
                                        <img class="i" src="{{asset('css/image/tai-lieu.jpg')}}" />
                                        <div class="t">Phát triển ứng dụng Web</div>
                                        <div class="c">Tài liệu tham khảo môn Phát triển ứng dụng Web</div>
                                    </div>
                                </div>
                                <div data-p="100.60" style="display: none;">
                                    <img data-u="image" src="{{asset('css/image/003.jpg')}}" />
                                    <div data-u="thumb">
                                        <img class="i" src="{{asset('css/image/tai-lieu.jpg')}}"  />
                                        <div class="t">Phát triển ứng dụng Web</div>
                                        <div class="c">Tài liệu tham khảo môn Phát triển ứng dụng Web</div>
                                    </div>
                                </div>
                                <div data-p="100.60" style="display: none;">
                                    <img data-u="image" src="{{asset('css/image/004.jpg')}}" />
                                    <div data-u="thumb">
                                        <img class="i" src="{{asset('css/image/tai-lieu.jpg')}}" />
                                        <div class="t">Phát triển ứng dụng Web</div>
                                        <div class="c">Tài liệu tham khảo môn Phát triển ứng dụng Web</div>
                                    </div>
                                </div>
                                <div data-p="100.60" style="display: none;">
                                    <img data-u="image" src="{{asset('css/image/005.jpg')}}" />
                                    <div data-u="thumb">
                                        <img class="i" src="{{asset('css/image/tai-lieu.jpg')}}" />
                                        <div class="t">Phát triển ứng dụng Web</div>
                                        <div class="c">Tài liệu tham khảo môn Phát triển ứng dụng Web</div>
                                    </div>
                                </div>
                                <div data-p="100.60" style="display: none;">
                                    <img data-u="image" src="{{asset('css/image/006.jpg')}}" />
                                    <div data-u="thumb">
                                        <img class="i" src="{{asset('css/image/tai-lieu.jpg')}}" />
                                        <div class="t">Phát triển ứng dụng Web</div>
                                        <div class="c">Tài liệu tham khảo môn Phát triển ứng dụng Web</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Thumbnail Navigator -->
                            <div data-u="thumbnavigator" class="jssort11" class="thumbnav" style="position:absolute;right:5px;top:0px;font-family:Arial, Helvetica, sans-serif;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none;width:200px;height:300px;" data-autocenter="2">
                                <!-- Thumbnail Item Skin Begin -->
                                <div data-u="slides" style="cursor: default;">
                                    <div data-u="prototype" class="p">
                                        <div data-u="thumbnailtemplate" class="tp"></div>
                                    </div>
                                </div>
                                <!-- Thumbnail Item Skin End -->
                            </div>
                            <!-- Arrow Navigator -->
                            <span data-u="arrowleft" class="jssora02l"  data-autocenter="2"></span>
                            <span data-u="arrowright" class="jssora02r"  data-autocenter="2"></span>
                        </div>
                    </aside>
                </div>
                <section id="newSec">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <!-- <div class="container"> -->
                            <h4 id="newdoctitle">Tài liệu và đề thi theo môn học</h4>
                            <div class="list-group" id="m-list">
                                <a href="pages/tai-lieu.html" class="list-group-item">Phát triển ứng dụng Web</a>
                                <a href="#" class="list-group-item">Giải tích 1</a>
                                <a href="#" class="list-group-item">Giải tích 2</a>
                                <a href="#" class="list-group-item">Đại số</a>
                                <a href="#" class="list-group-item">Tin học cơ sở 4</a>
                                <a href="#" class="list-group-item">Cơ nhiệt</a>
                                <a href="#" class="list-group-item">Điện quang</a>
                                <a href="#" class="list-group-item">Toán rời rạc</a>
                                <a href="#" class="list-group-item">Xác suất thống kê</a>
                                <a href="#" class="list-group-item">Công nghệ phần mềm</a>
                                <a href="#" class="list-group-item">Lập trình nâng cao</a>
                                <a href="#" class="list-group-item">Cấu trúc dữ liệu và giải thuật</a>
                                <a href="#" class="list-group-item">Kiến trúc máy tính</a>
                                <a href="#" class="list-group-item">Nguyên lý hệ điều hành</a>
                                <a href="#" class="list-group-item">Thiết kế giao diện người dùng</a>
                            </div>
                            <!-- </div> -->
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <?php
                            $i=0;
                            while ($i<=12){
                            $i++;
                            ?>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <a href="#" class="thumbnail">
                                    <img src="{{asset('css/image/tai-lieu.jpg')}}" alt="tài liệu">
                                    <p id="title-document">Tài liệu tham khảo môn Phát triển ứng dụng Web.</p>
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div><!-- end content -->

<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <p class="copyright">Copyright &copy; 2016 Snake-UET <a href="index.html"></a></p>
            </div>
        </div>
    </div>
</div> <!-- end footer -->

<script src="{{asset('js/snake/jssor.slider-21.1.6.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/snake/jssor_1_slider_init.js')}}" type="text/javascript"></script>
<script src="{{asset('js/snake/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/snake/bootstrap.min.js')}}" type="text/javascript"></script>



</body>
</html>
