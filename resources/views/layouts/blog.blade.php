<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Stand Blog - About Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="css/blogcss/fontawesome.css">
    <link rel="stylesheet" href="css/blogcss/templatemo-stand-blog.css">
    <link rel="stylesheet" href="css/blogcss/owl.css">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-complete.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
<!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
  </head>

  <body>


    @yield('content')

     <!-- Bootstrap core JavaScript -->
     <script src="/vendors/jquery/jquery.min.js"></script>
     <script src="/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

     <!-- Additional Scripts -->
     <script src="js/blogjs/custom.js"></script>
     <script src="js/blogjs/owl.js"></script>
     <script src="js/blogjs/slick.js"></script>
     <script src="js/blogjs/isotope.js"></script>
     <script src="js/blogjs/accordions.js"></script>

     <script language = "text/Javascript">
       cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
       function clearField(t){                   //declaring the array outside of the
       if(! cleared[t.id]){                      // function makes it static and global
           cleared[t.id] = 1;  // you could use true and false, but that's more typing
           t.value='';         // with more chance of typos
           t.style.color='#fff';
           }
       }
     </script>

   </body>
 </html>
