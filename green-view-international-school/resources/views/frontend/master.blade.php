<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Web App Landing Page Website Tempalte | Smarteyeapps.com</title>
    @include('frontend.includes.style')
</head>
<body>
       <!--########################### Header Starts Here ###################### -->
    @include('frontend.includes.header')
           
    <!-- ################# Why Choos US Starts Here #######################--->   
    
   @yield('content')
    <!--*************** Footer  Starts Here *************** -->
 @include('frontend.includes.fotter')
</body>

   @include('frontend.includes.script')
</html>
