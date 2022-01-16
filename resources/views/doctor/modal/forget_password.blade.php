<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px">
                 <h4>Mot de passe oublié</h4><hr>
                 <form action="{{ route('doctor.post_forget_password') }}" method="post">
                    @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif
                    @csrf
                     <div class="form-group">
                         <label for="email">Email</label>
                         <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                         <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                     </div>

                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">envoyer</button>
                     </div>
                     <br> avez-vous un compte
                     <a href="{{ route('doctor.login') }}">se connecter</a>
                 </form>
            </div>
        </div>
    </div>
</body>
<footer>
    @if (session('success'))
        toastr.success('{{ session("success") }}', 'Success', {timeOut: 5000});
    @endif
    @if (session('error'))
    toastr.success('{{ session("error") }}', 'Error', {timeOut: 5000});
@endif
</footer>
</html>