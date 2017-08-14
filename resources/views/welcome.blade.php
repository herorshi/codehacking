<!doctype html>
<html lang="en">
    <head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
                <link rel="stylesheet" href="/css/app.css">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <!-- Styles -->
              
    </head>
    <body>
            <div id="app">


            <example> </example>
 <center>
            <router-view> </router-view>
            <router-link :to="{name:'start'}"  tag="button" class="btn btn-primary" >start</router-link>
            <router-link :to="{name:'sname'}" tag="button" class="btn btn-primary">surname </router-link>
</center>
            </div>



<script>

window.Laravel = <?php   echo json_encode([

    'csrfToken' => csrf_token(),


    ]);?>



</script>

  <script src="/js/app.js"> </script>

    </body>
</html>
