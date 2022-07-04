@extends('layout')

@section('content')
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="{{asset('css/offcanvas.css')}}" rel="stylesheet">
<style>
  .uper {
    margin-top: 40px;
  }
  .block{
    background-image: url("{{asset('images/vol.jpg')}}");
    background-repeat: no-repeat;
    background-size: cover;
  }
  
  h3{
    text-align: center;
    font-size: 1.5em;
    color: white; 
  }
 
</style>

<div class="uper block">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  
   <h3>Liste des vols disponibles</h3>
   <div class="d-flex justify-content-end mb-3"><a type="button" class="btn btn-secondary" href="{{('vols/create')}}">Enregistrer un vol</a></div>

  <table class="table table-bordered table-hover" style="color:white;">

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
          <td colspan="3">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($vols as $vol)
        <tr>
            <td>{{$vol->id}}</td>
            <td>{{$vol->code_vol}}</td>
            <td>{{$vol->date_depart}}</td>
            <td>{{$vol->heure_depart}}</td>
            <td>{{$vol->destination}}</td>
            <td>{{$vol->nb_classA}}</td>
            <td>{{$vol->nb_classB}}</td>
            <td>{{$vol->prix_classA}}</td>
            <td>{{$vol->prix_classB}}</td>
            <td><a href="{{ route('vols.edit', $vol->id)}}" class="btn btn-primary">modifier</a></td>
            <td><a href="{{ route('vols.show', $vol->id)}}" class="btn btn-primary">details</a></td>
            <td>
                <form action="{{ route('vols.destroy', $vol->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="{{asset('js/offcanvas.js')}}"></script>
@endsection


