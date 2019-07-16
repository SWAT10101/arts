<!-- js http -->
<!--<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>-->

<!-- js https -->
<script type="text/javascript" src="{{ secure_asset('js/app.js') }}"></script>

<script>
    $(document).ready(function () {
        $(".dropdown-button").dropdown({
            hover: false, // Activate on hover
            coverTrigger: false, // Displays dropdown below the button
            alignment: 'right', // Displays dropdown with edge aligned to the left of button
        });

        $('.sidenav').sidenav();

        $('.collapsible').collapsible();

        $(document).ready(function () {
            $('ul ul li ul li').click(function () {
                $('li ul li').removeClass("active");
                $(this).addClass("active");
            });
        });
    });

</script>
