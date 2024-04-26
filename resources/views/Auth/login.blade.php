<!DOCTYPE html>
<html lang="en">
  @include('layout.head')
  <body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="big">
                    <img width="200" src="{{ asset('assets/img/logo-removebg-preview.png') }}" alt="" />
                    <div class="big1 d-flex">
                        <div class="col-lg-6 col-sm-12">
                            <img class="pathogen" src="{{ asset('assets/img/pathogen-removebg-preview.png') }}" alt="" />
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <form class="mt-4" method="POST" action="{{ route('loginStore') }}">
                                @csrf
                                <div class="input-icone">
                                    <input class="in1 @error('email') is-invalid @enderror" name="email" type="email" required placeholder="البرید الالکترونی" value="{{ old('email') }}"/>
                                    <i class="lock-icone fa-solid fa-circle-user"></i>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="all">
                                    <div class="input-icone mt-4">
                                        <i class="lock-icone fa-solid fa-lock"></i>
                                        <input class="in3 in32 @error('password') is-invalid @enderror" name="password" id="password" type="password" required placeholder="کلمه المرور"/>
                                        <span class="eye">
                                            <i class="fa-solid fa-eye-slash"></i>
                                        </span>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <label class="password">
                                    <a href="{{ route('forget.password') }}">هل نسیت کلمه المرور؟</a>
                                </label>
                                <div>
                                    <button type="submit" class="btn1">تسجیل</button>
                                    <br/>
                                    <label class="follow">او متابعه بـ</label>
                                </div>
                                <div class="icons">
                                    <a href="https://www.facebook.com">
                                        <img class="facebook-icone" src="{{ asset('assets/img/icons8-facebook-48.png') }}" alt=""/>
                                    </a>
                                    <a href="https://www.google.com.eg">
                                        <img class="google-icone" src="{{ asset('assets/img/icons8-google-48.png') }}" alt=""/>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
