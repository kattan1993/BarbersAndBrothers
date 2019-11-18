

$( document ).ready(function() {
});var index = 0, setTimeOut;

function currentSlide(self) {
    console.log(self);
    var indexSlide = self.getAttribute("data-slide");
    console.log(indexSlide);
    window.clearTimeout(setTimeOut);
    index = indexSlide;
    showSlides();
}

function preSlides() {
    window.clearTimeout(setTimeOut);
    index = index - 2;
    showSlides();
}

function plusSlides() {
    window.clearTimeout(setTimeOut);
    index = index++;
    showSlides();
}

function showSlides() {
    var i;
    var slides = document.getElementsByClassName('mySlides');
    var dots = document.getElementsByClassName('dot');
    index++;
    if (index > slides.length) {
        index = 1;
    }

    if (index < 1) {
        index = slides.length;
    }
    // console.log(222, index);
    // console.log(slides[index-1]);
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }

    for (i = 0; i < dots.length; i++) {
        dots[i].dataset.slide = i;
        dots[i].className = dots[i].className.replace('active', '');
    }

    slides[index-1].style.display = 'block';
    dots[index-1].className += ' active';
    setTimeOut = window.setTimeout(showSlides, 2000);
}

showSlides();


