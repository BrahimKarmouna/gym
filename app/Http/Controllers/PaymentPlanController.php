<?php

namespace App\Http\Controllers;

use App\Models\PaymentPlan;

use Illuminate\Http\Request;

class PaymentPlanController extends Controller
{
    public function index()
    {
    //using api 
    $plans = PaymentPlan::all();
    return response()->json($plans);
    }
}
