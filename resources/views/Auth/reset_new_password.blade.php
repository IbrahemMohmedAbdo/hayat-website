<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password2</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css.map') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;500;600&family=Noto+Sans:ital,wght@0,300;0,400;1,400&family=Poppins:ital,wght@0,200;1,100&family=Roboto+Slab:wght@400;500&family=Roboto:ital,wght@0,700;1,500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="logo">
                    <img class="me-5" src="{{ asset('assets/img/logo.jpg') }}" width="400" height="200" alt="">
                    <img src="{{ asset('assets/img/new_password-removebg-preview.png') }}" style="height: 400px;">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="imgpass">
                    <div class="login" style="float: right; margin-right: 120px;">
                        <h1 style="margin-left: 25px;">كلمة المرور الجديدة</h1>
                        <br>
                        <h3 style="text-align: right; margin-right: 20px;">أدخل كلمة مرور جديدة</h3>
                        <form action="{{ route('update.password') }}" method="POST">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger" style="text-align: right; margin-right: 20px;">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="input-icone3">
                                <i class="fa-solid fa-lock" style="position: absolute;"></i>
                                <input type="password" name="password" style="width: 300px; height: 40px; margin-left: 30px; text-align: right; padding-right: 30px;" required placeholder="أدخل كلمة مرور جديدة">
                            </div>
                            {{-- <div class="input-icone3 mt-3">
                                <i class="fa-solid fa-lock" style="position: absolute;"></i>
                                <input type="password" name="confirm_password" style="width: 300px; height: 40px; margin-left: 30px; text-align: right; padding-right: 30px;" required placeholder="تأكيد كلمة مرور جديدة">
                            </div> --}}
                            <button type="submit" class="btn1 me-5 mt-3">حفظ التغيرات</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
