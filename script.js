$(document).ready(function() {
    $(window).scroll(function() {
        if(this.scrollY > 20) {
            $('.navbar').addClass("sticky");
        } else {
            $('.navbar').removeClass("sticky");
        }
        if(this.scrollY > 500) {
            $('.scroll-up-btn').addClass("show");
        } else {
            $('.scroll-up-btn').removeClass("show");
        }
    });

    // slide-up script
    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0})
    });

    // toggle menu/navbar script
    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });

    // typing animation script
    var typed = new Typed(".typing", {
        strings: ["<span class=\"highlight\"> Developer</span>", "n <span class=\"highlight\">Engineer</span>", "n <span class=\"highlight\"> Innovator</span>"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    var typed = new Typed(".typing-2", {
        strings: ["<span class=\"highlight\"> Developer</span>", "n <span class=\"highlight\">Engineer</span>", "n <span class=\"highlight\"> Innovator</span>"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    // mouse hover flashlight effect script
    var $magic = $(".flashlight"),
      magicWHalf = $magic.width() / 2;
    $(document).on("mousemove", function(e) {
        $magic.css({"left": e.pageX - magicWHalf, "top": e.pageY - magicWHalf});
    });
});