<!-- js http -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

<!-- js https -->
<!--<script type="text/javascript" src="{{ secure_asset('js/app.js') }}"></script>-->

<script>
    $(document).ready(function () {
        

        //this for responsiv sidenav
        $('.sidenav').sidenav();

        //this for sub-menu in sidenav
        $('.collapsible').collapsible();

        // this for sidenav menu select button
        /*$(document).ready(function () {
        
            $('ul ul li ul li').click(function () {
                $('li ul li').removeClass("active");
                $(this).addClass("active");
            });
        });*/

        
});


</script>
