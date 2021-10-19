<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap4 files-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Font awesome 5 -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom style -->
    <link href="https://gazipurecommerce.com/user/css/ui.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://gazipurecommerce.com/user/css/style.css">
<body>
    <style>
        .cart-div{
            position: fixed;
            top: 50%;
            right: 350px;
            height: 70px;
            width: 100px;
        }

        #wrapper {
            padding-left: 0;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        #sidebar-wrapper {
            z-index: 1000;
            position: fixed;
            right: 350px;
            width: 0;
            height: 100%;
            margin-right: -350px;
            overflow-y: auto;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        #page-content-wrapper {
            width: 100%;
            position: absolute;
        }

        #wrapper {
            padding-right: 350px;
        }

        #sidebar-wrapper {
            width: 350px;
        }

        .title {
            margin-bottom: 5vh
        }

        .title b {
            font-size: 1.5rem
        }


        .col-2,
        .col {
            padding: 0 1vh
        }
        .close {
            margin-left: auto;
            font-size: 0.7rem
        }

        img {
            width: 3.5rem
        }

        .back-to-shop {
            margin-top: 4.5rem
        }

        h5 {
            margin-top: 4vh
        }

        hr {
            margin-top: 1.25rem
        }
    </style>
    <div class="container-fluid">     
        @livewire('product')
    </div>
    @livewireScripts
</body>
</html>