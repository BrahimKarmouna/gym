<?php

namespace App\Http\Controllers;

use App\Models\Insurance;  // Ensure this is imported
use App\Models\InsurancePlan;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    // Get all insurance records (similar to the PaymentController index method)
    public function index()
    {
        $Insurance = Insurance::all();
        return response()->json($Insurance);
    }

    // Store a new insurance record (similar to store method in PaymentController)
    public function store(Request $request)
    {
        // Validation to ensure required fields are present
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'insurance_plan_id' => 'required|exists:insurance_plans,id',
            'payment_date' => 'required|date',
            'expiry_date' => 'required|date',
        ]);

        // Fetch client and plan details
        $client = Client::findOrFail($request->input('client_id'));
        $plan = InsurancePlan::findOrFail($request->input('insurance_plan_id'));

        // Fetch the latest insurance record for the client
        $insurance = Insurance::where('client_id', $client->id)->orderBy('expiry_date', 'desc')->first();
        $insuranceExpiration = $insurance ? Carbon::parse($insurance->expiry_date) : null;

        // Calculate the new expiration date
        if ($insuranceExpiration && $insuranceExpiration->isFuture()) {
            // If the last insurance expiration date is in the future, extend it
            $newInsuranceExpiration = $insuranceExpiration->addMonths($plan->duration);
        } else {
            // Otherwise, use the provided expiry_date and add the plan duration
            $newInsuranceExpiration = Carbon::parse($request->expiry_date)->addMonths($plan->duration);
        }

        // Create the insurance record in the database
        $insurance = Insurance::create([
            'client_id' => $client->id,
            'insurance_plan_id' => $plan->id,
            'payment_date' => Carbon::parse($request->payment_date)->format('Y-m-d'),
            'expiry_date' => $newInsuranceExpiration->format('Y-m-d'),
        ]);

        // Update the client's insurance expiration date
        $client->update(['assurance_expired_date' => $newInsuranceExpiration]);

        // Return a success response with the new expiration date
        return response()->json([
            'message' => 'Insurance saved and expiration date updated.',
            'new_expiration_date' => $newInsuranceExpiration
        ]);
    }
}
