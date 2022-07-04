<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = ['nom_passager', 'prenom_passager','sexe_passager','num_pieces','date_reservation','categorie','destination','code_vol','id_vol','prix'];
}
