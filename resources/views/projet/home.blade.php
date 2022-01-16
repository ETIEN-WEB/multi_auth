@extends('layouts.app')

@section('content')
    
<div id="column-left" class="col-sm-4 col-md-4 col-lg-3 ">
    



  </div>
  <div id="column-right" class="col-sm-8 col-md-8 col-lg-9 mtb_30">

    <!-- =====  BANNER END  ===== -->
    <!-- =====  SUB BANNER  STRAT ===== -->
    <div class="row">
      <div class="cms_banner mt_10">
        
        <div class="col-xs-12 col-sm-12 col-md-12 mt_20">
          <div id="subbanner2" class="sub-hover"> 
            <div class="bannertext">
              <h1>ACCEUIL PROJET</h1>
              <div class="row"> 
                <div class="btn btn-primary">
                  <a href="{{ route('get.form') }}">polymorphisme</a>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =====  SUB BANNER END  ===== -->


    <!-- =====  product end  ===== -->

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

