<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Criteri;
use App\Models\Modul;
use App\Models\Ra;
use App\Models\Uf;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Modul::create([
            'name' => 'M.03 Programació',
            'description' => '',
            'hours' => 30,
        ]);
        Uf::create([
            'name' => 'UF1 Introducció a Java',
            'description' => '',
            'hours' => 10,
            'modul_id' => 1,
        ]);
        Ra::create([
            'name' => 'RA1 Sobre Java',
            'description' => '',
            'uf_id' => 1,
        ]);
        Ra::create([
            'name' => 'RA2 Variables',
            'description' => '',
            'uf_id' => 1,
        ]);
        Ra::create([
            'name' => 'RA3 Condicionals',
            'description' => '',
            'uf_id' => 1,
        ]);        
        Uf::create([
            'name' => 'UF2 Programació estructurada',
            'description' => '',
            'hours' => 10,
            'modul_id' => 1,
        ]);
        Ra::create([
            'name' => 'RA1 Vectors',
            'description' => '',
            'uf_id' => 2,
        ]);
        Ra::create([
            'name' => 'RA2 Matrius',
            'description' => '',
            'uf_id' => 2,
        ]);
        Uf::create([
            'name' => 'UF3 Gestió de fitxers',
            'description' => '',
            'hours' => 10,
            'modul_id' => 1
        ]);
        Ra::create([
            'name' => 'RA1 Crear i eliminar fitxers',
            'description' => '',
            'uf_id' => 3,
        ]);
        Ra::create([
            'name' => 'RA2 Sobreescriure fitxers',
            'description' => '',
            'uf_id' => 3,
        ]);
        Modul::create([
            'name' => 'M.05 Entorns de desenvolupament',
            'description' => '',
            'hours' => 30,
        ]);
        Uf::create([
            'name' => 'UF1 Disseny orientat a objectes',
            'description' => '',
            'hours' => 10,
            'modul_id' => 2,
        ]);
        Ra::create([
            'name' => 'RA1 Introducció a UML',
            'description' => '',
            'uf_id' => 4,
        ]);
        Ra::create([
            'name' => 'RA2 Més diagrames UML',
            'description' => '',
            'uf_id' => 4,
        ]);        
        Uf::create([
            'name' => 'UF2 Optimització de programari',
            'description' => '',
            'hours' => 20,
            'modul_id' => 2,
        ]);
        Ra::create([
            'name' => 'RA1 Test unitaris',
            'description' => '',
            'uf_id' => 5,
        ]);
        Modul::create([
            'name' => 'M.06 Desenvolupament en entorn client',
            'description' => '',
            'hours' => 20,
        ]);
        Uf::create([
            'name' => 'UF1 Introducció a JavaScript',
            'description' => '',
            'hours' => 10,
            'modul_id' => 3,
        ]);
        Ra::create([
            'name' => 'RA1 Sobre JavaScript',
            'description' => '',
            'uf_id' => 6,
        ]);
        Ra::create([
            'name' => 'RA2 Variables',
            'description' => '',
            'uf_id' => 6,
        ]);
        Ra::create([
            'name' => 'RA3 Condicionals',
            'description' => '',
            'uf_id' => 6,
        ]);
        Ra::create([
            'name' => 'RA4 Funcions',
            'description' => '',
            'uf_id' => 6,
        ]);
        Modul::create([
            'name' => 'M.07 Desenvolupament en entorn servidor',
            'description' => '',
            'hours' => 30,
        ]);
        Uf::create([
            'name' => 'UF1 Introducció a PHP',
            'description' => '',
            'hours' => 15,
            'modul_id' => 4,
        ]);
        Ra::create([
            'name' => 'RA1 Sobre PHP',
            'description' => '',
            'uf_id' => 7,
        ]);
        Ra::create([
            'name' => 'RA2 Variables',
            'description' => '',
            'uf_id' => 7,
        ]);
        Ra::create([
            'name' => 'RA3 Condicionals',
            'description' => '',
            'uf_id' => 7,
        ]);
        Ra::create([
            'name' => 'RA4 Formularis',
            'description' => '',
            'uf_id' => 7,
        ]);
        Uf::create([
            'name' => 'UF2 Accés a BD',
            'description' => '',
            'hours' => 15,
            'modul_id' => 4,
        ]);
        Ra::create([
            'name' => 'RA1 Connectar-se a una BD',
            'description' => '',
            'uf_id' => 8,
        ]);
        Ra::create([
            'name' => 'RA2 Consultar dades de la BD',
            'description' => '',
            'uf_id' => 8,
        ]);
        Ra::create([
            'name' => 'RA3 Modificar dades de la BD',
            'description' => '',
            'uf_id' => 8,
        ]);
        Ra::create([
            'name' => 'RA4 Eliminar dades de la BD',
            'description' => '',
            'uf_id' => 8,
        ]);
        Ra::create([
            'name' => 'RA5 CRUD',
            'description' => '',
            'uf_id' => 8,
        ]);        
    }
}
