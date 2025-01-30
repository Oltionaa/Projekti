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
    updateGallery();//Kjo kontrollon nëse indeksi aktual nuk ka arritur fundin e listës së imazheve.
   // Nëse ka më shumë imazhe për të kaluar, rrit indeksin (i++), duke kaluar te imazhi tjetër në listë.
    //Përdor else për të kthyer indeksin në fillim:
    
    //Nëse i është i barabartë me indeksin e fundit (p.sh., i === foto.length - 1), kjo do të thotë se kemi arritur fundin e arrays.
    //Kthejmë indeksin në fillim (i = 0) për të krijuar një cikël të vazhdueshëm.
}

function prevImg() {
    if (i > 0) {
        i--;
    } else {
        i = foto.length - 1;
    }
    updateGallery();
}
//Kontrollon nëse i është më i madh se 0: i > 0:
//Kjo kontrollon nëse indeksi aktual nuk është në fillim të listës.
//Nëse nuk është, zvogëlohet indeksi (i--), duke kaluar te imazhi i mëparshëm.
//Përdor else për të kaluar në fund të listës:

//Nëse i është 0 (pra, jemi te imazhi i parë në listë), kjo do të thotë se nuk mund të kalojmë më mbrapa.
//Vendosim indeksin i në foto.length - 1, që është indeksi i fundit, për të vazhduar ciklin rrethor.

document.addEventListener('DOMContentLoaded', function () {
    updateGallery();
});
