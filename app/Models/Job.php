<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre', 'publie_le', 'publie_par', 'extension', 'type_document', 'nombre_vue', 'description', 'fichier', 'etat'
    ];
}
