<?php

namespace App\Http\Controllers;

use App\Models\annonce;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class annonceController extends Controller
{
    public function index()
    {

        $annonces=annonce::all();
        return response()->view('welcome',compact('annonces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show()
    {
        $annonces=annonce::all();
        return response()->view('home',compact('annonces'));
    }

 /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
        return Validator::make($data, [
            'image' => ['required', 'string', 'max:255'],
            'titre' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'localisation' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Annonce
     */
    protected function create(array $data)
    {
        return Annonce::create([
            'image' => $data['image'],
            'titre' => $data['titre'],
            'description' => $data['description'],
            'localisation' => $data['localisation'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = $this->validator($request->all());

        // If validation fails, return back with errors
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create the Annonce instance
        $this->create($request->all());

        // Redirect back with a success message
        return redirect()->route('home')->with('success', 'Annonce created successfully!');
    }
}
