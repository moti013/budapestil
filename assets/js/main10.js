function topnavresponse() { var a = document.getElementById("myTopnav"); if (a.className === "topnav") { a.className += " responsive" } else { a.className = "topnav" } }

var drop = document.getElementsByClassName("dropbtn");
var i;
for (i = 0; i < drop.length; i++) {
    drop[i].addEventListener("click", function () {
        var a = this.nextElementSibling;
        if (a.style.display === "block") {
            a.style.display = "none"
        }
        else { a.style.display = "block" }
    })
}
var acc = document.getElementsByClassName("accordion"); var i; for (i = 0; i < acc.length; i++) { acc[i].addEventListener("click", function () { this.classList.toggle("active1"); var a = this.nextElementSibling; if (a.style.display === "block") { a.style.display = "none" } else { a.style.display = "block" } }) }
var acc1 = document.getElementsByClassName("accordion1"); var z; for (z = 0; z < acc1.length; z++) { acc1[z].addEventListener("click", function () { this.classList.toggle("active2"); var a = this.nextElementSibling; if (a.style.display === "block") { a.style.display = "none" } else { a.style.display = "block" } }) } document.addEventListener("DOMContentLoaded", function () { let lazyImages = [].slice.call(document.querySelectorAll("img.lazy")); let active = !1; const lazyLoad = function () { if (active === !1) { active = !0; setTimeout(function () { lazyImages.forEach(function (lazyImage) { if ((lazyImage.getBoundingClientRect().top <= window.innerHeight && lazyImage.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyImage).display !== "none") { lazyImage.src = lazyImage.dataset.src; lazyImage.srcset = lazyImage.dataset.srcset; lazyImage.classList.remove("lazy"); lazyImages = lazyImages.filter(function (image) { return image !== lazyImage }); if (lazyImages.length === 0) { document.removeEventListener("scroll", lazyLoad); window.removeEventListener("resize", lazyLoad); window.removeEventListener("orientationchange", lazyLoad) } } }); active = !1 }, 200) } }; document.addEventListener("scroll", lazyLoad); window.addEventListener("resize", lazyLoad); window.addEventListener("orientationchange", lazyLoad) })
var acc2 = document.getElementsByClassName("accordion2"); var y; for (y = 0; y < acc2.length; y++) { acc2[y].addEventListener("click", function () { this.classList.toggle("active1"); var a = this.nextElementSibling; if (a.style.display === "block") { a.style.display = "none" } else { a.style.display = "block" } }) }

function scrollTo(hash) {
    location.hash = "#" + hash;
}