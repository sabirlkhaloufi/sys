
@extends("layouts.dashboard.dashlayout")

@section("content")
<div class="container-xl">
	<div class="table-responsive">

        <div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Details  <b>Annonces</b></h2>
					</div>
					<div class="col-sm-6">


                        <a href="{{ route('post.create') }}" class="btn btn-success" >
                            <i class="material-icons" >add</i> <span class="bold-text">Add  new post</span>
                        </a>





					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>

                            <!-- Vous pouvez ajouter une colonne pour la sélection ici si nécessaire -->
                            <th>image</th>
                            <th>titre</th>
                            <th>description</th>
                            <th>email</th>
                            <th>localisation</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($post as $post)

                        <tr>

                            <!-- Vous pouvez ajouter une colonne pour la sélection ici si nécessaire -->

                            <td>{{ $post->image }}</td>
                            <td>{{ $post->titre }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->email}}</td>
                            <td>{{ $post->localisation }}</td>
                            <td>

                                <div class="d-flex align-items-center">
                                    <a href="{{ route('post.edit', $post->id) }}" class="mr-2">
                                        <i class="material-icons" style="color: orange;">edit</i> <!-- Utilisation de l'icône "edit" avec couleur orange -->
                                    </a>

                                    <a href="{{ route('post.destroy', $post->id) }}" onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this post?')) {document.getElementById('delete-form-{{ $post->id }}').submit();}" class="mr-2">
                                        <i class="material-icons text-danger">delete</i> <!-- Utilisation de l'icône "delete" -->
                                    </a>

                                    <form id="delete-form-{{ $post->id }}" action="{{ route('post.destroy', $post->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>



                            </td>

                        </tr>

                    @endforeach

			</table>

		</div>
	</div>
</div>
@endsection