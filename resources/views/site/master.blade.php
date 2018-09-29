<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema AgendaSUS</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{ asset('plugins/timepicker/bootstrap-timepicker.min.css') }}">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/site/site.css') }}">
    <!-- =======================================================
    Theme Name: Medilab
    Theme URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!--banner-->
<section id="banner" class="banner">
    <div class="bg-color">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="col-md-12">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="{{ asset('template/img/logo.png') }}" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class=""><a href="{{ route('site.home') }}">Início</a></li>
                            <li class=""><a href="{{ route('site.home') }}">Serviços</a></li>
                            <li class=""><a href="{{ route('site.home', '#agendamento') }}">Agendar</a></li>
                            @if(!Auth::check())
                                <li class=""><a href="{{ route('site.login') }}">Minhas Consultas</a></li>
                            @else
                                <li class=""><a href="#">Olá {{ Auth::user()->name }}</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="banner-info">
                    <div class="banner-logo text-center">
                        <img src="{{ asset('template/img/logo.png') }}" class="img-responsive">
                    </div>
                    <div class="banner-text text-center">
                        <h1 class="white">Sistema para pré-agendamento de consultas do SUS</h1>
                        <p  class="cor-white-p">O AgendaSUS pensa na ficilidade do paciente em pré-agendar uma consulta, visando sua qualidade de vida.</p>
                        <a href="{{ route('site.home', '#agendamento') }}" class="btn btn-appoint">Pré-Agendamento.</a>
                    </div>
                    <div class="overlay-detail text-center">
                        <a href="{{ route('site.home', '#service') }}"><i class="fa fa-angle-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ banner-->
    @yield('content')
<!--footer-->
<footer id="footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 marb20">
                    <div class="ftr-tle">
                        <h4 class="white no-padding">Sobre Nós</h4>
                    </div>
                    <div class="info-sec">
                        <p class="cor-white-p">Equipe de três desenvolvedores WEB, para a maratona de programação Hackaton.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 marb20">
                    <div class="ftr-tle">
                        <h4 class="white no-padding">Links</h4>
                    </div>
                    <div class="info-sec">
                        <ul class="quick-info">
                            <li><a href="index.html"><i class="fa fa-circle"></i>Início</a></li>
                            <li><a href="#service"><i class="fa fa-circle"></i>Serviços</a></li>
                            <li><a href="#agendamento"><i class="fa fa-circle"></i>Agendar</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 marb20">
                    <div class="ftr-tle">
                        <h4 class="white no-padding">Siga-nos</h4>
                    </div>
                    <div class="info-sec">
                        <ul class="social-icon">
                            <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                            <li class="bgred"><i class="fa fa-google-plus"></i></li>
                            <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                            <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-line">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    © Copyright AgendaSUS
                    <div class="credits">
                        <!--
                        All the links in the footer should remain intact.
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medilab
                      -->
                        Dsenvolvido por: <a href="#">Leonardo, Nicácio e Douglas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ footer-->

<script src="{{ asset('template/js/jquery.min.js') }}"></script>
<script src="{{ asset('template/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('template/js/custom.js') }}"></script>
{{--<script src="{{ asset('template/contactform/contactform.js') }}"></script>--}}
<script src="{{ asset("plugins/timepicker/bootstrap-timepicker.min.js") }}"></script>
<script src="{{ mix('js/site/site.js') }}"></script>

<script>
    //Timepicker
    $('.timepicker').timepicker({
        showInputs: false,
        showSeconds:false,
        defaultTime:false,
        showMeridian:false,
        maxHours:18,
    });

    $('.mask-cpf').inputmask({
        mask: "9{0,3}[.999][.999][-99]",
        placeholder: '',
        autoUnmask: true,
        showMaskOnHover: false,
        showMaskOnFocus: false,
        removeMaskOnSubmit:true,
        greedy: false
    });

    $('.mask-sus').inputmask({
        mask: "999.9999.9999.9999",
        placeholder: '',
        autoUnmask: true,
        showMaskOnHover: false,
        showMaskOnFocus: false,
        removeMaskOnSubmit:true,
        greedy: false
    });

    $('.mask-celular').inputmask({
        mask: ['(99) 9999-9999', '(99) 99999-9999'],
        placeholder: '',
        showMaskOnHover: false,
        showMaskOnFocus: false,
        keepStatic: true,
    });
</script>

</body>

</html>
