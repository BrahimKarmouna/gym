<?php

namespace App\Http\Controllers;

use App\Models\Client;

use Illuminate\Http\Request;

class ClientController extends Controller
{
  

    // index 

    public function index()
    {
        $clients = Client::all()->map(function ($client) {
            $phone = $client->phone;
    
            if ($phone) {
                // Remove all non-numeric characters
                $phone = preg_replace('/\D/', '', $phone);
    
                // Example: Format as "+212 6XX-XXX-XXX" (for Moroccan numbers)
                if (strlen($phone) === 10 && substr($phone, 0, 1) === '0') {
                    $phone = '+212 ' . substr($phone, 1, 1) . substr($phone, 2, 3) . '-' . substr($phone, 5, 3) . '-' . substr($phone, 8, 2);
                }
            }
    
            $client->phone = $phone; 
            return $client;
        });
    
        return $clients;
    }
    
    // post 

    public function store(Request $request)
    {
        $request->validate([
            'Full_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'address' => 'required|string|max:255',
            'id_card_picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'client_picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'email' => 'required|email|unique:clients,email',
            'phone' => 'nullable|string|max:20 ',
        ]);
    
        // Stocker les images dans public/clients
        $idCardPath = $request->file('id_card_picture')->store('clients', 'public');
        $clientPicPath = $request->file('client_picture')->store('clients', 'public');
    
        $client = Client::create([
            'gym_id' => $request->gym_id,
            'Full_name' => $request->Full_name,
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
            'id_card_picture' => $idCardPath,
            'client_picture' => $clientPicPath,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
    
        return response()->json(['message' => 'Client enregistré avec succès!', 'client' => $client]);
    }
//function show
public function show($id)
{
    $client = Client::find($id);

    if (!$client) {
        return response()->json(['message' => 'Client introuvable'], 404);
    }

    // Formatage du numéro de téléphone
    $phone = $client->phone;
    if ($phone) {
        $phone = preg_replace('/\D/', '', $phone);
        if (strlen($phone) === 10 && substr($phone, 0, 1) === '0') {
            $phone = '+212 ' . substr($phone, 1, 1) . substr($phone, 2, 3) . '-' . substr($phone, 5, 3) . '-' . substr($phone, 8, 2);
        }
    }
    $client->phone = $phone;

    return response()->json($client);
}
public function update(Request $request, $id)
{
    $client = Client::find($id);

    if (!$client) {
        return response()->json(['message' => 'Client introuvable'], 404);
    }

    // Validation des champs
    $request->validate([
        'Full_name' => 'required|string|max:255',
        'date_of_birth' => 'required|date',
        'address' => 'required|string|max:255',
        'id_card_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'client_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'email' => 'required|email|unique:clients,email,' . $id,
        'phone' => 'nullable|string|max:20',
        'gym_id' => 'required|integer',
    ]);

    // Mise à jour des champs texte
    $client->update([
        'Full_name' => $request->Full_name,
        'date_of_birth' => $request->date_of_birth,
        'address' => $request->address,
        'email' => $request->email,
        'phone' => $request->phone,
        'gym_id' => $request->gym_id,
    ]);

    // Mise à jour de l'image de la carte d'identité si une nouvelle image est envoyée
    if ($request->hasFile('id_card_picture')) {
        $idCardPath = $request->file('id_card_picture')->store('clients', 'public');
        $client->id_card_picture = $idCardPath;
    }

    // Mise à jour de l'image du client si une nouvelle image est envoyée
    if ($request->hasFile('client_picture')) {
        $clientPicPath = $request->file('client_picture')->store('clients', 'public');
        $client->client_picture = $clientPicPath;
    }

    $client->save();

    return response()->json(['message' => 'Client mis à jour avec succès!', 'client' => $client]);
}

}