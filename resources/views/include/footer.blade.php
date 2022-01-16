<div class="footer pt_60">
    <div class="container">
      <div class="row">
        <div class="col-md-3 footer-block">
          <div class="content_footercms_right">
            <div class="footer-contact">
              <div class="footer-logo mb_40"> <a href="index.html"> <img src="{{asset('frontend/images/logo.png')}}" alt="HealthCare"> </a> </div>
              <ul>
                <li>B-14 Collins Street West Victoria 2386</li>
                <li>(+123) 456 789 - (+024) 666 888</li>
                <li>Contact@yourcompany.com</li>
              </ul>
              <div class="social_icon">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-google"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 footer-block">
          <h6 class="footer-title ptb_20">Plus demandée</h6>
          <ul>
            
            <li><a href=""></a></li>
        
          </ul>
        </div>
        <div class="col-md-4 footer-block">
          <h6 class="footer-title ptb_20">Information</h6>
          <ul>
            <li><a href=""> Conseils de sécurité</a></li>
            <li><a href=""> Nos boutiques </a></li>
            <li><a href=""> FAQ </a></li>
            <li><a href="">Règlement de Publication</a></li>
            <li> <a href="">A propos de nous </a></li>
            <li><a href="">Conditions d'utilisation</a></li>
            <li><a href="">Politique de confidentialité</a></li>
            {{-- <li><a href="#">About Us</a></li> --}}
          </ul>
        </div>
        {{-- <div class="col-md-2 footer-block">
          <h6 class="footer-title ptb_20">Mon compte</h6>
          <ul>
              @if (\Illuminate\Support\Facades\Auth::guard('client')->check())
                  <li><a href="{{route('client.home')}}">Espace client</a></li>
              @else
                  <li><a href="" class="myModal">Espace client</a></li>
              @endif
  
              @if (\Illuminate\Support\Facades\Auth::guard('annonceur')->check())
                      <li><a href="{{route('annonceur.home')}}">Espace annonceur</a></li>
                  @else
                      <li><a href="" data-toggle="modal" data-target="#myModal2">Espace annonceur</a></li>
              @endif
  
          </ul>
        </div> --}}
        <div class="col-md-3">
          <h6 class="ptb_20"> NEWSLETTER</h6>
  <p class="msg"> </p>
          {{-- <p class="mt_10 mb_20">Recevez par mail nos medicaments traditionnel </p> --}}
          <div class="form-group">
          <form id="form">
          @csrf
            <input class="email mb_20" type="email" name="email" placeholder="Enter Votre Email Address">
            <button type="submit" class="btn">ABONNEZ-VOUS</button>
  
          </form>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom mt_60 ptb_10">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="copyright-part">@ 2017 All Rights Reserved HealthCare</div>
          </div>
          <div class="col-sm-6">
            <div class="payment-icon text-right">
              <ul>
                <li><i class="fa fa-cc-paypal "></i></li>
                <li><i class="fa fa-cc-stripe"></i></li>
                <li><i class="fa fa-cc-visa"></i></li>
                <li><i class="fa fa-cc-discover"></i></li>
                <li><i class="fa fa-cc-mastercard"></i></li>
                <li><i class="fa fa-cc-amex"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @push('scripts')
      <script>
      
      </script>
  
  @endpush
  