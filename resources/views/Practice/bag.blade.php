<x-clayout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=\, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/design.css') }}">
        <title>Document</title>
    
    </head>
    <body style="background-size: 50%;background-attachment: fixed;">
        <div class = 'container'>
            @foreach ($items as $item)
            <form action="" method="post">
                
                <div class ='image1'>
                    <div class ='img_background'>
                        <img src="{{ asset('storage/' .$item->Picture) }}"/>
                    </div>
                    <div class="img-text">
                        <h2 name ="Name">{{ $item->Name }}</h2> 
                        <input type="hidden" name = "Name" id ="Name" value = "" >
                        <p>{{ $item->Description }}</p>
                        <input type="hidden" name = "describe" id ="Description" value = "" >
                        <h2 name = "Price">{{ $item->Price }}</h2>
                        <input type="hidden" name = "Price" id ="Price" value = "" >
                     </div>
                     <div class = "button">
                         <button type="submit" name = 'Submit'>ORDER NOW</button>
                     </div>
                        
                </div>
            </form>
            @endforeach
        </div>
       
        
    
    </html>
</x-clayout>