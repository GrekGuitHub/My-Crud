<div class="container mt-5">
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead class="thead-dark">
                <tr>
                    <th>ID <i class="fas fa-sort"></i></th>
                    <th>Titre <i class="fas fa-sort"></i></th>
                    <th>Publié le <i class="fas fa-sort"></i></th>
                    <th>Publié par <i class="fas fa-sort"></i></th>
                    <th>Extension <i class="fas fa-sort"></i></th>
                    <th>Type de document <i class="fas fa-sort"></i></th>
                    <th>Etat <i class="fas fa-sort"></i></th>
                    <th>Description <i class="fas fa-sort"></i></th>
                    <th>Nombre de vue <i class="fas fa-sort"></i></th>
                    <th>Fichier<i class="fas fa-sort"></i></th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobs ?? [] as $job)
                    <tr>
                        <td class="text-center">{{ $job->id }}</td>
                        <td>{{ $job->titre }}</td>
                        <td>{{ $job->publie_le }}</td>
                        <td>{{ $job->publie_par }}</td>
                        <td>{{ $job->extension }}</td>
                        <td>{{ $job->type_document }}</td>
                        <td>
                            @if ($job->etat == 'actif')
                                <span class="badge bg-success">Publié</span>
                            @else
                                <span class="badge bg-danger">Non publié</span>
                            @endif
                        </td>
                        <td>{{ $job->description }}</td>
                        <td class="text-right">{{ $job->nombre_vue }}</td>
                        <td>
                            @if ($job->fichier)
                                <a href="{{ route('job.download' , $job->id) }}" target="_blank"
                                    class="btn btn-sm btn-primary">Télécharger</a>
                            @else
                                Pas de fichier
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-sm btn-warning btn-custom btn-warning-custom" href="{{route('job.edit', ['id'=>$job->id])}}"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier ce document">
                                <i class="fas fa-edit"></i> Modifier
                            </a>
                            <a class="btn btn-sm btn-danger btn-custom btn-danger-custom" data-id="{{ $job->id }}" href="#"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Supprimer ce document">
                                <i class="fas fa-trash-alt"></i> Supprimer
                            </a>

                        </td>
                    </tr>
                @endforeach
            </tbody>

            <tfoot>
                <tr>
                    <th>ID <i class="fas fa-sort"></i></th>
                    <th>Titre <i class="fas fa-sort"></i></th>
                    <th>Publié le <i class="fas fa-sort"></i></th>
                    <th>Publié par <i class="fas fa-sort"></i></th>
                    <th>Extension <i class="fas fa-sort"></i></th>
                    <th>Type de document <i class="fas fa-sort"></i></th>
                    <th>Etat <i class="fas fa-sort"></i></th>
                    <th>Description <i class="fas fa-sort"></i></th>
                    <th>Nombre de vue <i class="fas fa-sort"></i></th>
                    <th>Fichier<i class="fas fa-sort"></i></th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<style>
    .table-responsive {
        overflow-x: auto;
    }

    table {
        border-collapse: separate;
        border-spacing: 0 10px;
        /* Espacement entre les lignes */
    }

    table tbody tr:hover {
        background-color: #f5f5f5;
    }

    .btn-custom {
        border-radius: 25px;
        font-weight: bold;
    }

    .btn-warning-custom {
        background-color: #ffc107;
        border-color: #ffc107;
        color: #fff;
    }

    .btn-warning-custom:hover {
        background-color: #e0a800;
        border-color: #d39e00;
    }

    .btn-danger-custom {
        background-color: #dc3545;
        border-color: #dc3545;
        color: #fff;
    }

    .btn-danger-custom:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.btn-danger-custom').forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();

                let id = this.getAttribute('data-id');
                if (confirm('Êtes-vous sûr de vouloir supprimer ce document?')) {
                    fetch(`/job/${id}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert(data.success);
                            location.reload();
                        } else {
                            alert(data.error);
                        }
                    })
                    .catch(error => console.error('Error:', error));
                }
            });
        });
    });
</script>
