<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;
    protected $table = "joueurs";
    protected $fillable= [
        "nom",
        "prenom",
        "age",
        "numero",
        "genre",
        "role_id",
        "equipe_id",
        "continent_id"
    ];
    
    public function equipe(){
        return $this->belongsTo(Equipe::class);
    }
    public function role(){
        return $this->belongsTo(Role::class);
    }
    
}
