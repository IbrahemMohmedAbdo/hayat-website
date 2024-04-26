<!DOCTYPE html>
<html lang="en">
  @include('layout.head')
  <body>
    <!-- page1 -->
    <div class="header">
      <div class="index11">
        <img
          width="200"
          class="mt-5"
          src="assets/img/logo-removebg-preview.png"
          alt=""
        />
        <div class="btns">
          <a href="{{ route('register.as.patient') }}"><button>مــریض</button></a>
          <a href="{{ route('register.as.pathogen') }}"><button>ممــرض</button></a>
          <a href="{{ route('register.as.doctor') }}"><button>طبیــب</button></a>
        </div>
      </div>
    </div>
    <script src="assets/js/script.js"></script>
  </body>
</html>
