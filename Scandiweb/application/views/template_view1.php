<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/css/card.css" />
    <script src="/js/jquery-1.6.2.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="gradient1">
   <div class="container simple-linear "  >
       <?php include 'application/views/'.$content_view; ?>

   </div>



</body>
</html>


<style>

    .container{
        max-width: 1600px;
        border-radius: 15px ;
        min-height:  calc(100vh - 100px);
        background: linear-gradient(#e7e7f3, #ffd5de);
        padding: 50px;

    }
    div.ex3 {

        height: 650px;
        background: linear-gradient(#e7e7f3, #ffd5de);
        box-shadow: 0 0 5px #8c90c2;
        border-radius: 5px;
        margin-top: 50px;
        overflow-y: auto;
    }

    #btn_v>a{
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
    }

    a:hover {
        text-decoration: none;
        color: white;


    }



</style>
