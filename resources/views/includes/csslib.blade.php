
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Style http -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

<!-- Style https -->
<!--<link href="{{ secure_asset('css/app.css') }}" rel="stylesheet" type="text/css">-->

<style>
 
 
 .ml-3{
    margin-left: 16px;
 }

 .mt-3{
   margin-top: 16px;
 }

 .sidenav{
   width: 240px;
 }

 html{
   background: #F2F4F6;
 }

 
 header, body, footer {
      padding-left: 240px;
    }

    @media only screen and (max-width : 992px) {
      header, body, footer {
        padding-left: 0;
      }
    }

    [type="checkbox"].filled-in:checked + span:not(.lever):after{
     border: 2px solid #E91E63;
     background-color: #E91E63;
}

.sidenav .collapsible-body > 
ul:not(.collapsible) > 
li.active, .sidenav.sidenav-fixed .collapsible-body > 
ul:not(.collapsible) >
 li.active  {
  background-color: #E91E63;
}

</style>

