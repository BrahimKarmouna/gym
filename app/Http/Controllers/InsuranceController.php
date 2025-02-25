<?php
namespace App\Http\Controllers;

use App\Models\InsurancePlan;
use App\Models\Insurance;
use App\Models\Client;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    // Insurance Plans Methods

    // Get all insurance plans
    public function index()
    {
        $Insurance = Insurance::all();
        return response()->json($Insurance);
    }

    //     // Get a specific insurance plan
//     public function getPlanById($id)
//     {
//         $plan = InsurancePlan::findOrFail($id);
//         return response()->json($plan);
//     }

    // Store a new insurance plan
    public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'insurance_plan_id' => 'required|exists:insurance_plans,id',
            'payment_date' => 'required|date',
            'expiry_date' => 'required|date',
        ]);

        $Insurance = Insurance::create($request->all());
        return response()->json($Insurance, 201);
    }

    //     // Update an insurance plan
//     public function updatePlan(Request $request, $id)
//     {
//         $plan = InsurancePlan::findOrFail($id);
//         $plan->update($request->all());
//         return response()->json($plan);
//     }

    //     // Delete an insurance plan
//     public function deletePlan($id)
//     {
//         $plan = InsurancePlan::findOrFail($id);
//         $plan->delete();
//         return response()->json(['message' => 'Insurance plan deleted successfully']);
//     }

    //     // Insurance Methods

    //     // Get all insurances (with client details)
//     public function index()
//     {
//         $insurances = Insurance::with('client', 'plan')->get();
//         return response()->json($insurances);
//     }

    //     // Get a specific insurance (for a client and associated plan)
//     public function show($id)
//     {
//         $insurance = Insurance::with('client', 'plan')->findOrFail($id);
//         return response()->json($insurance);
//     }

    //     // Store new insurance (create a new record for a client)
//     public function store(Request $request)
//     {
//         $request->validate([
//             'client_id' => 'required|exists:clients,id',
//             'insurance_plan_id' => 'required|exists:insurance_plans,id',
//             'payment_date' => 'required|date',
//             'expiry_date' => 'required|date',
//         ]);

    //         $insurance = Insurance::create([
//             'client_id' => $request->client_id,
//             'insurance_plan_id' => $request->insurance_plan_id,
//             'payment_date' => $request->payment_date,
//             'expiry_date' => $request->expiry_date,
//         ]);

    //         return response()->json($insurance, 201);
//     }

    //     // Update an insurance record
//     public function update(Request $request, $id)
//     {
//         $insurance = Insurance::findOrFail($id);
//         $insurance->update($request->all());
//         return response()->json($insurance);
//     }

    //     // Delete an insurance record
//     public function destroy($id)
//     {
//         $insurance = Insurance::findOrFail($id);
//         $insurance->delete();
//         return response()->json(['message' => 'Insurance deleted successfully']);
//     }
// }
}
