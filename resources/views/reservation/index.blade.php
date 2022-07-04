@extends('layout')

@section('content')
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="{{asset('css/offcanvas.css')}}" rel="stylesheet">
<style>
  .uper {
    margin-top: 40px;
  }
 .container{
   background-image: url("{{asset('images/vol3.webp')}}");
   background-repeat: no-repeat;
    background-size: cover;
 }
 h3{
    text-align: center;
    color: black;
    margin-top: 10px;
    font-size: 1.5em;
 }
 table{
  margin-top:-10px;
 }
</style>

<div class="uper container">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  
  <h3>Liste des reservations</h3>
  <div class="d-flex justify-content-end mb-3"><a type="button" class="btn btn-secondary" href="{{('/reservations/create')}}">Faire reservation</a></div>

  <table class="table table-bordered table-hover" style="color:black; font-size: 1rem;">

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
          <td colspan="3">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($reservations as $reservation)
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
            <td><a href="{{ route('reservations.edit', $reservation->id)}}" class="btn btn-primary">Modifier</a></td>
            <td><a href="{{ route('reservations.show', $reservation->id)}}" class="btn btn-info">Detail</a></td>
            <td>
                <form action="{{ route('reservations.destroy', $reservation->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
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

