<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // Champs autorisés pour l'assignation en masse
    protected $fillable = [
        'gym_id', 
        'Full_name', 
        'email', 
        'phone', 
        'date_of_birth', 
        'address', 
        'id_card_number', 
        'id_card_picture', 
        'client_picture'
    ];

    // Relation avec le modèle Gym
    public function gym()
    {
        return $this->belongsTo(Gym::class);
    }
}
