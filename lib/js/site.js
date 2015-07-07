(function() {

    $(document).ready(function(){
        bindEvents();
        getCurrentPage();
    });

    function bindEvents() {
        $("button.toggle").on("click", function(e) {
            $("#mainNav").toggle();
            $("#logo").toggle();
        });

        /* Override inline style set by toggle button when going back
           into desktop mode
         */
        $(window).on("resize", function(e) {
            console.log( $(this).width() );
           if($(this).width() >= 768 && !$(this).is("visible")) {
               $("#mainNav").show();
           }
        });

        /* Dropdown popout */
        $("li.dropdown").on("click", function(e) {
            $(this).children('ul').toggle();
            $(this).toggleClass("open");
        });
    }

    /* Underline the current page/category */
    function getCurrentPage() {
        /* This attribute is set in our layout template based on the data passed in via Slim */
        var page = $(document.body).attr('data-category');
        console.log(page);
        if (page != null) {
            $("a[href$=" + page + "]").addClass("highlighted");
        }
    }
}());



