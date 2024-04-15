<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

     protected $table = "donations";
     protected $fillable = [
        "nom_prenom","email","adresse","tel","ville","etat","code_postal","pays","montant_don","user_id"
     ];


     public function user()
     {
         return $this->belongsTo(User::class);
     }
}
