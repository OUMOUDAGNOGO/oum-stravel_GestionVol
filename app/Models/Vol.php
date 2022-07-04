<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
    use HasFactory;
    protected $fillable = ['code_vol', 'date_depart','heure_depart','destination','nb_classA','nb_classB','prix_classA','prix_classB'];
}
