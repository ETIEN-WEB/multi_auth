<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Annoceur Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body style="background-color:#c8d9e8 !important">
    <div class="container">
        @if (Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
        @endif
        @if (Session::get('success'))
            <div class="alert alert-primary">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px">
                 <h4>Enregistrer un post</h4><hr>
                 <form action="{{ route('post.posts') }}" method="post">
                    
                    @csrf
                     <div class="form-group">
                         <label for="email">Post</label>
                         <input type="text" class="form-control" name="post" placeholder="Enter post" value="">
                         <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                     </div>
 
                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Enregistrer</button>
                     </div>
                 </form>
            </div>
        </div>
        <br>
        <br>

        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px">
                 <h4>Enregistrer une Vidéo</h4><hr>
                 <form action="{{ route('post.video') }}" method="post">
                    
                    @csrf
                     <div class="form-group">
                         <label for="email">Vidéo</label>
                         <input type="text" class="form-control" name="video" placeholder="Enter post" value="">
                         <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                     </div>
 
                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Enregistrer</button>
                     </div>
                 </form>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px">
                 <h4>Enregistrer un Tag</h4><hr>
                 <form action="{{ route('post.tag') }}" method="post">
                    
                    @csrf
                     <div class="form-group">
                         <label for="email">Tag</label>
                         <input type="text" class="form-control" name="tag" placeholder="Enter post" value="">
                         <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                        <label for="email">post</label>
                        <input type="text" class="form-control" name="tag_post" placeholder="Enter post" value="">
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="email">Video</label>
                        <input type="text" class="form-control" name="tag_video" placeholder="Enter post" value="">
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                    </div>
 
                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Enregistrer</button>
                     </div>
                 </form>
            </div>
        </div>


    </div>
</body>
</html>