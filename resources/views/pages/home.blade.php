@php
    
    $type  = [];

    foreach ($array as $key => $prodotto) {
        $prodotto["id"] = $key;
        $type[$prodotto["tipo"]][] = $prodotto;
    }
    
@endphp    



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Molisana</title>
    </head>

    <body>
      @include('components/header')

      <main class="main">

        <div class="container">
          <div class="pastaCard">

            @foreach ($type as $key => $products)
            @if ($key === 'lunga')
              <h2>le lunghe</h2> 
            @elseif ($key === 'corta')
              <h2>le corte</h2>
            @elseif ($key === 'cortissima')
              <h2>le cortissime</h2>
            @endif
              
              @foreach ($products as $product)
                <div class="single-box">
                  <img class="img-pasta" src="{{$product["src"]}}" alt="pasta">
                  
                </div>                  
              @endforeach   
            @endforeach

          </div>

        </div>
        
      </main> 

      @include('components/footer')
      
    </body>

</html>
