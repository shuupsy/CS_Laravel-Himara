/* Modal Température */
let rangeSlider = document.querySelector("#rs-range-line");
let rangeBullet = document.querySelector("#rs-bullet");

function slider() {
    rangeBullet.innerHTML = rangeSlider.value;

}

rangeSlider.addEventListener("input", slider, false);
