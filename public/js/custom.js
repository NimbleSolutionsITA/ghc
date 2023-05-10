$(document).ready(function () {

    $('.newsticker').newsTicker({
        row_height:20,
        max_rows: 1,
        speed: 600,
        direction: 'up',
        duration: 4000,
        autostart: 1,
        pauseOnHover: 0
    });

    // Change language
    $("#langageSwitcher a").click(function () {
        var locale = $(this).attr('id');
        var _token = $("input[name=_token]").val();

        $.ajax({
            url:"/language",
            type:"POST",
            data: {lang: locale, _token: _token},
            datatype: 'jason',
            success: function (data) {

            },
            error: function (data) {

            },
            beforeSend: function (data) {

            },
            complete: function (data) {
                window.location.reload(true);
            }
        });
    });

    $( ".th-featuresnav a" ).on( "myCustomEvent", function() {
        $(window).trigger('resize.px.parallax');
    });
    $( ".th-featuresnav a" ).click(function () {
        $( ".th-featuresnav a" ).trigger( "myCustomEvent" );
    });
    $( "button.cookie-consent__agree" ).click(function () {
        $.getScript("https://www.googletagmanager.com/gtag/js?id=UA-112887572-2");
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-112887572-2', { 'anonymize_ip': true });
    });
});
