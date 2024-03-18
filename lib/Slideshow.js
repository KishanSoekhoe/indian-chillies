let slideIndex = 0;
let tijd = 6000;
let slidesHtml = document.getElementsByClassName("slideshow");

function showSliders() {
    for (let sliderw = 0; sliderw < slidesHtml.length; sliderw++) {
        slidesHtml[sliderw].style.display = 'none';

    }

    slideIndex++;
    if (slideIndex > slidesHtml.length) {
        slideIndex = 1;
    }

    slidesHtml[slideIndex - 1].style.display = 'block';
}

setInterval(showSliders, tijd);
showSliders()