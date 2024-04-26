<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HAYAT</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/bootstrap/css/all.min.css" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css.map" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;500;600&family=Noto+Sans:ital,wght@0,300;0,400;1,400&family=Poppins:ital,wght@0,200;1,100&family=Roboto+Slab:wght@400;500&family=Roboto:ital,wght@0,700;1,500&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="DATA text-dark">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-12">
            <img width="300" src="assets/img/logo.jpg" alt="" />
            <img class="me-5" width="400" src="assets/img/img4.jpg" alt="" />
          </div>

          <div class="col-lg-6 col-sm-12">
            <h1 class="bayanat">البیانات الشخصیه</h1>
            <div class="in2">
              <input type="text" required name="name"  placeholder="الاسم بالکامل" />
              <input type="number" required name="national_id" placeholder=" الرقم القومی" />
            </div>
            <div class="d-flex">
              <input class="age" type="number" name="age" required placeholder=" السن " />
              <select class="age age2">
                <option disabled selected>النوع</option>
                <option>ذکر</option>
                <option>انثی</option>
              </select>
            </div>
            <input type="radio" name="nn" class="nn" />نعم
            <input type="radio" name="nn" class="nn" /> لا
            <input
              class="age age3"
              type="text"
              required
              placeholder=" هل یعانی من امراض اخری؟ "
            />
            <div class="in2">
              <input
                type="text"
                required
                placeholder="اذا كان يعاني من أي أمراض أذكرها"
              />
              <input
                type="number"
                required
                name="mobile"
                placeholder=" رقم الهاتف لمتابعة الحالة "
              />
            </div>
            <div class="d-flex">
              <input
                class="age"
                type="password"
                name="password"
                required
                placeholder=" كلمه المرور "
              />
              <input
                class="age age2"
                type="email"
                name="email"
                required
                placeholder=" البريد الإلكتروني"
              />
            </div>
            <div>
              <a href="" style="margin-left: 100px"
                ><input class="xx" type="submit" value="تسجيل"
              /></a>
              <br />
              <br />
              <a
                href=""
                style="
                  text-decoration: none;
                  font-family: Cambria, Cochin, Georgia, Times;
                  margin-left: 190px;
                  font-size: 25px;
                  color: gray;
                "
                >لدي حساب بالفعل</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>
