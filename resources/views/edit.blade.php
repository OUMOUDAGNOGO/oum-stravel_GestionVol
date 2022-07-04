@extends('layout')

@section('content')
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="{{asset('css/offcanvas.css')}}" rel="stylesheet">
<style>
  .uper {
    margin-top: 40px;
  }
  form{
    width: 50%;
    margin-left: 20%;
    height: 80%;
  }
  h2{
    text-align: center;
  }
  input{
    width: 150px; height: 50px;
    color: white;
  }
  .btn{
    float: right;
    margin-right: 270px;
    width: 150px;
    margin-top: 10px;
    color: black;
  }
  .content{
    background-image: url("{{asset('images/aeroport-de-bamako.webp')}}")
  }
</style>

<div class="card uper content">
  <div class="card-header darkgray" style=" background-color: darkgray;
    ">
    <h2>Modifier Vol</h2>
  </div>

  <div class="card-body ">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('vols.update', $vol->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="code_vol">code vol</label>
              <input type="text" class="form-control" name="code_vol" value="{{ $vol->code_vol }}"/>
          </div>
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="date_depart">date de part</label>
              <input type="date" class="form-control" name="date_depart" value="{{ $vol->date_depart }}"/>
          </div>
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="heure_depart">heure de depart</label>
              <input type="time" class="form-control" name="heure_depart" value="{{ $vol->heure_depart }}"/>
          </div>
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="destination">destination</label>
              <input type="text" class="form-control" name="destination" value="{{ $vol->destination }}"/>
          </div>
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nb_classA">ClassA</label>
              <input type="text" class="form-control" name="nb_classA" value="{{ $vol->nb_classA }}"/>
          </div>
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nb_classB">classB</label>
              <input type="text" class="form-control" name="nb_classB" value="{{ $vol->nb_classB }}"/>
          </div>
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="prix_classA">prix classA</label>
              <input type="text" class="form-control" name="prix_classA" value="{{ $vol->prix_classA }}"/>
          </div>
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="prix_classB">prix classB</label>
              <input type="text" class="form-control" name="prix_classB" value="{{ $vol->prix_classB }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="{{asset('js/offcanvas.js')}}"></script>
@endsection
 