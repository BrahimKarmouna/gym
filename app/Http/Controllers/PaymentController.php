<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Payment;
use App\Models\Plan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function index()
    {
        $payments = Payment::with(['client', 'plan'])->get();
    
        return response()->json($payments);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'client' => 'required',
            'plan' => 'required',
            'payment_date' => 'required|date',
        ]);

        $plan = Plan::findOrFail($request->input('plan.id'));
        $client = Client::findOrFail($request->input('client.id'));

        // Get selected plan duration
        // $plan = Plan::findOrFail($request->plan_id);
        // $client = Client::findOrFail($request->client_id);

        // Calculate new expiration date based on payment date
        $newExpirationDate = Carbon::parse($request->payment_date)->addMonths($plan->duration);


        // Create payment
        Payment::create([
            'client_id' => $client->id,
            'plan_id' => $plan->id,
            'payment_date' => Carbon::parse($request->payment_date)->format('Y-m-d'),
        ]);

        // Update client's subscription expiration date
        $client->update(['subscription_expired_date' => $newExpirationDate]);

        return response()->json(['message' => 'Payment saved and subscription updated.']);
    }
    public function show($id)
    {
        $payment = Payment::with(['client', 'plan'])->findOrFail($id);
        return response()->json($payment);
    }
    public function update(Request $request, $id)
    {
        $payment = Payment::findOrFail($id);
        $payment->update($request->all());
        return response()->json($payment);
    }
    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);
        $clientId = $payment->client_id;
        
        // Supprimer le paiement
        $payment->delete();
    
        // Récupérer le dernier paiement du client (après suppression)
        $lastPayment = Payment::where('client_id', $clientId)->orderBy('payment_date', 'desc')->first();
    
        if ($lastPayment) {
            // Recalculer la date d'expiration en fonction du dernier paiement
            $newExpirationDate = Carbon::parse($lastPayment->payment_date)->addMonths($lastPayment->plan->duration);
        } else {
            // Aucun paiement restant, donc expiration immédiate
            $newExpirationDate = Carbon::now();
        }
    
        // Mettre à jour la date d'expiration du client
        Client::where('id', $clientId)->update(['subscription_expired_date' => $newExpirationDate]);
    
        return response()->json(['message' => 'Payment deleted and subscription updated.']);
    }
    

}

