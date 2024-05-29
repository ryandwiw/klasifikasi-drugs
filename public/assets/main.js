document.addEventListener("DOMContentLoaded", function() {
    const navbarToggler = document.querySelector(".navbar-toggler");
    const navbar = document.querySelector(".navbar");
    const brandElement = document.querySelector(".navbar-brand.order-3.d-lg-none");
    const searchIcon = document.querySelector(".navbar-brand.order-5.d-lg-none.ml-auto");
    let isNavbarBlack = false;

    navbarToggler.addEventListener("click", function() {
        if (isNavbarBlack) {
            navbar.style.setProperty("background-color", "rgba(25, 98, 255, 0.842)", "important");
            brandElement.style.setProperty("color", "white", "important");
            searchIcon.style.setProperty("color","white","important");
            isNavbarBlack = false;
        } else {
            navbar.style.setProperty("background-color", "rgba(0, 0, 0, 0.8)", "important");
            brandElement.style.setProperty("color", "white", "important");
            searchIcon.style.setProperty("color","white","important");
            
            isNavbarBlack = true;
        }
    });

    window.addEventListener("scroll", function() {
        navbar.classList.toggle("scrolled", window.scrollY > 0);
        
        if (!isNavbarBlack) {
            if (window.scrollY > 0) {
                navbar.style.setProperty("background-color", "rgba(25, 98, 255, 0.842)", "important");
                brandElement.style.setProperty("color", "white", "important");
                searchIcon.style.setProperty("color","white","important");
            } else {
                navbar.style.setProperty("background-color", "rgba(25, 98, 255, 1)", "important");
                brandElement.style.setProperty("color", "white", "important");
                searchIcon.style.setProperty("color","white","important");
            }
        }
    });
});


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scrollToTopBtn").style.display = "block";
    } else {
        document.getElementById("scrollToTopBtn").style.display = "none";
    }
}

document.getElementById("scrollToTopBtn").addEventListener("click", function() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});
