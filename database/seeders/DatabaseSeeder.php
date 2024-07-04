<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Department;
use App\Models\IdentificationType;
use App\Models\Town;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->create([
            "name" => "Administrador",
            "email" => "admin@mail.com",
            "email_verified_at" => now(),
        ]);

        \DB::table("interests")->insert([
            ["name" => "Desarrollo web"],
            ["name" => "Desarrollo móvil"],
            ["name" => "Diseño web"],
            ["name" => "Gestión de servidores"],
            ["name" => "Marketing"],
            ["name" => "SEO"],
        ]);

        \DB::table("skills")->insert([
            ["name" => "Angular"],
            ["name" => "Apache"],
            ["name" => "Css"],
            ["name" => "Cloudflare"],
            ["name" => "JavaScript"],
            ["name" => "Laravel"],
            ["name" => "Nginx"],
            ["name" => "Node"],
            ["name" => "Php"],
            ["name" => "React"],
            ["name" => "Sass"],
            ["name" => "Svelte"],
            ["name" => "Vue"],
        ]);

        //Crea los tipos de identificacion.
        IdentificationType::insert([
            [
                'identification_type' => 'Cédula colombiana',
                'abbreviation' => 'cc',
                'enabled' => true
            ],
            [
                'identification_type' => 'Cédula venezolana',
                'abbreviation' => 'cv',
                'enabled' => true
            ],
            [
                'identification_type' => 'Registro civil de nacimiento',
                'abbreviation' => 'rc',
                'enabled' => true
            ],
            [
                'identification_type' => 'Tarjeta de identidad ',
                'abbreviation' => 'ti',
                'enabled' => true
            ],
            [
                'identification_type' => 'Pasaporte',
                'abbreviation' => 'pa',
                'enabled' => true
            ],
            [
                'identification_type' => 'Cédula de extranjería',
                'abbreviation' => 'ce',
                'enabled' => true
            ],
            [
                'identification_type' => 'Acta de nacimiento',
                'abbreviation' => 'an',
                'enabled' => true
            ],
            [
                'identification_type' => 'Certificado de Nacido Vivo',
                'abbreviation' => 'cnv',
                'enabled' => true
            ],
            [
                'identification_type' => 'Tarjeta de Movilidad Fronteriza',
                'abbreviation' => 'tmf',
                'enabled' => true
            ],
            [
                'identification_type' => 'Permiso especial de permanencia',
                'abbreviation' => 'pep',
                'enabled' => true
            ],
            [
                'identification_type' => 'Permiso por protección temporal',
                'abbreviation' => 'ppt',
                'enabled' => true
            ],
            [
                'identification_type' => 'Permiso de Ingreso y Permanencia',
                'abbreviation' => 'pip',
                'enabled' => true
            ],
            [
                'identification_type' => 'Carnet de la patria',
                'abbreviation' => 'cp',
                'enabled' => false
            ]
        ]);

        Department::insert([
            [
                'department' => 'Norte de Santander',
                'enabled' => true
            ],
            [
                'department' => 'Santander',
                'enabled' => true
            ]
        ]);

        //Crea las ciudades de norte de santander
        $department_id = Department::firstWhere(['department' => 'Norte de Santander'])->id;
        Town::insert([
            [
                'town' => 'Bochalema',
                'department_id' => $department_id,
                'enabled' => true
            ],
            [
                'town' => 'Cácota',
                'department_id' => $department_id,
                'enabled' => true
            ],
            [
                'town' => 'Chitagá',
                'department_id' => $department_id,
                'enabled' => true
            ],
            [
                'town' => 'Chinácota',
                'department_id' => $department_id,
                'enabled' => true
            ],
            [
                'town' => 'Cúcuta',
                'department_id' => $department_id,
                'enabled' => true
            ],
            [
                'town' => 'Cucutilla',
                'department_id' => $department_id,
                'enabled' => true
            ],
            [
                'town' => 'Durania',
                'department_id' => $department_id,
                'enabled' => true
            ],
            [
                'town' => 'Los Patios',
                'department_id' => $department_id,
                'enabled' => true
            ],
            [
                'town' => 'Mutiscua',
                'department_id' => $department_id,
                'enabled' => true
            ],
            [
                'town' => 'Pamplona',
                'department_id' => $department_id,
                'enabled' => true
            ],
            [
                'town' => 'Pamplonita',
                'department_id' => $department_id,
                'enabled' => true
            ],
            [
                'town' => 'Silos',
                'department_id' => $department_id,
                'enabled' => true
            ],
            [
                'town' => 'Villa del Rosario',
                'department_id' => $department_id,
                'enabled' => true
            ]
        ]);

        //Crea las ciudades de santander
        $department_id = Department::firstWhere(['department' => 'Santander'])->id;
        Town::insert([
            [
                'town' => 'Bucaramanga',
                'department_id' => $department_id,
                'enabled' => true
            ],
            [
                'town' => 'Giron',
                'department_id' => $department_id,
                'enabled' => true
            ],
            [
                'town' => 'Piedecuesta',
                'department_id' => $department_id,
                'enabled' => true
            ],
            [
                'town' => 'Floridablanca',
                'department_id' => $department_id,
                'enabled' => true
            ],
            [
                'town' => 'San Gil',
                'department_id' => $department_id,
                'enabled' => true
            ]
        ]);

        \DB::table("affiliation_schemes")->insert([
            ["affiliation_scheme" => "Subsidiado"],
            ["affiliation_scheme" => "Contributivo"],
            ["affiliation_scheme" => "Vinculación"],
            ["affiliation_scheme" => "Otros"],
        ]);

        \DB::table("population_types")->insert([
            ["population_type" => "PCD"],
            ["population_type" => "Desplazado"],
            ["population_type" => "Lactantes"],
            ["population_type" => "Etnia"],
            ["population_type" => "Gestantes"],
            ["population_type" => "Niños"],
            ["population_type" => "Adulto Mayor"],
            ["population_type" => "Adolescentes"],
            ["population_type" => "Victima"],
            ["population_type" => "Ninguna"],
        ]);


    }
}
