<!-- js http -->
<!--<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>-->


<!-- js https -->
<script type="text/javascript" src="{{ secure_asset('js/app.js') }}"></script>



<script>
$(document).ready(function(){
   $(".dropdown-trigger").dropdown({
      hover: true
   });
   
});
</script>