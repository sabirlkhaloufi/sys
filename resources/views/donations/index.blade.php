@extends("layouts.dashboard.dashlayout")

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">

                <div class="card-header text-white bg-primary">
                    <strong style="font-size: 22px">Montant du don</strong>

                </div>
                <div class="table-responsive">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <!-- You can add a column for selection here if needed -->
                                <th>Nom et Prénom</th>
                                <th>Email</th>
                                <th>Montant du Don</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donations as $donation)
                                <tr>
                                    <td>{{ $donation->nom_prenom }}</td>
                                    <td>{{ $donation->email }}</td>
                                    <td>{{ $donation->montant_don }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('donations.show', $donation->id) }}" class="btn btn-info text-white btn-sm me-2">
                                                View details
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="card-body">
                        {{ $donations->links() }}
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection

@section('css')
    <link href="{{ asset('css/don.css') }}" rel="stylesheet">
@endsection
