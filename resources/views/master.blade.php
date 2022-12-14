<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-commerce Project</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</head>
<style>
    .custom-login{
        height: 500px;
        padding-top:100px;
    }
    
    img.slider-img
    {
        height: 400px !important;
    }
    img.trending-img
    {
        height: 100px !important;
    }
    .text-block {
        position: absolute;
        bottom: 20px;
        left: 50%;
        right: 20px;
        background: rgb(0, 0, 0); /* Fallback color */
        background: rgba(0, 0, 0, 0.8); /* Black background with 0.5 opacity */
        color: white;
        padding-left: 20px;
        padding-right: 20px;
    }
    
    .custom-product
    {
        height: 600px !important;
    }
    .trending-item
    {
        float: left;
        width:20%;
    }
    .trending-wrapper
    {
        margin-left: 5%;
        margin-right: 5%;
    }
    .detail-img
    {
        height: 200px;
    }
    .search-box
    {
        width: 500px !important;
    }
    .cart_list_div
    {
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
</style>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
</html>
