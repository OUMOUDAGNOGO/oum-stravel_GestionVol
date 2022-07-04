<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     <link href="{{asset('css/offcanvas.css')}}" rel="stylesheet">
    <title>detail</title>
</head>
@extends('layout')
@section('content')
<body>

    <style>
        h1{
            text-align: center;
            color:white;
            font-size: 2rem;
            background-color: darkgrey;
            margin-top: 10px;
        }
        body{
            background-image: url("{{asset('images/Real-Flight-Simulator2.png')}}");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <h1>Details vol</h1>
<div class="card uper detail" >
    <table class="table table-bordered table-hover" style="color:black; font-size: 1rem;"">
        <thead class="table table-success">
        <tr>
          <td scope="col">id</td>
          <td scope="col">code vol</td>
          <td scope="col">date de depart</td>
          <td scope="col">heure de depart</td>
          <td scope="col">destination</td>
          <td scope="col">nb classA</td>
          <td scope="col">nb classB</td>
          <td scope="col">prix classA</td>
          <td scope="col">prix classB</td>
          
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$vols->id}}</td>
            <td>{{$vols->code_vol}}</td>
            <td>{{$vols->date_depart}}</td>
            <td>{{$vols->heure_depart}}</td>
            <td>{{$vols->destination}}</td>
            <td>{{$vols->nb_classA}}</td>
            <td>{{$vols->nb_classB}}</td>
            <td>{{$vols->prix_classA}}</td>
            <td>{{$vols->prix_classB}}</td>
        </tr>
        </tbody>
        
    </table>
    
</div>
<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="{{asset('js/offcanvas.js')}}"></script>
</body>
</html>
@endsection


