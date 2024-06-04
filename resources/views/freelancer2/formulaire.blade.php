<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Formulaire de document</title>
    <style>
        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
<div class="container mt-5 card p-3">
    <form action="{{ isset($job) ? route('job.update', $job->id) : route('job.save') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($job))
            @method('PUT')
        @endif
        <div class="row">
            <div class="form-group col-md-6">
                <label for="titre">Titre :</label>
                <input type="text" class="form-control" id="titre" name="titre" value="{{ isset($job) ? $job->titre : '' }}">
            </div>
            <div class="form-group col-md-6">
                <label for="publie_le">Publié le :</label>
                <input type="date" class="form-control" id="publie_le" name="publie_le" value="{{ isset($job) ? $job->publie_le : '' }}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="publie_par">Publié par :</label>
                <input type="text" class="form-control" id="publie_par" name="publie_par" value="{{ isset($job) ? $job->publie_par : '' }}">
            </div>
            <div class="form-group col-md-6">
                <label for="extension">Extension :</label>
                <select class="form-control" id="extension" name="extension">
                    <option value="pdf" {{ (isset($job) && $job->extension == 'pdf') ? 'selected' : '' }}>PDF</option>
                    <option value="doc" {{ (isset($job) && $job->extension == 'doc') ? 'selected' : '' }}>DOC</option>
                    <option value="xlxs" {{ (isset($job) && $job->extension == 'xlxs') ? 'selected' : '' }}>XLXS</option>
                    <option value="png" {{ (isset($job) && $job->extension == 'png') ? 'selected' : '' }}>PNG</option>
                    <option value="jpg" {{ (isset($job) && $job->extension == 'jpg') ? 'selected' : '' }}>JPG</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="type_document">Type de document :</label>
                <input type="text" class="form-control" id="type_document" name="type_document" value="{{ isset($job) ? $job->type_document : '' }}">
            </div>
            <div class="form-group col-md-6">
                <label for="nombre_vue">Nombre de vues :</label>
                <input type="number" class="form-control" id="nombre_vue" name="nombre_vue" value="{{ isset($job) ? $job->nombre_vue : '' }}">
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description :</label>
            <textarea class="form-control" id="description" name="description">{{ isset($job) ? $job->description : '' }}</textarea>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="fichier">Fichier :</label>
                <input type="file" class="form-control" id="fichier" name="fichier">
            </div>
            <div class="form-group col-md-6 form-check align-self-end">
                <input type="checkbox" class="form-check-input" id="etat" name="etat" value="1" {{ (isset($job) && $job->etat == 1) ? 'checked' : '' }}>
                <label class="form-check-label" for="etat">État</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-2">
                <button type="reset" class="btn btn-warning w-100">Annuler</button>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">{{ isset($job) ? 'Mise à jour' : 'Enregistrer' }}</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
