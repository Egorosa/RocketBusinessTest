// document.addEventListener("DOMContentLoaded", function () {
//   const slider = new ChiefSlider(".slider", {
//     loop: false,
//   });
// });


// function buttonPlus() {
//   let num = document.getElementById("number");
//   if (Number(num.value) < 4) {
//     num.value = Number(num.value) + 1;
//   }
// }

// function buttonMin() {
//   let num = document.getElementById("number");
//   if (Number(num.value) > 1) {
//     num.value = Number(num.value) - 1;
//   }
// }



var slideIndex = 1;
showSlides(slideIndex);

/* Функция увеличивает индекс на 1, показывает следующй слайд*/
function plusSlide() {
  showSlides((slideIndex += 1));
  // let num = document.getElementById("number");
  // if (Number(num.value) < 4) {
  //   num.value = Number(num.value) + 1;
  // }

  let num = document.getElementById("number");
  num.value = slideIndex;
}

/* Функция уменьшяет индекс на 1, показывает предыдущий слайд*/
function minusSlide() {
  showSlides((slideIndex -= 1));

  //  let num = document.getElementById("number");
  //  if (Number(num.value) > 1) {
  //    num.value = Number(num.value) - 1;
  //  }

  let num = document.getElementById("number");
  num.value = slideIndex;
}

/* Устанавливает текущий слайд */
function currentSlide(n) {
  showSlides((slideIndex = n));
}

/* Основная функция слайдера */
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("item");
  var dots = document.getElementsByClassName("slider-dots_item");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}

