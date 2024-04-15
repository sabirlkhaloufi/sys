
@extends("layouts.dashboard.dashlayout")

@section("content")

<div class="card flex-fill">
                  <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mb-0">Annonces</h5>
					<a href="{{ route('post.create') }}" class="btn btn-primary" >
                            <i class="material-icons" >add</i> <span class="bold-text">Add new post</span>
                        </a>
					
                  </div>
                  <table class="table table-hover my-0">
                    <thead>
                      <tr>
						<th class="d-none d-xl-table-cell">image</th>
                            <th class="d-none d-xl-table-cell">titre</th>
                            <th class="d-none d-xl-table-cell">description</th>
                            <th class="d-none d-xl-table-cell">email</th>
                            <th class="d-none d-xl-table-cell">localisation</th>
                            <th class="d-none d-xl-table-cell">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
						
					@foreach ($post as $post)
                      <tr>
                        <td>{{ $post->image }}</td>
                        <td class="d-none d-xl-table-cell">{{ $post->titre }}</td>
                        <td class="d-none d-xl-table-cell">{{ $post->description }}</td>
                        <td><span class="badge bg-success">{{ $post->email}}</span></td>
                        <td class="d-none d-md-table-cell">{{ $post->localisation }}</td>
						<td>

                                <div class="d-flex align-items-center">
                                    <a href="{{ route('post.edit', $post->id) }}" class="mr-2 btn btn-success btn-sm">
                                        <i class="material-icons">edit</i> <!-- Utilisation de l'icône "edit" avec couleur orange -->
                                    </a>

                                    <a href="{{ route('post.destroy', $post->id) }}" onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this post?')) {document.getElementById('delete-form-{{ $post->id }}').submit();}" class="mr-2 btn btn-danger btn-sm">
                                        <i class="material-icons">delete</i> <!-- Utilisation de l'icône "delete" -->
                                    </a>

                                    <form id="delete-form-{{ $post->id }}" action="{{ route('post.destroy', $post->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>



                            </td>
                      </tr>
					  @endforeach
                     
                    </tbody>
                  </table>
                </div>

@endsection