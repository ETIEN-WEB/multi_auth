
<header id="header">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
             <ul class="header-top-left">
                 <li class="sitemap">
                     <a href="https://api.whatsapp.com/send/?phone=2250787602132" target="_blank" class="icon-whatsapp">
                         <i class="fa fa-whatsapp fa-2x"></i> <strong>+225 07 8760 2132</strong></a>
                 </li>
            </ul>
          </div>
          <div class="col-sm-6 col-sm-12">
            <ul class="header-top-right">
                {{-- @if()
                    <li class="account"></li>
                    <li class="account" ><a id="login-head" href="" >
                            <img id="img-user" src="{{asset('frontend/images/user-profil.png')}}">
                            </a></li>
                @else
                @endif --}}
                    <li class="account" ><a id="login-head" href="{{ route('doctor.login') }}" class="">ESPACE DOCTOR &nbsp; </a></li>
                    <li class="account" ><a id="login-head" href="{{ route('annonceur.annonceur_login') }}" class="">ESPACE ANNONCEUR  &nbsp; </a></li>
                    <li class="sitemap"><a id="login-head" data-toggle="modal" data-target="#myModal2" href="#">&nbsp; ESPACE USER &nbsp;</a></li>
                
                    <li class="sitemap"><a href="">
                    <i class="fa fa-heart-o fa-2x"></i> <sub class="nb-wishlist"></sub></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    @include('user.modal.login')
    {{-- @include('indigenats.modal.resetpasswordclient')
    @include('indigenats.modal.formresetpasswordclient') --}}
    {{-- @include('indigenats.modal.detail_comnde') --}}
    <div class="header">
      <div class="container">
         <div class="row">
             {{-- @include('include.notification') --}}
         </div>
        <nav class="navbar">
          <div class="navbar-header mtb_20"> <a class="navbar-brand" href=""> <img alt="HealthCared" src="{{asset('frontend/images/logo.png')}}"> </a> </div>
          <div class="header-right pull-right mtb_50">
            
            <button class="navbar-toggle pull-left" type="button" data-toggle="collapse" data-target=".js-navbar-collapse"> <span class="i-bar"><i class="fa fa-bars"></i></span></button>

            <div class="shopping-icon">
              <div class="cart-item " data-target="#cart-dropdown" data-toggle="collapse" aria-expanded="true" role="button">
                  <a href="" class="btn btn-success">Vendez un Produit</a>
              </div>
            </div>
            {{-- <div class="main-search pull-right">
              <div class="search-overlay">

                <a href="javascript:void(0)" class="search-overlay-close"></a>

                <div class="container">

                  <form role="search" id="searchform" action="/search" method="get">
                    <label class="h5 normal search-input-label">Enter keywords To Search Entire Store</label>
                    <input value="" name="q" placeholder="Search here..." type="search">
                    <button type="submit"></button>
                  </form>

                </div>
              </div>
              <div class="header-search"> <a id="search-overlay-btn"></a> </div>
            </div> --}}
          </div>
          <div class="collapse navbar-collapse js-navbar-collapse pull-right">
            <ul id="menu" class="nav navbar-nav">
              <li> <a href="">Nos produits</a></li>
              <li> <a href="">Boutique</a></li>
              <li> <a href="">Astuces</a></li>
              <li> <a href="">A propos de nous </a></li>

            </ul>
          </div>
          <!-- /.nav-collapse -->
        </nav>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-4 col-lg-3">
            <div class="category">
              <div class="menu-bar" data-target="#category-menu,#category-menu-responsive" data-toggle="collapse" aria-expanded="true" role="button">
                <h4 class="category_text">Nos Categories</h4>
                <span class="i-bar"><i class="fa fa-bars"></i></span></div>
            </div>
            <div id="category-menu-responsive" class="navbar collapse " aria-expanded="true" style="" role="button">
              <div class="nav-responsive">
                <ul class="nav  main-navigation collapse in">
                  <li><a href="#">Pharmacy</a></li>
                  <li><a href="#">Health</a></li>
                  <li><a href="#">Beauty</a></li>
                  <li><a href="#">Vitamins</a></li>
                  <li><a href="#">Sweating</a></li>
                  <li><a href="#">Coughs & Colds</a></li>
                  <li><a href="#">Hair Loss</a></li>
                  <li><a href="#">Weight Loss</a></li>
                  <li><a href="#">Antifungals</a></li>
                  <li><a href="#">Pain Relief</a></li>
                  <li><a href="#">Stop Smoking</a></li>
                  <li><a href="#">Skin Conditions</a></li>
                  <li><a href="#">Top Brands</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-sm-8 col-md-8 col-lg-9">
            <div class="header-bottom-right offers">
              <div class="marquee">
                <span><i class="fa fa-circle" aria-hidden="true"></i>Côte d’Ivoire : Diabète et hypertension désormais couverts par la CMU </span>
                {{-- <span><i class="fa fa-circle" aria-hidden="true"></i>Our 5 Tips for a Healthy Summer</span>
                <span><i class="fa fa-circle" aria-hidden="true"></i>Sugar health at risk?</span>
                <span><i class="fa fa-circle" aria-hidden="true"></i>The Olay Ranges - What do they do?</span>
                <span><i class="fa fa-circle" aria-hidden="true"></i>Body fat - what is it and why do we need it?</span>
                <span><i class="fa fa-circle" aria-hidden="true"></i>Can a pillow help you to lose weight?</span></div> --}}
              </div>
          </div>
        </div>
      </div>
    </div>
  </header>
