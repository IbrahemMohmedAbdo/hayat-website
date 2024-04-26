<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حیـــااه</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css.map') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;500;600&family=Noto+Sans:ital,wght@0,300;0,400;1,400&family=Poppins:ital,wght@0,200;1,100&family=Roboto+Slab:wght@400;500&family=Roboto:ital,wght@0,700;1,500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand logo d-flex align-items-center" href="#">
                <img class="img-fluid" width="200" src="{{ asset('assets/img/logo-removebg-preview.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-center list">
                    <li class="nav-item nav_na">
                        <a class="nav-link me-lg-5" href="#">تواصل معنا</a>
                    </li>
                    <li class="nav-item nav_na">
                        <a class="nav-link me-lg-5" href="#">الأطباء</a>
                    </li>
                    <li class="nav-item nav_na">
                        <a class="nav-link" href="#">المستشفى</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active me-lg-5" aria-current="page" href="#">الرئيسيه</a>
                    </li>
                </ul>
                <div class="btnss">
                    <a href="{{ asset('index1.html') }}"><button class="btns1">تسجیــل</button></a>
                    <a href="{{ asset('index1.html') }}"><button class="btns2">تسجیــل دخـول</button></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end nav -->
    <!-- section1 -->
    <div class="sec1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <img src="{{ asset('assets/img/doct0r-removebg-preview.png') }}" alt="">
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div class="texts">
                        <h4>مرحباً بك في الحياه</h4>
                        <h1>لا شيء أهم من صحتك</h1>
                        <p class="p1">سنقدم لك خدمات الرعايه الطبيه المناسبه و بتكلفه معقولة عن طريق طبيب متخصص</p>
                        <button class="btn4"><i class="arrow fa-solid fa-circle-up"></i>اختــر طبیبـك</button>
                    </div>
                    <div class="d-flex onee">
                        <div class="ms-4">
                            <span class="spa1 me-3">+220</span>
                            <h4 class="ms-5">طبيب متمیز</h4>
                        </div>
                        <div class="ms-4">
                            <span class="spa1 me-3">+820</span>
                            <h4 class="ms-5">عملیه ناجحه</h4>
                        </div>
                        <div class="ms-4">
                            <span class="spa1 me-3">+1250</span>
                            <h4 class="ms-5">عدد المرضی</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section1 -->
    <!-- section2 -->
    <div class="sec2 text-center">
        <div class="container">
            <div class="row">
                <h4>كيف نفعل</h4>
                <h2>حلول سريعه</h2>
                <h2>للحصول على أفضل علاج</h2>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="twooo">
                        <img width="80" src="{{ asset('assets/img/icone3-removebg-preview.png') }}" alt="">
                        <div style="text-align: end; margin-right: 5px">
                            <h1 class="mt-2">خذ الوصفه الطبيه</h1>
                            <h5>خذ الوصفه الطبيه التي أعطها لك الطب</h5>
                        </div>
                        <i class="arrow1 fa-solid fa-circle-up"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="tw0o">
                        <i class="iconns fa-solid fa-pen-to-square"></i>
                        <div style="text-align: end; margin-right: 5px">
                            <h1 class="mt-2">إحجز موعدك</h1>
                            <h4>جدوله وقتك مع طبيبك</h4>
                        </div>
                        <i class="arrow2 fa-solid fa-circle-up"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="twoo">
                        <img width="80" src="{{ asset('assets/img/icon1-removebg-preview.png') }}" alt="">
                        <div style="text-align: end; margin-right: 5px">
                            <h1 class="mt-2">ابحث عن افضل طبيب</h1>
                            <h4>نحن نقدم لك دائما افضل طبيب</h4>
                        </div>
                        <i class="arrow1 fa-solid fa-circle-up"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section2 -->
    <!-- start section3 -->
    <div class="sec3">
        <div class="container">
            <div class="row">
                <h3>لماذا اخترتنـا</h3>
                <h2>التحـدث مع الأطبـاء ذوی الخبره لدینا</h2>
            </div>
        </div>
    </div>
    <div class="sec32">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="imgg2 me-5">
                        <img width="80" src="{{ asset('assets/img/photo_20_2024-03-07_21-57-26.jpg') }}" alt="">
                        <h3>خصومات لغیر القادرین</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="imgg2 imgg23 me-5">
                        <img width="80" src="{{ asset('assets/img/photo_20_2024-03-07_21-57-26.jpg') }}" alt="">
                        <h3>خدمه طوارئ 7/24</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="imgg2 me-5">
                        <img width="80" src="{{ asset('assets/img/photo_3_2024-03-07_21-57-26.jpg') }}" alt="">
                        <h3>طبیـب متخصص</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section3 -->
    <!-- start section4 -->
    <div class="sec4 pt-5">
        <div class="container">
            <div class="row">
                <h4>أراء بعض المرضي</h4>
                <h2>ماذا قال لنا عميلنا؟</h2>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="sec41">
                        <img class="imggg" src="{{ asset('assets/img/photo_4_2024-03-07_21-57-26.jpg') }}" alt="">
                        <h3>علياء أحمد</h3>
                        <div class="star d-flex">
                            <img src="{{ asset('assets/img/star.jpg') }}" alt="">
                            <img src="{{ asset('assets/img/star.jpg') }}" alt="">
                            <img src="{{ asset('assets/img/star.jpg') }}" alt="">
                            <img src="{{ asset('assets/img/star.jpg') }}" alt="">
                            <img src="{{ asset('assets/img/star.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="sec42">
                        <img class="imggg" src="{{ asset('assets/img/young-bearded-man-with-striped-shirt_273609-5677.jpg') }}" alt="">
                        <h3 class="mt-3">أنس محمد</h3>
                        <div class="star d-flex">
                            <img src="{{ asset('assets/img/star.jpg') }}" alt="">
                            <img src="{{ asset('assets/img/star.jpg') }}" alt="">
                            <img src="{{ asset('assets/img/star.jpg') }}" alt="">
                            <img src="{{ asset('assets/img/star.jpg') }}" alt="">
                            <img src="{{ asset('assets/img/star.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="sec41">
                        <img class="imggg" src="{{ asset('assets/img/photo_18_2024-03-07_21-57-26.jpg') }}" alt="">
                        <h3>عمر السعيد</h3>
                        <div class="star d-flex">
                            <img src="{{ asset('assets/img/star.jpg') }}" alt="">
                            <img src="{{ asset('assets/img/star.jpg') }}" alt="">
                            <img src="{{ asset('assets/img/star.jpg') }}" alt="">
                            <img src="{{ asset('assets/img/star.jpg') }}" alt="">
                            <img src="{{ asset('assets/img/star.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="p_onnnee d-flex">
                    <div class="onne onne1"></div>
                    <div class="onnnee"></div>
                    <div class="onne onne2"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section4 -->
    <!-- start section 5 -->
    <div class="sec5 pt-5">
        <div class="container">
            <div class="row">
                <h4>الأطبــاء</h4>
                <h2>أطبائنـا المتميزين</h2>
                <i class="less fa-solid fa-less-than"></i>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="threee">
                        <img width="100" src="{{ asset('assets/img/doctor-man-adult-standing-straight-hospital-office_884296-298.avif') }}" alt="">
                        <h2>د. حماده زهري</h2>
                        <p>استشاري جراحه المخ والأعصاب <br />والعمود الفقري</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="threee">
                        <img width="200" src="{{ asset('assets/img/photo_8_2024-03-07_21-57-26.jpg') }}" alt="">
                        <h2>د. شرين شلبي</h2>
                        <p>استشاري المخ والأعصاب - كليه <br />طب جامعة عين شمس</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="threee">
                        <img width="100" src="{{ asset('assets/img/photo_16_2024-03-07_21-57-26.jpg') }}" alt="">
                        <h3>د. هشام محمد ابو العلا</h3>
                        <p>استشاري جراحه المخ والاعصاب</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section 5 -->
    <!-- start section 6 -->
    <div class="sec6 text-center">
        <div class="container">
            <div class="row">
                <form action="">
                    <div>
                        <input class="in10" type="text" placeholder="الشكـاوي و الاقتراحات">
                    </div>
                    <input class="in11" type="text" placeholder="الأسم">
                    <label for="">الأسم</label><br />
                    <input class="in11" type="email" placeholder="البريد الألكتروني">
                    <label for="">البريد الألكتروني</label><br />
                    <input class="in11" type="text" placeholder="الموضوع">
                    <label for="">الموضوع</label><br />
                    <textarea class="text1area mt-4" name="" id="" cols="35" rows="5" placeholder="الرسالة"></textarea>
                    <label class="lab2" for="">الرسالة</label><br />
                    <a href=""><button class="last-btn">إرسال</button></a>
                </form>
            </div>
        </div>
    </div>
    <!-- end section 6 -->
    <script src="{{ asset('assets/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/owl carousel/owl.carousel.min.css') }}"></script>
    <script src="{{ asset('assets/owl carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/owl carousel/owl.theme.default.min.css') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/all.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js.map') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
