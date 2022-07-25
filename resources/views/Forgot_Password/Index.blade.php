<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- boosstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!--- my font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!--my style -->
    <link rel="stylesheet" href="{{asset('/css/login.css')}}">

    <title>pijetin</title>

</head>

@if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('loginError')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<body class="body">
<div class="container">
    <nav>
        <div class = "nav-brand">
            <img src="/image/Pijetin 2.svg" alt="" srcset="">
        </div>
    </nav>
    <div class="title">
        <p  >
            Forgot Password
        </p>
    </div>
    <div class="text">
        <p id="note">
            Enter the email associated with your account and we’ll send an email with instruction to reset your password
        </p>
    </div>
    <form method="post" action="{{route('forgot')}}">
        @csrf
        <fieldset >
            <div>
                <input type="text" id="email-2" name="email" placeholder="Email">
            </div>
            <button type="submit" id="forgot-pass-btn">Send Instructions </button>
            <div class="text">
                <p id="dont-have-account-2">
                    Don't have account? <a href="{{route('register-page')}}">register</a>
                </p>
            </div>
        </fieldset>
    </form>

    <div class="column-illustration-hero">
        <img src="/image/Group 179.svg" alt="" srcset="">
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>

