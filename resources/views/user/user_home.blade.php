@extends('layouts.app')

@section('content')
    
<div id="column-left" class="col-sm-4 col-md-4 col-lg-3 ">

  </div>
  <div id="column-right" class="col-sm-8 col-md-8 col-lg-9 mtb_30">
    <!-- =====  BANNER STRAT  ===== -->
    
    <!-- =====  BANNER END  ===== -->
    <!-- =====  SUB BANNER  STRAT ===== -->
    <div class="row">
      <div class="cms_banner mt_10">
        <div class="col-xs-6 col-sm-12 col-md-6 mt_20">
          <div id="subbanner1" class="sub-hover"> <a href="#"></a>
            <div class="bannertext">
              <h1>ACCEUIL USER</h1>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =====  SUB BANNER END  ===== -->
    <div class="row">
        <div class="col-md-6 offset-md-3" style="margin-top: 45px">
             <h4>user Dashboard</h4><hr>
             <table class="table table-striped table-inverse table-responsive">
                 <thead class="thead-inverse">
                     <tr>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Action</th>
                     </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>{{ Auth::guard('web')->user()->name }}</td>
                             <td>{{ Auth::guard('web')->user()->email }}</td>
                             <td>
                                 <a href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                 <form action="{{ route('user.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                             </td>
                         </tr>
                     </tbody>
             </table>
        </div>
    </div>
    <!-- =====  PRODUCT TAB  END ===== -->
    <!-- =====  SUB BANNER  STRAT ===== -->

    <!-- =====  SUB BANNER END  ===== -->

    <!-- =====  sale product end ===== -->
    
    <!-- =====  product ===== -->

    <!-- =====  product end  ===== -->
    <!-- =====  Blog ===== -->

      <!-- =====  Blog end ===== -->
    </div>
  </div>
  <!-- =====  CONTAINER END  ===== -->
  <!-- =====  FOOTER START  ===== -->

@endsection
@push('scripts')
    <script>
        /* ===== Timer  =====   */
        function makeTimer(timer_db,id_promo) {
            var endTime = new Date(timer_db);
            var endTime = (Date.parse(endTime)) / 1000;
            var now = new Date();
            var now = (Date.parse(now) / 1000);
            var timeLeft = endTime - now;
            var days = Math.floor(timeLeft / 86400);
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

            if (hours < "10") { hours = "0" + hours; }
            if (minutes < "10") { minutes = "0" + minutes; }
            if (seconds < "10") { seconds = "0" + seconds; }
            var inputDays='.days_'+id_promo;
            var inputhours='.hours_'+id_promo;
            var inputminutes='.minutes_'+id_promo;
            var inputseconds='.seconds_'+id_promo;
            console.log(inputDays);
            $(inputDays).html(days + "<span>Jour</span>");
            $(inputhours).html(hours + "<span>Heur</span>");
            $(inputminutes).html(minutes + "<span>Min</span>");
            $(inputseconds).html(seconds + "<span>Sec</span>");
        }
        

    </script>
@endpush

