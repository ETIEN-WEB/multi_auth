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
          <div id="subbanner1" class="sub-hover"><a href="#"></a>
            <div class="bannertext">
              
              
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-12 col-md-6 mt_20">
          <div id="subbanner2" class="sub-hover"> <a href="#"></a>
            <div class="bannertext">
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3" style="margin-top: 45px">
           <h4>Annonceur Dashboard</h4><hr>
           <table class="table table-striped table-inverse table-responsive">
               <thead class="thead-inverse">
                   <tr>
                       <th>Name</th>
                       <th>Email</th>
                       <th>Phone</th>
                       <th>Action</th>
                   </tr>
                   </thead>
                   <tbody>
                       <tr>
                           <td scope="row">{{ Auth::guard('annonceur')->user()->name }}</td>
                           <td>{{ Auth::guard('annonceur')->user()->email }}</td>
                           <td>{{ Auth::guard('annonceur')->user()->phone }}</td>
                           <td>
                               <a href="{{ route('annonceur.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                               <form action="{{ route('annonceur.logout') }}" id="logout-form" method="post">@csrf</form>
                           </td>
                       </tr>
                   </tbody>
           </table>
      </div>
  </div>
    <!-- =====  SUB BANNER END  ===== -->



      <!-- =====  Blog end ===== -->
    </div>
  </div>
  <!-- =====  CONTAINER END  ===== -->
  <!-- =====  FOOTER START  ===== -->

@endsection
@push('scripts')
    <script>


    </script>
@endpush

