<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Amado - Furniture Ecommerce Template | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('storage/img/core-img/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Core Style CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    
    <link rel="stylesheet" href="{{asset('css/core-style.css')}}">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    

    @yield('customCss')
</head>
<body>
   

    @yield('navBar')

    @yield('section')
    @yield('customjs')
     <!-- ##### Footer Area End ##### -->
     {{-- <script src="{{asset('js/app.js')}}"></script> --}}
     <script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/active.js')}}"></script>
    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    
    <!-- Popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
  
    <!-- Active js -->
    
   
</body>
</html>