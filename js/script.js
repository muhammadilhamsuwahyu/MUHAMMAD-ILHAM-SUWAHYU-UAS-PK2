// read more
function readMore(udin) {
    let dots = document.querySelector(`.read-more[article-x="${Seni}"] .dots`);
    let moreText = document.querySelector(`.read-more[article-x="${Seni}"] .more`);
    let btnText = document.querySelector(`.read-more[article-x="${Seni}"] .readBtn`);

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.textContent = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.textContent = "Read less";
        moreText.style.display = "inline";
    }
}

// scrool to top
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("gotoTop").style.display = "block";
    } else {
        document.getElementById("gotoTop").style.display = "none";
    }
}

function topFunction() {
 
     $('html, body').animate({scrollTop:0}, 'slow');
}