<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
    rel="stylesheet">

  <title>AllT Blog - Posts</title>

  <!-- Bootstrap core CSS -->
  <link href="/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="/css/fontawesome.css">
  <link rel="stylesheet" href="/css/templatemo-stand-blog.css">
  <link rel="stylesheet" href="/css/owl.css">
  <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style-complete.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
  <!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
</head>

<body>
  <!-- Header -->
  @include('partials.navbar')

  @yield('content')

  <!-- Bootstrap core JavaScript -->
  <script src="/vendors/jquery/jquery.min.js"></script>
  <script src="/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Additional Scripts -->
  <script type="">
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  </script>
  <script src="/js/custom.js"></script>
  <script src="/js/owl.js"></script>
  <script src="/js/slick.js"></script>
  <script src="/js/isotope.js"></script>
  <script src="/js/accordions.js"></script>
  <script src="/js/ajax/follow.js"></script>
  <script src="/js/ajax/like.js"></script>
  <script src="/js/ajax/messages.js"></script>
  <script src="/js/ajax/popper.min.js"></script>
  <script src="/js/ajax/postMessage.js"></script>

  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) {                   //declaring the array outside of the
      if (!cleared[t.id]) {                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value = '';         // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>

</body>

</html>