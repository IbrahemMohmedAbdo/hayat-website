<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
</head>
<body>
    <div class="doctor d-flex">
        <div class="login">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="logo">
                            <img class="me-5" src="{{ asset('assets/img/logo.jpg') }}" width="400" height="200" alt="" />
                        </div>
                        <img width="400" src="{{ asset('assets/img/password-removebg-preview.png') }}" alt="" />
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="forget-password text-end">
                            <h1 class="mt-5 me-5">التحقق من كلمة المرور</h1>
                            <p class="p1 me-5">من فضلك ادخل رمز التحقق الذي ارسلناه إليك علي بريدك الإلكتروني</p>
                            <h3 class="me-5">ادخل رمز التحقق</h3>
                        </div>
                        <form class="d-flex form2" method="POST" action="{{ route('otp.verify') }}">
                            @csrf
                            <button class="btn3" type="submit">تحقق من الرمز</button>
                            <div class="d-flex">
                                @for ($i = 0; $i < 5; $i++)
                                    <input class="in6 mt-3 me-2" type="number" name="otp[]" required />
                                @endfor
                            </div>
                        </form>
                        <div class="d-flex mt-3 zz">
                            <form method="POST" action="{{ route('otp.resend') }}">
                                @csrf
                                <button type="submit" class="btn-link a1">أعد إرسال الرمز</button>
                            </form>
                            <h4>ألم تتلقي رمز تحقق ؟</h4>
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
