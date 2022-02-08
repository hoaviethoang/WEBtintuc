var navDropWrapper = document.getElementById("navb")
var height = navDropWrapper.offsetTop;
document.onscroll = function () {
    var heightPage = window.pageYOffset;
    if (heightPage > height)
    navDropWrapper.classList.add("fix")
    else
    navDropWrapper.classList.remove("fix")

}


document.addEventListener("DOMContentLoaded", function() {
    var scale = (($(window).width() / 1366.0) + ($(window).height() / 768.0)) / 2;
    $('body').css({
        '-webkit-transform': 'translate(-50%,-50%) scale(' + scale + ')',
        '-moz-transform': 'translate(-50%,-50%) scale(' + scale + ')',
        '-ms-transform': 'translate(-50%, -50%) scale(' + scale + ')',
        '-o-transform': 'translate(-50%, -50%) scale(' + scale + ')',
        'transform': 'translate(-50%, -50%) scale(' + scale + ')'
    })

    //console.log(scale);
    //console.log($('body').css('transform'));
})

// const backToTop = document.querySelector(".backToTop");

// window.addEventListener("scroll", () => {
//     if (window.pageXOffset > 100) {
//         backToTop.classList.add("active");
//     } else {
//         backToTop.classList.remove("active");
//     }
// })