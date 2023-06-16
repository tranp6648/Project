<html lang="en" style="--highlight-bg:rgba(17, 142, 232); --highlight-color:#fff; --box-highlight:rgba(17,142,232,0.8);">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Form Login</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
</head>

@if(\Session::has('message'))
<div class="alert alert-info">
    {{ \Session::get('message') }}
</div>
@endif
<body style="background: url(http://127.0.0.1:8000/images/background-login.webp);background-repeat: no-repeat;background-size: cover;">
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 style="color: aliceblue;font-weight: bold;font-size: 31px;/* line-height: 47px; */">Log in</h2>
                    <p contenteditable="true" style="font-weight: bold;color: red;font-style: italic;font-size: 1.3em;">Welcome !</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4" style="width: 16vw">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4">
                              <i class="fa-solid fa-user fa-2xl"></i>
                            </div>
                          
                            <form class="text-center" method="post" action="/user" style="margin: 6vh auto 0">
                            @csrf
                                <div class="mb-3"><input class="form-control" type="name" name="usrname" placeholder="Email" />
         
                          
                                </div>
                                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" />
                                 
                                </div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Login</button></div>
                                <p class="text-muted">Forgot your password?</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/b6daa7a43d.js" crossorigin="anonymous"></script>
</body>

</html> 