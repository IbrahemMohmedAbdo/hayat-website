<!DOCTYPE html>
<html lang="en">
@include('layout.head')
  <body>
    <div class="header">
      <div class="container">
        <div class="row">
            @if(session('success'))
            <div class="alert alert-success mt-4">
                {{ session('success') }}
            </div>
        @endif
            <div class="big">
                <img width="200" src="{{ asset('assets/img/logo-removebg-preview.png') }}" alt="" />
                <div class="big1 d-flex">
                    <div class="col-lg-6 col-sm-12">
                        <img class="pathogen" src="{{ asset('assets/img/pathogen-removebg-preview.png') }}" alt="" />
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <form class="mt-4" action="{{ route('storeNurse') }}" method="POST">
                            @csrf
                            <h4 style="color: #119da4; margin-left: 90px">تسجیل البیانات الشخصیه</h4>
                            <input class="in1" type="text" name="name" required placeholder=" الاسم بالکامل" value="{{ old('name') }}" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        
                            <input class="in1 mt-2" type="number" name="national_id" required placeholder="الرقم القومی" value="{{ old('national_id') }}" />
                            @error('national_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        
                            <input class="in1 mt-2" type="text" name="degree" required placeholder="الدرجـه العلمیــه" value="{{ old('degree') }}" />
                            @error('degree')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        
                            <input class="in1 mt-2" type="tel" name="phone_number" required placeholder="رقم الهاتــف" value="{{ old('phone_number') }}" />
                            @error('phone_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        
                            <input class="in1 mt-2" type="email" name="email" required placeholder="البریـد الالکترونی" value="{{ old('email') }}" />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        
                            <input class="in1 mt-2" type="password" name="password" required placeholder="کلمه المرور" />
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        
                            <button class="btn1" type="submit">تسجیل</button>
                            <span style="color: #119da4">
                                لدی حسـاب بالفعـل
                                <a href="{{ route('login') }}"> انقر هنا لتسجيل الدخول</a>
                            </span>
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
