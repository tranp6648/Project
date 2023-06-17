<!DOCTYPE html>

<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" />
    <!-- font CSS -->
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('css/font.css') }}" type="text/css" />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="{{ asset('js/jquery2.0.3.min.js') }}"></script>
</head>

<body>
    <style>
        span.text-alert {
            width: 116%;
            color: red;
            text-align: center;
            font-weight: bold;
            font-size: 15px;
            margin-left: -20px;
        }
    </style>
    <div class="log-w3">
        <div class="w3layouts-main">
            <h2>Sign In Now</h2>
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<span class="text-alert">' . $message . '</span>';
                Session::put('message', null);
            }
            ?>
            <form action="/login" method="POST">
                @csrf
                <input type="email" class="ggg" name="email" placeholder="E-MAIL" required>
                <input type="password" class="ggg" name="password" placeholder="PASSWORD" required>
                <span><input type="checkbox" />Remember Me</span>
                <h6><a href="#">Forgot Password?</a></h6>
                <div class="clearfix"></div>
                <input type="submit" value="Sign In" name="login">
            </form>
            <p>Don't Have an Account ?<a href="/register">Create an account</a></p>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollTo.js') }}"></script>
</body>

</html>
