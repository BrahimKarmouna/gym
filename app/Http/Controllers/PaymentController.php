<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Payment;
use App\Models\Plan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
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


}
