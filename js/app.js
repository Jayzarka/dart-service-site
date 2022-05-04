$(function() {
    var header = $("#header"),
        introH = $("#intro").innerHeight(),
        scrollOffset = $(window).scrollTop();

    /* fixed header */
    checkScroll(scrollOffset);

    $(window).on("scroll", function() {
        scrollOffset = $(this).scrollTop();

        checkScroll(scrollOffset);
    });

    function checkScroll(scrollOffset) {
        if (scrollOffset >= introH) {
            header.addClass("fixed");
        } else {
            header.removeClass("fixed");
        }
    }

    /* scroll */
    $("[data-scroll]").on("click", function(event) {
        event.preventDefault();

        var blockId = $(this).data('scroll'),
            blockOffset = $(blockId).offset().top;

        $("html, body").animate({
            scrollTop: blockOffset
        }, 700);
    });

    /* Menu nav toggle */
    $("#nav__toggle").on("click", function(event) {
        event.preventDefault();

        $(this).toggleClass("active");
        $("#menu").toggleClass("active");

        // $("#menu").toggleClass("active");
    });


    /* Accorion */
    $("[data-collapse]").on("click", function(event) {
        event.preventDefault();

        $(this).toggleClass("active");
    });

    /* Slier */
    $("[data-slider]").slick({
        vertical: true,
        verticalSwiping: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    /* Team */
    $("[data-avatar]").on("click", function(event) {
        event.preventDefault();

        var id = $(".team__about").attr('id'),
            blockId = $("[data-avatar='" + id + "']");


        $("[data-avatar]").removeClass("active");
        $(this).toggleClass("active");

        console.log(id);
    });

    // отправка формы без обновления через ajax
    $('#contactForm').submit(function(event) { // отслеживание события
        event.preventDefault();

        var string = $(this).serialize(); // Серелизование данных 
        var method = $(this).attr('method');
        var link = $(this).attr('action');

        $.ajax({
            type: method,
            url: "./php/mail.php",
            data: string,
            // dataType: "json", // формат получения ответа
            success: function() {
                alert("Отправлено");
                $('#contactForm')[0].reset();
            },
            error: function(xhr, str) { // Сценарий при ошибке
                alert('Возникла ошибка: ' + xhr.responseCode);
            }
        });
    });

});