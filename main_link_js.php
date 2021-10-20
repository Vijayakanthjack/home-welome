<script src="public/js/jquery-3.3.1.min.js"></script>
<script src="public/js/owl.carousel.min.js"></script>
<script src="public/js/popper.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/jquery-ui.min.js"></script>
<script src="public/js/wow.min.js"></script>


    <script>
    $(".hovermenu").click(function(e) {
        e.stopPropagation();
    });

    $('body').click(function() {
        $('.hovermenu').hide();
    });
    </script>


    <script>
    $(document).ready(function() {
        new WOW().init();
    });
    </script>

    <script type="text/javascript">
    $(document).on("scroll", function() {
        if ($(document).scrollTop() > 10) {
            $("#header-bottom").addClass("shrink");

            $(".menu-in a").css({
                'color': '#000'
            });
            $(".l-heading").css({
                'color': '#000'
            });

        } else {
            $("#header-bottom").removeClass("shrink");
            $(".menu-in a").css({
                'color': '#000'
            });
            $(".l-heading").css({
                'color': '#000'
            });
        }
    });
    </script>

<script type="text/javascript">
$(".dropdown").hover(
    function() {
        $('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
        $(this).addClass('open');
    },
    function() {
        $('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
        $(this).removeClass('open');
    });
</script>