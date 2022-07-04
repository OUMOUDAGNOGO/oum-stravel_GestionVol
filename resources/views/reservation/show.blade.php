

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
        <td>ID</td>
          <td scope="col">nom_passager</td>
          <td scope="col">prenom_passager</td>
          <td scope="col">sexe_passager</td>
          <td scope="col">numero pieces</td>
          <td scope="col">Date de reservation</td>
          <td scope="col">categorie</td>
          <td scope="col">Destination</td>
          <td scope="col">Code vol</td>
          <td scope="col">id vol</td>
          <td scope="col">prix</td>
        
          
        </tr>
        </thead>
        <tbody>
        <tr>
        <td>{{$reservation->id}}</td>
            <td>{{$reservation->nom_passager}}</td>
            <td>{{$reservation->prenom_passager}}</td>
            <td>{{$reservation->sexe_passager}}</td>
            <td>{{$reservation->num_pieces}}</td>
            <td>{{$reservation->date_reservation}}</td>
            <td>{{$reservation->categorie}}</td>
            <td>{{$reservation->destination}}</td>
            <td>{{$reservation->code_vol}}</td>
            <td>{{$reservation->id_vol}}</td>
            <td>{{$reservation->prix}}</td>
        </tr>
        </tbody>
        
    </table>
    
</div>
<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="{{asset('js/offcanvas.js')}}"></script>
</body>
</html>
@endsection


