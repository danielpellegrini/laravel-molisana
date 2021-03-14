<?php 
$array = config("pasta");
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">        
        <title>Prodotto | Molisana</title>
    </head>

    <body>
        @extends('/layout/main-layout')

        @section('main')

        <main class="container">

            <div class="top">
              <img src="{{$product["src-h"]}}" alt="">
              <h1 class="product-title">{{$product["titolo"]}}</h1>
            </div>

            <img class="product-img" src="{{$product["src-p"]}}" alt="">

            <div class="container">
              <p class="product-description">
                {!! $product["descrizione"] !!}
              </p>
            </div>

            @if ($id > 0)
              <div class="prev">
                <a href="{{$id - 1}}">
                  <i class="fas fa-angle-left"></i>
                </a>
              </div>
            @endif

            @if (($id) < count($array) - 1) 

              <div class="next">
                <a href="{{$id + 1}}">
                  <i class="fas fa-angle-right"></i>
                </a>
              </div>


            @endif

          

            

        </main>

        @endsection

    </body>

</html>
