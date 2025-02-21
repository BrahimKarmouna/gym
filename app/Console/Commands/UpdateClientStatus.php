<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Client;
use Carbon\Carbon;

class UpdateClientStatus extends Command
{
    protected $signature = 'clients:update-status';
    protected $description = "Met à jour l'état des paiements et de l'assurance des clients en fonction des dates d'expiration.";

    public function handle()
    {
        $today = Carbon::today();

        // Mettre à jour le statut de paiement et d'assurance si la date est dépassée
        Client::where('subscription_expired_date', '<', $today)
            ->update(['is_payed' => false]);

        Client::where('assurance_expired_date', '<', $today)
            ->update(['is_assured' => false]);

        // Mettre à jour le statut de paiement et d'assurance si la date est toujours valide
        Client::where('subscription_expired_date', '>=', $today)
            ->update(['is_payed' => true]);

        Client::where('assurance_expired_date', '>=', $today)
            ->update(['is_assured' => true]);

        $this->info('Statuts des clients mis à jour avec succès.');
    }
}
