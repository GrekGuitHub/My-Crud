<?php

namespace Database\Factories;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Générer un nom de fichier unique avec une extension aléatoire
        $fileName = $this->faker->word . '.' . $this->faker->fileExtension;

        // Enregistrer un fichier fictif dans le répertoire 'documents' du stockage public
        Storage::makeDirectory('public/documents'); // Assurez-vous que le répertoire existe
        $filePath = 'public/documents/' . $fileName;
        $uploadedFile = $this->faker->image(); // Génère un fichier image fictif
        Storage::putFile($filePath, $uploadedFile);

        return [
            'titre' => $this->faker->sentence,
            'publie_le' => $this->faker->date,
            'publie_par' => $this->faker->name,
            'extension' => $this->faker->randomElement(['pdf', 'doc', 'xlxs', 'png', 'jpg']),
            'type_document' => $this->faker->word,
            'etat' => $this->faker->boolean,
            'description' => $this->faker->paragraph,
            'nombre_vue' => $this->faker->numberBetween(0, 1000),
            'fichier' => $filePath, // Chemin vers le fichier généré
        ];
    }
}
