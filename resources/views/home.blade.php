
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Site Metas -->
    <title>Freshshop</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    @include('shared.css')
</head>

<body>
    <!-- Start Main Top -->
    @include('shared.header')
    <!-- End Main Top -->
    <!-- Start Top Search -->
    
    <!-- End Top Search -->
    <!-- Start Slider -->
    @include('layout_client.slider')
    <!-- End Slider -->
    <!-- Start Categories  -->
    @include('layout_client.categories')
    <!-- End Categories -->  
    @include('layout_client.products')

    <!-- Start Products  -->
    @include('layout_client.advertisement')
    <!-- End Products  -->
    <!-- Start Blog  -->
    @include('layout_client.blog')
    <!-- End Blog  -->
    <!-- Start Instagram Feed  -->
    @include('layout_client.instagram')
    <!-- End Instagram Feed  -->


    @include('shared.footer')

    @include('shared.js')
</body>

</html>