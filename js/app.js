$(window).on("scroll", function() {
    if($(window).scrollTop() > 50) {
        $(".header").addClass("scrolled");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $(".header").removeClass("scrolled");
    }
});