<div id="myModal2" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Espace vendeur</h4>
        </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12" id="loginModal" >
                  <div class="panel-login">
                    <div class="panel-heading">
                      <div class="row mb_20">
                        <div class="col-xs-6">
                          <a href="#" class="active" id="login-form-link1">CONNECTEZ-VOUS</a>
                        </div>
                        <div class="col-xs-6">
                          <a href="#" id="register-form-link1" class="">INSCRIVEZ-VOUS</a>
                        </div>
                      </div>
                      <hr>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-lg-12">
                          <form id="login-form1" action="{{ route('user.check') }}" method="post" style="">
                              @csrf
                            <div class="form-group">
                              <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Saisissez votre email" value="{{ old('email') }}">
                              <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group">
                              <input type="password" name="password" id="password" value="{{ old('password') }}" tabindex="2" class="form-control" placeholder="Saisissez votre mot de passe">
                              <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group ">
                              <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                              <label for="remember"> Se souvenir de moi</label>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                  <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="CONNEXION">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="text-center">
                                    <a href="{{route('password.request')}}" tabindex="5" class="forgot-password-annonceur">Mot de passe oublié ?</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>

                          <form id="register-form1" action="{{ route('user.create') }}" method="post" style="display: none;">
                            {{-- @if (Session::get('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                            @endif
                            @if (Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                            </div>
                            @endif --}}
                            @csrf
                            <div class="form-group">
                              <input type="text" name="name" id="nom" tabindex="1" class="form-control" placeholder="Entrer votre Nom " value="{{ old('name') }}">
                              <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                            </div>
                              <div class="form-group">
                                <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Entrer votre email " value="{{ old('email') }}">
                                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                              </div>
                            <div class="form-group ">
                              <input type="password" name="password" value="{{ old('password') }}" id="password" tabindex="2" class="form-control" placeholder="Entrer votre Mot de passe">
                              <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                <span toggle="#password-field" class="fa fa-eye toggle-password" onclick="showHidePassword(this)"></span>
                            </div>
                            <div class="form-group">
                              <input type="password" name="cpassword" value="{{ old('password') }}" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                              <span class="text-danger">@error('cpassword'){{ $message }} @enderror</span>
                            </div> 
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                  <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Enregistrer">
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        </div>
      </div>

    </div>
  </div>

