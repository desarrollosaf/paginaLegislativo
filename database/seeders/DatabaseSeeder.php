<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\TipoCategoriaIniciativa;
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
        $this->call([
            UserTestSeeder::class,
            SedesSeeder::class,
            PartidosSeeder::class,
            MunicipiosSeeder::class,
            DistritosSeeder::class,
            LegislaturaSeeder::class,
            GenderSeeder::class,
            DiputadosSeeder::class,
            IntegranteLegislaturaSeeder::class,
            TipoComisionSeeder::class,
            ComisionSeeder::class,
            TipoCargoComisionSeeder::class,
            TipoAutorSeeder::class,
            TipoCategoriaSeeder::class,
            IntegrantesComisionSeeder::class,
            EstatusDiputadoSeeder::class,
            NivelAutorSeeder::class,
        ]);
    }
}
