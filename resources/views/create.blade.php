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
  .contenue{
    background-image: url("{{asset('images/ethio.jpg')}}")
  }
  label{
    font-size: 1.5rem;
    color: black;
  }

</style>

<div class="card uper contenue">
  <div class="card-header " style="background-color:cadetblue;">
   <h2> Programmation de Vol</h2>
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('vols.store') }}">
.         @csrf
          <div class="form-group">
              <label for="code_vol">Code vol</label>
              <input type="text" class="form-control" name="code_vol"/>
          </div>
          <div class="form-group">
              <label for="date_depart">Date de part</label>
              <input type="date" class="form-control" name="date_depart"/>
          </div>
          <div class="form-group">
              <label for="heure_depart">Heure de part</label>
              <input type="time" class="form-control" name="heure_depart"/>
          </div>
          <div class="form-group">
              <label for="destination">Destination</label>
              <input type="text" class="form-control" name="destination"/>
          </div>
          <div class="form-group">
              <label for="nb_classA">Nb classA</label>
              <input type="number" class="form-control" name="nb_classA"/>
          </div>
          <div class="form-group">
              <label for="nb_classB">Nb classB</label>
              <input type="number" class="form-control" name="nb_classB"/>
          </div>
          <div class="form-group">
              <label for="prix_classA">Prix classA</label>
              <input type="text" class="form-control" name="prix_classA"/>
          </div>
          <div class="form-group">
              <label for="prix_classB">Prix classB</label>
              <input type="text" class="form-control" name="prix_classB"/>
          </div>
          <button type="submit" class="btn btn-primary">Programmer</button>
      </form>
  </div>
</div>
<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="{{asset('js/offcanvas.js')}}"></script>
@endsection
