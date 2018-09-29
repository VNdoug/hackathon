<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema AgendaSUS</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/style.css') }}">
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
                            <li class="active"><a href="#banner">Início</a></li>
                            <li class=""><a href="#service">Serviços</a></li>
                            <li class=""><a href="#contact">Agendar</a></li>
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
                        <p>O AgendaSUS pensa na ficilidade do paciente em pré-agendar uma consulta, visando sua qualidade de vida.</p>
                        <a href="#contact" class="btn btn-appoint">Pré-Agendamento.</a>
                    </div>
                    <div class="overlay-detail text-center">
                        <a href="#service"><i class="fa fa-angle-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ banner-->
<!--service-->
<section id="service" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <h2 class="ser-title">Sobre o Sistema</h2>
                <hr class="botm-line">
                <p>AgendaSUS é um sistema voltado a área da saúde, que faz o pré-agendamento de consultas para o Sistema Unificado de Saúde (SUS), ele prioriza a facilidade do paciente em não precisar ir até uma unidade de saúde para agendar uma consulta, com o AgendaSUS o paciente pode fazer isso da sua própria casa, não precisando acordar cedo e enfretar enormes filas.</p>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="service-info">
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="icon-info">
                        <h4>24 Horas Para Você</h4>
                        <p>Pré-angede sua consulta em qualquer horário do dia no conforto de sua casa.</p>
                    </div>
                </div>
                <div class="service-info">
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="icon-info">
                        <h4>Pessoas/Equipe</h4>
                        <p>Sua consulta é confirmada por atendentes qualificados, onde assim que confirmada será encaminhado um e-mail lhe avisando.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="service-info">
                    <div class="icon">
                        <i class="fa fa-user-md"></i>
                    </div>
                    <div class="icon-info">
                        <h4>Minha Consulta</h4>
                        <p>A consulta com o médico é armazenada no sistema, onde ficará salvo seu prontuário e receituário disponivel para futuras consultas. </p>
                    </div>
                </div>
                <div class="service-info">
                    <div class="icon">
                        <i class="fa fa-file-pdf-o"></i>
                    </div>
                    <div class="icon-info">
                        <h4>Histórico</h4>
                        <p>Você tem acesso ao seu histórico de consultas, onde pode gerar um PDF com o receituário caso necessite.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="cta-2" class="section-padding">
    <div class="container">
        <div class=" row">
            <div class="col-md-2"></div>
            <div class="text-right-md col-md-4 col-sm-4">
                <h2 class="section-title white lg-line">« Porque<br> Fizemos Isso? »</h2>
            </div>
            <div class="col-md-4 col-sm-5">
                O AgendaSUS foi criado não só pensando na praticidade de pré-agendar uma consulta mas também em pessoas que necessitam acordar cedo para consultar e muitas vezes correm serio risco de vida, não só por causa de sua saúde mas também por assaltos, visando o alto indice de crimilinalidade principalmente em cidades de grande porte, sendo assim não será mais preciso correr este risco, pois o paciente pode pré-agendar e depois que confirmado ir consultar, sem correr demais riscos.
                <p class="text-right text-primary"><i>— AgendaSUS</i></p>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
<!--cta-->
<!--contact-->
<section id="contact" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="ser-title">Informação</h2>
                <hr class="botm-line">
            </div>
            <div class="col-md-4 col-sm-4">
                <h3>Sua consulta ainda não foi agendada, preencha o formulário e aguarde que entraremos em contato com você!</h3>
            </div>
            <div class="col-md-8 col-sm-8 marb20">
                <div class="contact-info">
                    <h3 class="cnt-ttl">Preencha o formulário e aguarde!</h3>
                    <div class="space"></div>
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control br-radius-zero" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Fale um pouco doque você precisa"></textarea>
                            <div class="validation"></div>
                        </div>

                        <div class="form-action">
                            <button type="submit" class="btn btn-form">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ contact-->
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
                        <p>Equipe de três desenvolvedores WEB, para a maratona de programação Hackaton.</p>
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
                            <li><a href="#contact"><i class="fa fa-circle"></i>Agendar</a></li>
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
<script src="{{ asset('template/contactform/contactform.js') }}"></script>

</body>

</html>
