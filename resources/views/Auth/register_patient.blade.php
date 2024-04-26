<!DOCTYPE html>
<html lang="en">
 @include('layout.head')
  <body>
    <div class="header1">
      <div class="container">
        <div class="row">
            <div class="big">
                <img width="200" src="{{ asset('assets/img/logo-removebg-preview.png') }}" alt="" />
                <div class="numm d-flex">
                    <div class="col-lg-6 col-sm-12">
                        <div class="two">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <select name="other_diseases" class="mt-2 opt1" required>
                                    <option value="" disabled hidden selected>هل يعاني من أمراض أخرى</option>
                                    <option value="yes">نعم</option>
                                    <option value="no">لا</option>
                                </select>
                                <input name="other_diseases_description" class="in1 mt-2" type="text" required placeholder="اذكرها" />
                                <select name="smoker" class="mt-2" required>
                                    <option value="" disabled hidden selected>مدخن</option>
                                    <option value="yes">نعم</option>
                                    <option value="no">لا</option>
                                </select>
                                <input name="address" class="in1 mt-2" type="text" required placeholder="العنوان الشخصي" />
                                <input name="password" class="in1 mt-2" type="password" required placeholder="كلمة المرور" />
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="one">
                            <h3 style="color: #119da4">تسجيل البيانات الشخصية</h3>
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <input name="full_name" class="in1 mt-2" type="text" required placeholder="الاسم بالكامل" />
                                <input name="national_id" class="in1 mt-2" type="number" required placeholder="الرقم القومي" />
                                <input name="age" class="in1 mt-2" type="number" required placeholder="السن" />
                                <select name="gender" class="mt-2" required>
                                    <option value="" disabled hidden selected>النوع</option>
                                    <option value="male">ذكر</option>
                                    <option value="female">أنثى</option>
                                </select>
                                <input name="phone_number" class="in1 mt-2" type="number" required placeholder="رقم الهاتف" />
                                <input name="email" class="in1 mt-2" type="email" required placeholder="البريد الالكتروني" />
                            </form>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn1 sin" type="submit" form="personal_data_form">تسجيل</button>
                    <span style="color: #119da4">
                        لدي حساب بالفعل
                        <a href="{{ route('login') }}">اضغط هنا لتسجيل الدخول</a>
                    </span>
                </div>
            </div>
            
        </div>
      </div>
    </div>
    <script src="{{ asset('assets/js/script.js') }}"></script>
  </body>
</html>
