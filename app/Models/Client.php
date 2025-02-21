<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
//client controller

class Client extends Model
{
    protected $fillable = [
        'gym_id', 'Full_name', 'date_of_birth', 'address', 'id_card_picture',
        'client_picture', 'id_card_number', 'email', 'phone', 'is_assured',
        'is_payed', 'subscription_expired_date', 'assurance_expired_date'
    ];
    public function gym()
    {
        return $this->belongsTo(Gym::class);
    }
    /**
     * Update the assurance and payment status based on expiration dates.
     */
    public function updateStatusBasedOnExpiration()
    {
        $currentDate = Carbon::now(); // Get the current date

        // Check if subscription is expired
        if ($this->subscription_expired_date < $currentDate->toDateString()) {
            $this->is_payed = false; // Set is_payed to false if subscription has expired
        }

        // Check if assurance is expired
        if ($this->assurance_expired_date < $currentDate->toDateString()) {
            $this->is_assured = false; // Set is_assured to false if assurance has expired
        }

        $this->save(); // Save changes to the database
    }

    
}

    // Relation avec le modèle Gym
   

