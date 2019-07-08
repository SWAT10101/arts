@if ($errors->has('email'))
 <script>       
      $( document ).ready(function() {
         alertify.notify('<div class="text-white">{{ $errors->first('email') }}</div>', 'error', 10); 
     });
 </script>
@endif


@if ($errors->has('password'))
 <script>
     $( document ).ready(function() {
         alertify.notify('<div class="text-white">{{ $errors->first('password') }}</div>', 'error', 10); 
     });
 </script>
@endif

@if ($errors->has('massage'))
 <script>
     $( document ).ready(function() {
         alertify.notify('<div class="text-white">{{ $errors->first('massage') }}</div>', 'error', 10); 
     });
 </script>
@endif

{{--  create post  --}}
@if ($errors->has('subject'))
 <script>
     $( document ).ready(function() {
         alertify.notify('<div class="text-white">{{ $errors->first('subject') }}</div>', 'error', 10); 
     });
 </script>
@endif
@if ($errors->has('firstname'))
 <script>
     $( document ).ready(function() {
         alertify.notify('<div class="text-white">{{ $errors->first('firstname') }}</div>', 'error', 10); 
     });
 </script>
@endif
@if ($errors->has('lastname'))
 <script>
     $( document ).ready(function() {
         alertify.notify('<div class="text-white">{{ $errors->first('lastname') }}</div>', 'error', 10); 
     });
 </script>
@endif

@if ($errors->has('body'))
 <script>
     $( document ).ready(function() {
         alertify.notify('<div class="text-white">{{ $errors->first('body') }}</div>', 'error', 10); 
     });
 </script>
@endif




@if (session('success'))

      < <script>
        $( document ).ready(function() {
            alertify.notify('<div class="text-white">{{ session('success') }}</div>', 'success', 10); 
        });
    </script>
@endif

@if (session('error'))

      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
      </div>
    
@endif

<!-- redirct with massage in Authenticate.php file -->
@if (session('message'))

<script>
   var mass = "<dic class='text-white'>{{session('message')}} <b>login</b> first !</div>";
    $( document ).ready(function() {
        alertify.notify(mass, 'error', 10); 
    });
    
</script>
@endif

@if (session('welcome'))

<script>
   var mass = "<dic class='text-white'>{{session('welcome')}}</div>";
    $( document ).ready(function() {
        alertify.notify(mass, 'success', 10); 
    });
    
</script>
@endif