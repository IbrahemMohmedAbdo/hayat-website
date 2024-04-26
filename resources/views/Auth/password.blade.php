<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAYAT</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css.map') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;500;600&family=Noto+Sans:ital,wght@0,300;0,400;1,400&family=Poppins:ital,wght@0,200;1,100&family=Roboto+Slab:wght@400;500&family=Roboto:ital,wght@0,700;1,500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="doctor d-flex">
        <div class="login">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img class="me-5" src="{{ asset('assets/img/logo.jpg') }}" width="400" height="200" alt="">
                        <img width="400" src="{{ asset('assets/img/password-removebg-preview.png') }}" alt="">
                    </div>
                    <div class="col-lg-6 col-sm-12 text-end">
                        <div class="forget-password">
                            <h1 class="mt-5 me-5">هل نسیت کلمه المرور؟</h1>
                            <p class="p1 me-5">غیر کلمه المرور الخاصه بک , افتح حساب جوجل الخاص <br />بک قد تحتاج الی تسجیل الدخول . ضمن الامان</p>
                        </div>
                        <h5 class="me-5">ادخل عنوان بریدک الالکترونی</h5>
                        <form class="d-flex form1" method="POST" action="{{ route('password.sendOTP') }}">
                            @csrf
                            <button class="btn3" type="submit">ارسال رمز التاکید</button>
                            <br /><br />
                            <div class="input-icone mt-2">
                                <i class="lock-icone fa-solid fa-circle-user"></i>
                                <input class="in1" type="email" name="email" required placeholder="البرید الالکترونی">
                            </div>
                        </form>
                        <div class="d-flex mt-1\\ zz">
                            <a class="a1" href="{{ route('login') }}">تسجیل الدخول</a>
                            <h4>هل تذکرت کلمه المرور؟</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
