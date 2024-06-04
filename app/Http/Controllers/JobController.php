<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    //
    public function index()
    {
        return view('job.index');
    }

    public function register()
    {
        return view('register.index1');
    }

    public function admin_next()
    {
        return view('admin.index2');
    }

    public function freelancer_next()
    {
        $jobs = Job::all();
        return view('freelancer.index3', compact('jobs'));
    }

    public function add_freelance()
    {
        return view('freelancer2.index4');
    }

    public function edit($id)
    {
        $job = Job::find($id);
        $jobs = Job::all();
        return view('freelancer2.index4', compact('jobs', 'job'));
    }

    public function delete(string $id)
    {
        $job = Job::find($id);
        // if (!$job) {
        //     return response()->json(['error' => ''], 404);
        // }

        try {
            $job->delete();
            return response()->json(['success' => 'Document supprimé avec succès!']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Une erreur s\'est produite lors de la suppression du document.'], 500);
        }
    }

    public function download($id)
    {
        $job = Job::findOrFail($id);
        if (!$job->fichier) {
            return redirect()->route('freelancer.index4')->with('error', 'Fichier non trouvé!');
        }

        return Storage::download($job->fichier);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'publie_le' => 'required|date',
            'publie_par' => 'required|string|max:255',
            'extension' => 'required|string|in:pdf,doc,xlxs,png,jpg',
            'type_document' => 'required|string|max:255',
            'nombre_vue' => 'required|integer',
            'description' => 'required|string',
            'fichier' => 'required|file',
            'etat' => 'nullable|boolean',
        ]);

        $job = new Job();
        $job->titre = $validatedData['titre'];
        $job->publie_le = $validatedData['publie_le'];
        $job->publie_par = $validatedData['publie_par'];
        $job->extension = $validatedData['extension'];
        $job->type_document = $validatedData['type_document'];
        $job->nombre_vue = $validatedData['nombre_vue'];
        $job->description = $validatedData['description'];
        $job->etat = $validatedData['etat'] ?? 0;

        if ($request->hasFile('fichier')) {
            $path = $request->file('fichier')->store('public/jobs');
            $job->fichier = $path;
        }

        $job->save();

        return redirect()->back()->with('success', 'Document enregistré avec succès!');
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'publie_le' => 'required|date',
            'publie_par' => 'required|string|max:255',
            'extension' => 'required|string|in:pdf,doc,xlxs,png,jpg',
            'type_document' => 'required|string|max:255',
            'nombre_vue' => 'required|integer',
            'description' => 'required|string',
            'fichier' => 'nullable|file',
            'etat' => 'nullable|boolean',
        ]);

        $job = Job::findOrFail($id);
        $job->titre = $validatedData['titre'];
        $job->publie_le = $validatedData['publie_le'];
        $job->publie_par = $validatedData['publie_par'];
        $job->extension = $validatedData['extension'];
        $job->type_document = $validatedData['type_document'];
        $job->nombre_vue = $validatedData['nombre_vue'];
        $job->description = $validatedData['description'];
        $job->etat = $validatedData['etat'] ?? 0;

        if ($request->hasFile('fichier')) {
            $path = $request->file('fichier')->store('public/jobs');
            $job->fichier = $path;
        }

        $job->save();

        return redirect()->back()->with('success', 'Document mis à jour avec succès!');
    }
}
