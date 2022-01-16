<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="fr">
<!--<![endif]-->

<head>
  <!-- =====  BASIC PAGE NEEDS  ===== -->
  <meta charset="utf-8">
  <title>Bienvenue sur indigenat web de medicament traductionnel</title>
  <!-- =====  SEO MATE  ===== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="distribution" content="global">
  <meta name="revisit-after" content="2 Days">
  <meta name="robots" content="ALL">
  <meta name="rating" content="8 YEARS">
  <meta name="Language" content="en-us">
  <meta name="GOOGLEBOT" content="NOARCHIVE">
  <!-- =====  MOBILE SPECIFICATION  ===== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="viewport" content="width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- =====  CSS  ===== -->

  <link rel="stylesheet" href="Access-Control-Allow-Origin: https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/moncss.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/magnific-popup.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.carousel.css')}}">
  <link rel="shortcut icon" href="{{asset('frontend/images/favicon.png')}}">
  <link rel="apple-touch-icon" href="{{asset('frontend/images/apple-touch-icon.png')}}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontend/images/apple-touch-icon-72x72.png')}}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{asset('frontend/images/apple-touch-icon-114x114.png')}}">
    <link href="{{asset('frontend/css/intlTelInput.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main2.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    @stack('css')
</head>

<body>
    <div class="loder"></div>
    <div class="wrapper">
        <!-- =====  LODER  ===== -->
    {{-- @include('include.pubaccueil') --}}
    <!-- =====  HEADER END  ===== -->
        @include('include.header')
        <div class="container">
            <div class="row">
                {{--                    @include('include.category_home')--}}
                @yield('content')
            </div>
        </div>
    @include('include.footer')
    <!-- =====  FOOTER START  ===== -->
        {{-- @include('indigenats.modal.confirmeNumber')
        @include('indigenats.modal.sendMailResetPassword') --}}
    </div>

    <a id="scrollup">Scroll</a>
    <script src="{{asset('frontend/js/jQuery_v3.1.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.firstVisitPopup.js')}}"></script>
    <script src="{{asset('frontend/js/custom.js')}}"></script>
   
    <script type="text/javascript" src="{{asset('frontend/js/jquery.blockUI.js')}}"></script>
    <script type="text/javascript">
        //create to new compte
        $(document).ready(function() {
            //show modal for rest password
            $('a.forgot-password-client').on('click',function (e){
               e.preventDefault();
                $('.modal-client-form').modal('hide');
                $('#modal-reset-password-client').modal('show');
            });
            //show modal for

            
            

            $('form.sign-client').on('submit', function (e){
                e.preventDefault();
                $('.loading-img').css('display','block');
                $('.btn-register-client').attr('disabled','disabled')

                $.ajax({
                    url: $(this).attr('action'),
                    type:'POST',
                    data:$(this).serialize(),
                    dataType:'JSON',
                    cache: false,
                    crossOrigin: true,
                    success: function(data) {
                        if (data.statut=='failed'){
                            $('div.message').text('');
                            $('div.message').append(data.message_error);
                            $('.loading-img').css('display','none');
                            $('.btn-register-client').removeAttr('disabled')
                            $('div.message').addClass('alert alert-danger');
                            $.each(data.validation_errors, function (index, value) {
                                $('div.message').append(value);
                                $('div.message').append('<br />');
                            });
                        }else {
                            $('#myModal').modal('hide');
                            $('#modal-code').modal('show');
                        }
                    },
                });
            });
        });

    </script>

    <script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>

    
@stack('scripts')
  </body>

  </html>
