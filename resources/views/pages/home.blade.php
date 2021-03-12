@php
    
    $type  = [];

    foreach ($array as $key => $product) {
        $product["id"] = $key;
        $type[$product["tipo"]][] = $product;
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
      
      @extends('/layout/main-layout')
      
       @section('main')

        <main class="main">

          <div class="main-container">
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
                  <div class="card">
                    <img class="img-pasta" src="{{$product["src"]}}" alt="pasta"> 
                      <div class="overlay">
                          <a href="/product/{{$product["id"]}}">
                            <h3 class="titolo">{{$product["titolo"]}}</h3>
                          </a>
                          <a href="/product/{{$product["id"]}}"> 
                            <img class="icon" src="{{url('image/fork-spoon-icon.svg')}}" alt="">
                          </a>
                        </div>
                        
                        
                  </div>                  
                @endforeach

              @endforeach

            </div>

          </div>
          
        </main> 
           
       @endsection
      
    </body>

</html>
