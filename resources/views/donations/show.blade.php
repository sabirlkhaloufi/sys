@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Montant du don
            </div>
            <div class="card-body">
                <p><strong>Nom et Prénom:</strong> {{ $donation->nom_prenom }}</p>
                <p><strong>Email:</strong> {{ $donation->email }}</p>
                <p><strong>Adresse:</strong> {{ $donation->adresse }}</p>
                <p><strong>Téléphone:</strong> {{ $donation->tel }}</p>
                <p><strong>Ville:</strong> {{ $donation->ville }}</p>
                <p><strong>État:</strong> {{ $donation->etat }}</p>
                <p><strong>Code Postal:</strong> {{ $donation->code_postal }}</p>
                <p><strong>Pays:</strong> {{ $donation->pays }}</p>
                <p><strong>Montant du Don:</strong> {{ $donation->montant_don }}</p>
            </div>

        </div>
    </div>
</div>
@endsection
