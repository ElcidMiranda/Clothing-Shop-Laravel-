<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/design.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
   
<div class = 'topH'>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('create') }}">Create</a>
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-instagram"></a>
    
    <div class= 'push'>
      <button type = 'submit'><i class = "fa fa-search"></i></button>
      <input type="search" name="" id="">

    </div>
    
    
</div>

{{ $slot }}
