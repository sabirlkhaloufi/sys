<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::paginate(10); // Vous pouvez ajuster le nombre par page selon vos besoins
        return view('donations.index', compact('donations'));
    }

    public function create()
    {
        return view("donations.create");
    }

    public function store(Request $request)
    {
        // Règles de validation
        $rules = [
            'nom_prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'adresse' => 'required|string|max:255',
            'tel' => 'required|string|max:20',
            'ville' => 'required|string|max:255',
            'etat' => 'required|string|max:255',
            'pays' => 'required|string|max:255',
            'montant_don' => 'required|string|max:10',
            'code_postal' => 'required|string|max:10',
        ];

        // Valider la demande
        $validatedData = $request->validate($rules);

        // Créer le don
       // Assuming $validatedData contains the validated form data including user_id
        $validatedData['user_id']=auth()->user()->id;

       $donation = Donation::create($validatedData);


        // Optionnellement, vous pouvez retourner une réponse ici, rediriger, ou faire autre chose
        // Par exemple, rediriger en arrière avec un message de succès
        return redirect()->back()->with('success', 'Donation créée avec succès!');
    }

    // Méthode pour afficher un don unique
    public function show($id)
    {
        $donation = Donation::findOrFail($id);
        return view('donations.show', compact('donation'));
    }

    // Méthode pour supprimer un don
    public function destroy($id)
    {
        $donation = Donation::findOrFail($id);
        $donation->delete();
        return redirect()->route("donations.index")->with('success', 'Donation supprimée avec succès!');
    }
}
