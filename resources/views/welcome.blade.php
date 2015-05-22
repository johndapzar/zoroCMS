<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title>Thalai Kristian Pawl | Chanmari Unit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <link rel="shortcut icon" href="{{ asset('/img/tkp.png') }}">

    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    
    <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/js/rs-plugin/css/settings.css') }}">

    <script type="text/javascript" src="{{ asset('/js/modernizr.custom.32033.js') }}"></script>
    
    <link rel="stylesheet" href="{{ asset('/css/eco.css') }}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body>

    <div class="pre-loader">
        <div class="load-con">
            <img src="{{ asset('/img/eco/logo.png') }}" class="animated fadeInDown" alt="">
            <div class="spinner">
              <div class="bounce1"></div>
              <div class="bounce2"></div>
              <div class="bounce3"></div>
            </div>
        </div>
    </div>
   
    <header>
        
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="fa fa-bars fa-lg"></span>
                        </button>
                        <a class="navbar-brand" href="/">
                            <img src="{{ asset('/img/eco/logo.png') }}" alt="" class="logo">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#news">news</a>
                            </li>
                            <li><a href="#article">article</a>
                            </li>
                            <li><a href="#program">program</a>
                            </li>
                            <li><a href="#hruaitu">hruaitute</a>
                            </li>
                            <li><a href="gallery">gallery</a>
                            </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">group<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('group1') }}">group 1</a></li>
                                    <li><a href="{{ url('group2') }}">group 2</a></li>
                                    <li><a href="{{ url('group3') }}">group 3</a></li>
                                    <li><a href="{{ url('') }}">group 4</a></li>
                                   </ul>
                                </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-->
        </nav>

        
        <!--RevSlider-->
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>
                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('/img/transparent.png') }}"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption lfl fadeout hidden-xs"
                            data-x="left"
                            data-y="bottom"
                            data-hoffset="30"
                            data-voffset="0"
                            data-speed="500"
                            data-start="700"
                            data-easing="Power4.easeOut">
                           <!--  <img src="{{ asset('/img/eco/Slides/hand-eco.png') }}" alt=""> -->
                        </div>

                        <div class="tp-caption lfl fadeout visible-xs"
                            data-x="left"
                            data-y="center"
                            data-hoffset="700"
                            data-voffset="0"
                            data-speed="500"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <!-- <img src="{{ asset('/img/eco/iphone-eco.png') }}" alt=""> -->
                        </div>

                        <div class="tp-caption large_white_bold sft" data-x="550" data-y="center" data-hoffset="0" data-voffset="0" data-speed="500" data-start="1200" data-easing="Power4.easeOut">
                            TKP
                        </div>
                        <div class="tp-caption large_white_light sfr" data-x="770" data-y="center" data-hoffset="0" data-voffset="0" data-speed="500" data-start="1400" data-easing="Power4.easeOut">
                            Chanmari Unit
                        </div>
                        <div class="tp-caption large_white_light sfb" data-x="350" data-y="center" data-hoffset="0" data-voffset="90" data-speed="1000" data-start="1500" data-easing="Power4.easeOut">
                            KRISTA LEH KOHHRAN TAN
                        </div>

                       <!--  <div class="tp-caption sfb hidden-xs" data-x="550" data-y="center" data-hoffset="0" data-voffset="85" data-speed="1000" data-start="1700" data-easing="Power4.easeOut">
                            <a href="#about" class="btn btn-primary inverse btn-lg">LEARN MORE</a>
                        </div>
                        <div class="tp-caption sfr hidden-xs" data-x="730" data-y="center" data-hoffset="0" data-voffset="85" data-speed="1500" data-start="1900" data-easing="Power4.easeOut">
                            <a href="#getApp" class="btn btn-default btn-lg">GET APP</a>
                        </div> -->

                    </li>
                    <!-- SLIDE 2 -->
                    <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('/img/transparent.png') }}"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption lfb fadeout hidden-xs"
                            data-x="center"
                            data-y="bottom"
                            data-hoffset="0"
                            data-voffset="0"
                            data-speed="1000"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="img/eco/Slides/group_pic.jpg" alt="">
                        </div>

                        
                        <!-- <div class="tp-caption large_white_light sft" data-x="center" data-y="250" data-hoffset="0" data-voffset="0" data-speed="1000" data-start="1400" data-easing="Power4.easeOut">
                            Every Pixel <i class="fa fa-heart"></i>
                        </div> -->
                        
                        
                    </li>

                    <!-- SLIDE 3 -->
                    <li data-transition="zoomout" data-slotamount="20" data-masterspeed="1000" >
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('/img/transparent.png') }}"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption customin customout hidden-xs"
                            data-x="right"
                            data-y="center"
                            data-hoffset="0"
                            data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-voffset="50"
                            data-speed="1000"
                            data-start="700"
                            data-easing="Power4.easeOut">
                      <img src="{{ asset('/img/eco/Slides/tkp-logo.png') }}" alt="">
                        </div>

                       <!--  <div class="tp-caption customin customout visible-xs"
                            data-x="center"
                            data-y="center"
                            data-hoffset="0"
                            data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-voffset="0"
                            data-speed="1000"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="{{ asset('/img/eco/Slides/tkp-logo.png') }}" alt="">
                        </div> -->

                      <!--   <div class="tp-caption lfb visible-xs" data-x="center" data-y="center" data-hoffset="0" data-voffset="400" data-speed="1000" data-start="1200" data-easing="Power4.easeOut">
                            <a href="#" class="btn btn-primary inverse btn-lg">Purchase</a>
                        </div> -->

                        
                        <div class="tp-caption mediumlarge_light_white sfl hidden-xs" data-x="left" data-y="center" data-hoffset="200" data-voffset="-50" data-speed="1000" data-start="1000" data-easing="Power4.easeOut">
                           KRISTA LEH KOHHRAN TAN
                        </div>
                        
                        <div class="tp-caption small_light_white sfb hidden-xs text-center " data-x="left" data-y="center" data-hoffset="270" data-voffset="80" data-speed="1000" data-start="1600" data-easing="Power4.easeOut" >
                         <br>
                           <strong><p><font face="krista"> Ka chakna Isua Krista chu ring tlatin 
                            <br> Nitin Pathian ka pawl anga
                            <br>  Kan Kohhran Pathian biakna leh
                            <br> Hnathawhna ah ka tel zel ang
                            <br>  Khawtlang thatna leh Inunauna
                            <br>  Tinghet turin ka thawk anga
                            <br>  Krista hnenah midangte
                             <br> Hruai ka tum tlat ang 
                             </font>
                         </strong></p>
                        </div>
                        
                    </li>
                    
                </ul>
            </div>
        </div>


    </header>


    <div class="wrapper">

        

        <section id="news">
            <div class="container">
                
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>News</h1>
                    <div class="divider"></div>
                    <p>Thutharlam poimawh tak tak te</p>
                </div>

                <div class="row">
                        <div class="about-item scrollpoint sp-effect2">
                            @foreach($postnews as $post)
                            <div class="text-left col-md-3"><h3>{{$post->title}}&nbsp;</h3><br>
                                {!! substr($post->body,0,200) !!}
                                        
                                        ...<br><a class="pull-right" href="{{route('view.show', array($post->id))}}">Read More</a>
                            </div>     
                                @endforeach
                        </div>
                </div>
            </div>
        </section>

        <section id="article">
            <div class="container">
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>Articles</h1>
                    <div class="divider"></div>
                </div>
                <div class="row">
                        <div class="about-item scrollpoint sp-effect2">
                            @foreach($postAll as $post)
                            <div class="text-left col-md-3"><h3>{{$post->title}}&nbsp;</h3><br>
                                {!! substr($post->body,0,200) !!}
                                        
                                        ...<br><a class="pull-right" href="{{route('view.show', array($post->id))}}">Read More</a>
                                      
                             </div>
                                @endforeach
                        </div>
                </div>
            </div>
        </section>

        <section id="program">
            <div class="container">

                <div class="section-heading scrollpoint sp-effect3">
                    <h1>Program</h1>
                    <div class="divider"></div>
                </div>

                <div class="row">
                        <div class="about-item scrollpoint sp-effect2">
                            @foreach($postprog as $post)
                            <div class="text-left col-md-4"><h3>{{$post->title}}&nbsp;</h3>
                                {!! $post->body !!}
                                        
                                      
                             </div>
                                @endforeach
                        </div>
                </div>

            </div>
        </section>

        <section id="hruaitu">
            <div class="container">
                   <div class="section-heading scrollpoint sp-effect3">
                    <h1>Hruaitute</h1>
                    <div class="divider"></div>
                </div>
                    <div class="row">
                        <div class="about-item scrollpoint sp-effect2">
                            @foreach($posthruaite as $post)
                            <div class="text-left col-md-4"><h3>{{$post->title}}&nbsp;</h3>
                                {!! $post->body !!}
                            </div>
                            @endforeach
                        </div>
                    </div>
            </div>
        </section>

        

      <!--   <section id="demo">
            <div class="container">
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>Demo</h1>
                    <div class="divider"></div>
                    <p>Take a closer look in more detail</p>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 scrollpoint sp-effect2">
                        <div class="video-container" >
                            <iframe src="http://player.vimeo.com/video/70984663"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="getApp">
            <div class="container-fluid">
                <div class="section-heading inverse scrollpoint sp-effect3">
                    <h1>Get App</h1>
                    <div class="divider"></div>
                    <p>Choose your native platform and get started!</p>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="hanging-phone scrollpoint sp-effect2 hidden-xs">
                            <img src="{{ asset('/img/eco/eco-angled2.png') }}" alt="">
                        </div>
                        <div class="platforms">
                            <a href="#" class="btn btn-primary inverse scrollpoint sp-effect1">
                                <i class="fa fa-android fa-3x pull-left"></i>
                                <span>Download for</span><br>
                                <b>Android</b>
                            </a>
                            
                                <a href="#" class="btn btn-primary inverse scrollpoint sp-effect2">
                                    <i class="fa fa-apple fa-3x pull-left"></i>
                                    <span>Download for</span><br>
                                    <b>Apple IOS</b>
                                </a>
                        </div>

                    </div>
                </div>

                

            </div>
        </section>

        <section id="support" class="doublediagonal">
            <div class="container">
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>Support</h1>
                    <div class="divider"></div>
                    <p>For more info and support, contact us!</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 scrollpoint sp-effect1">
                                <form role="form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your email">
                                    </div>
                                    <div class="form-group">
                                        <textarea cols="30" rows="10" class="form-control" placeholder="Your message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                </form>
                            </div>
                            <div class="col-md-4 col-sm-4 contact-details scrollpoint sp-effect2">
                                <div class="media">
                                    <a class="pull-left" href="#" >
                                        <i class="fa fa-map-marker fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">4, Some street, California, USA</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#" >
                                        <i class="fa fa-envelope fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="mailto:support@oleose.com">support@oleose.com</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#" >
                                        <i class="fa fa-phone fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">+1 234 567890</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <footer>
            <div class="container">
                <a href="#" class="scrollpoint sp-effect3">
                    <img src="img/eco/logo.png" alt="" class="logo">
                </a>
                <div class="social">
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-twitter fa-lg"></i></a>
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-google-plus fa-lg"></i></a>
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-facebook fa-lg"></i></a>
                </div>
                <div class="rights">
                    <p>Copyright &copy; 2014</p>
                    <p>Template by <a href="http://www.pornhub.com" target="_blank">DapZar</a></p>
                </div>
            </div>
        </footer>

    </div>
    <script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/slick.min.js') }}"></script>
    <script src="{{ asset('/js/placeholdem.min.js') }}"></script>
    <script src="{{ asset('/js/rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
    <script src="{{ asset('/js/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('/js/scripts.js') }}"></script>
    <script>
        $(document).ready(function() {
            appMaster.preLoader();
        });
    </script>
</body>

</html>
