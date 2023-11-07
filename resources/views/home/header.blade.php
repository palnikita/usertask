<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('public/')}}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{asset('public/')}}/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/')}}/assets/libs/css/style.css">
    <link rel="stylesheet" href="{{asset('public/')}}/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{asset('public/')}}/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="{{asset('public/')}}/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="{{asset('public/')}}/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('public/')}}/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="{{asset('public/')}}/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">


    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>

         <style>
      .text-yellow {
    color: #FFC750;
}

.text-red {
    color: red;
}

.text-green {
    color: green;
}
    </style>
    
</head>

<body>
  
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
          
                <h1 class="h1">
          <a href="./index.html" style="color: black" class="navbar-brand"><span class="span" style="color: hsl(152, 95%, 39%);">Home</span></a>
        </h1>
               
            </nav>
        </div>


        @include('home.sidenav')



</body>
</html>