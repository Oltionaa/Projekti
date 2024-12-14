var foto = [
    "foto1.jpg",
    "foto2.png",
    "foto3.jpg",
    "foto4.jpg",
    "foto5.jpg",
    "foto6.jpg",
];

var captions = [
    "Kelingking Beach",
    "Cappadocia",
    "London",
    "Rome",
    "Paris",
    "Amalfi",
];

var i = 0;

function updateGallery() {
    document.getElementById('img1').src = foto[i];
    document.getElementById('caption1').innerText = captions[i];

    document.getElementById('img2').src = foto[(i + 1) % foto.length];
    document.getElementById('caption2').innerText = captions[(i + 1) % foto.length];

    document.getElementById('img3').src = foto[(i + 2) % foto.length];
    document.getElementById('caption3').innerText = captions[(i + 2) % foto.length];
}

function nextImg() {
    i = (i + 1) % foto.length;
    updateGallery();
}

function prevImg() {
    i = (i - 1 + foto.length) % foto.length;
    updateGallery();
}

document.addEventListener('DOMContentLoaded', function () {
    updateGallery();
});
