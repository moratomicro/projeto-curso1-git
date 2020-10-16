<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-compatible" content"IE=edge">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>

        <title class="title-pg">{{$title ?? 'Cintilografia'}}</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}"/>

        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
       
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!--===============================================================================================-->
        <link rel="stylesheet" href="{{url('bootstrap-4.5.0-dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('css/style.css')}}">
    </head>