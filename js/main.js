$(document).ready(function() {
    var $cards = $('.card');
    var currentIndex = 0;

    function showCard(index) {
        $cards.removeClass('active');
        $cards.eq(index).addClass('active');
    }

    $('.prev').click(function() {
        currentIndex = (currentIndex - 1 + $cards.length) % $cards.length;
        showCard(currentIndex);
    });

    $('.next').click(function() {
        currentIndex = (currentIndex + 1) % $cards.length;
        showCard(currentIndex);
    });
});

const slider = document.getElementById('slider')
let currentIndex = 0

function showSlide(index) {
    const slideWidth = document.querySelector('.slide').clientWidth
    const newPosition = -index * slideWidth
    slider.style.transform = `translateX(${newPosition}px)`
}

function prevSlide() {
    currentIndex =
        (currentIndex - 1 + slider.childElementCount) % slider.childElementCount
    showSlide(currentIndex)
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % slider.childElementCount
    showSlide(currentIndex)
}

function calculatePrice() {
    var liters = parseFloat(document.getElementById('liters').value)
    var pricePerLiter = 50
    var totalPrice = liters * pricePerLiter
    document.getElementById('result').innerHTML =
        'Стоимость топлива: ' + totalPrice.toFixed(2) + ' руб.'
}
