//عشان اخلی علامه الباسورد تظهر وانا بکتب الباسورد
let passwordInput = document.getElementById("password");
let eyeIcon = document.querySelector(".eye");

eyeIcon.onclick = () => {
  if (passwordInput.type == "password") {
    passwordInput.type = "text";
    eyeIcon.innerHTML = '<i class="fa-solid fa-eye icon"></i>';
  } else {
    passwordInput.type = "password";
    eyeIcon.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
  }
};
