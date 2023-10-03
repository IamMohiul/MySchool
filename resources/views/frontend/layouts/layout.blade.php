<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>গলাচিপা সরকারি কলেজ</title>
  <link rel="icon" href="frontend/assets/otherimage/1741230812922136.png" type="image/gif" sizes="16x16">

  <!-- CDN CSS -->
  <link  rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link  rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@500;600;700&amp;display=swap">
  <link  rel="stylesheet" type="text/css" href="https://fonts.maateen.me/adorsho-lipi/font.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <link  rel="stylesheet" type="text/css" href="https://jquery.app/jqueryscripttop.css">
  
  <!-- All Css -->
  <link  rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/sliderResponsive.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/uikit.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
  <link  rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap-4-navbar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}">

</head>
<style>
    
</style>
<body>
  <div class="container">
    <div class="col-sm-12 col-12 bg-white pt-2">

      @include('frontend.layouts.navbar')

    </div>
  </div><!-------------------End Container-------------------->

  <div class="container">
    <div class="col-sm-12 col-12" id="mainpage">
      <div class="row">

        @yield('content')
        <!--Side Nav-->
        @include('frontend.layouts.sidenav')
        <!--End Side Nav-->
      </div>   
    </div><!-----------------------End sidebar---------------------->
  </div><!-------End Container----------->
@include('frontend.layouts.footer')



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" type="text/javascript" ></script>


  <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery-3.3.1.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('frontend/assets/js/bootstrap.min.js')}}"></script>
  <script  type="text/javascript" src="{{ asset('frontend/assets/js/bootstrap-4-navbar.html')}}"></script>
  <script type="text/javascript" src="{{ asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.nivo.slider.js')}}"></script>
  <script type="text/javascript" src="{{ asset('frontend/assets/js/uikit.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('frontend/assets/js/uikit-icons.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.exzoom.js')}}"></script>
  <script  type="text/javascript" src="{{ asset('frontend/assets/js/sliderResponsive.js')}}"></script>
  <script type="text/javascript" src="{{ asset('frontend/assets/js/main.js')}}"></script>

  <script>
    AOS.init();
    var preloader=document.getElementById('load');
    function myfunctions() {
      preloader.style.display='none';
    }

    $(document).ready(function() {
      $('#example').DataTable();
    } );


  </script>








  <script>
    $(document).ready(function() {

      $("#slider1").sliderResponsive({
  // Using default everything
    // slidePause: 5000,
    // fadeSpeed: 800,
    // autoPlay: "on",
    // showArrows: "off",
    // hideDots: "off",
    // hoverZoom: "on",
    // titleBarTop: "off"
  });

      $("#slider2").sliderResponsive({
        fadeSpeed: 300,
        autoPlay: "off",
        showArrows: "on",
        hideDots: "on"
      });

      $("#slider3").sliderResponsive({
        hoverZoom: "off",
        hideDots: "on"
      });

    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable();
    } );
  </script>



</body>
</html>