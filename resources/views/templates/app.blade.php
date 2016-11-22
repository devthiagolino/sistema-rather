<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="iso-8859-1"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <title>Rather CWK</title>
	<meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="author" content="Jamerson Ramalho - www.jamersonramalho.net" />
  <meta name="copyright" content="2016" />
	<meta name="title" content="Rather CWK" />
	<meta name="description" content="Espaço coworking, localizado em Maceió - Alagoas. Um ambiente confortável, com custo reduzido e pessoas apaixonadas pelo empreendedorismo. Seu futuro escritório!" />
  
  <!-- META FACEBOOK -->
  <meta property="og:title" content="Rather CWK" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="Espaço coworking, localizado em Maceió - Alagoas. Um ambiente confortável, com custo reduzido e pessoas apaixonadas pelo empreendedorismo. Seu futuro escritório!" />
  <meta property="og:url" content="http://meuescritorio.rather.com.br" />
  <meta property="og:image" content="http://www.rather.com.br/logo_facebook.png" />
  <meta property="og:site_name" content="Rather CWK" />
  <meta property="og:locale" content="pt_br" />

  <!-- META TWITTER -->
  <meta name="twitter:card" content="summary"/>
  <meta name="twitter:description" content="Espaço coworking, localizado em Maceió - Alagoas. Um ambiente confortável, com custo reduzido e pessoas apaixonadas pelo empreendedorismo. Seu futuro escritório!"/>
  <meta name="twitter:title" content="Rather CWK"/>

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">
    
  <!-- ICONES -->
  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
  <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png" />
  
  <!-- ICONES APPLE -->
  <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('apple-touch-icon-precomposed.png') }}" />
  <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('apple-touch-icon-57x57.png') }}" />
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('apple-touch-icon-72x72-precomposed.png') }}" />
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('apple-touch-icon-114x114-precomposed.png') }}" />
  <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('apple-touch-icon-144x144-precomposed.png') }}" />

  <!--[if lt IE 9]>
    <script src="_INC/js/css3-mediaqueries.js"></script>
    <script src="_INC/js/html5shiv.js"></script>
  <![endif]-->
  
  <!--[if lt IE 7]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <![endif]-->
  
</head>
<body>
  
  <!-- === GLOBAL === -->
  <div id="global">
  


    <!-- === TOPO === -->
    <header id="topo">

      <!-- === ENVOLVE MENU === -->
      <div id="envolve_menu">

          @include('partial.header')

          @include('partial.nav')

      </div>
      <!-- fim div#ENVOLVE MENU -->

    </header>
    <!-- fim header#TOPO -->
    



    

    <!-- === CONTEUDO === -->
    <div id="conteudo" role="main">
      <div class="container"> <!-- CONTAINER - CONTEUDO -->

        @yield('content')

      </div> <!-- FIM CONTAINER - CONTEUDO -->
    </div>
    <!-- fim div#CONTEUDO -->


    @include('partial.footer')
    
  </div>
  <!-- fim div#GLOBAL -->

<script type="text/javascript" src="{{ asset('assets/js/scripts.js') }}"></script>
<script>
$(function()
{

  /*===================
    MENU MOBILE
  ====================*/
  menuMobile(754);

  $(window).resize(function()
  {
    menuMobile(754);
  });

});
</script>
  
</body>
</html>