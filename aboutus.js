var foto = [
    "fotot/foto1.jpg",
    "fotot/foto2.png",
    "fotot/foto3.jpg",
    "fotot/foto4.jpg",
    "fotot/foto5.jpg",
    "fotot/foto6.jpg",
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

    if (i + 1 < foto.length) {
        document.getElementById('img2').src = foto[i + 1];
        document.getElementById('caption2').innerText = captions[i + 1];
    } else {
        document.getElementById('img2').src = foto[0];
        document.getElementById('caption2').innerText = captions[0];
    }

    if (i + 2 < foto.length) {
        document.getElementById('img3').src = foto[i + 2];
        document.getElementById('caption3').innerText = captions[i + 2];
    } else if (i + 2 === foto.length) {
        document.getElementById('img3').src = foto[0];
        document.getElementById('caption3').innerText = captions[0];
    } else {
        document.getElementById('img3').src = foto[1];
        document.getElementById('caption3').innerText = captions[1];
    }
}

function nextImg() {
    if (i < foto.length - 1) {
        i++;
    } else {
        i = 0;
    }
    updateGallery();
}

function prevImg() {
    if (i > 0) {
        i--;
    } else {
        i = foto.length - 1;
    }
    updateGallery();
}

document.addEventListener('DOMContentLoaded', function () {
    updateGallery();
});
