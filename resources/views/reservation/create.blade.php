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
  h3{
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
  label{
    font-size: 1.5em;
  }
  select{
    width: 500px; height: 40px;
    margin-top: 10px;
  }
  .oumou{
    background-image: url("{{asset('images/view.webp')}}");
    background-repeat: no-repeat;
    background-size: cover;
  }

</style>

<div class="card uper oumou" >
  <div class="card-header">
    <h3>Faire une reservation</h3>
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

      <form method="post" action="{{ route('reservations.store') }}">
.         @csrf
          <div class="form-group">
              <label for="nom_passager">Nom passager</label>
              <input type="text" class="form-control" name="nom_passager"/>
          </div>

          <div class="form-group">
              <label for="prenom_passager">Prenom</label>
              <input type="text" class="form-control" name="prenom_passager"/>
          </div>
          
          <div class="form-group">
              <label for="sexe_passager">Sexe</label>
              <select name="sexe_passager" id="sexe">
              <option valeur="femme">femme</option>
                    <option valeur="homme">homme</option>
              </select>
                    
            
          </div>
          <div class="form-group">
              <label for="num_pieces">Numero de pieces</label>
              <input type="text" class="form-control" name="num_pieces"/>
          </div>
          <div class="form-group">
              <label for="date_reservation">Date de reservation</label>
              <input type="date" class="form-control" name="date_reservation"/>
          </div>
          <div class="form-group">
              <label for="categorie">categorie</label>
              <select name="categorie" id="categorie">
                    <choix>choisissez la classe</choix>
                    <option  valeur="classA">ClassA</option>
                    <option valeur="classB">classB</option>
              </select>
                    
             
          </div>
          <div class="form-group">
              <label for="destination">Destination</label>
              <input type="text" class="form-control" name="destination"/>
          </div>
          <div class="form-group">
              <label for="code_vol">Code vol</label>
              <input type="text" class="form-control" name="code_vol"/>
          </div>
          <div class="container">
              <label class="form-label text-white" style="font-weight: bold;" for="doa">id vol</label>
              <select class="form-select" style="color: #41A7A5" aria-label="Default select example" name="id_vol">
                 @foreach ($vols as $vol)
                    <option value="{{$vol->id}}">{{$vol->id}}</option>
                 @endforeach
                </select>
          </div>
          <div class="form-group">
          <label for="prix">prix</label>
              <input type="text" class="form-control" name="prix"/>     
          </div>
          <button type="submit" class="btn btn-primary">Reserver</button>
      </form>
  </div>
</div>
<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="{{asset('js/offcanvas.js')}}"></script>
@endsection