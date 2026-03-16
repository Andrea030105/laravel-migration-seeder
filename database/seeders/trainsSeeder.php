<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class trainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            [
                'azienda'           => 'Trenitalia',
                'stazione_partenza' => 'Roma Termini',
                'stazione_arrivo'   => 'Milano Centrale',
                'orario_partenza'   => '06:00:00',
                'orario_arrivo'     => '09:25:00',
                'codice_treno'      => 'FR9600',
                'numero_carrozze'   => 11,
                'in_orario'         => true,
                'cancellato'        => false,
                'data_partenza'     => '2026-03-16',
                'data_arrivo'       => '2026-03-16',
            ],
            [
                'azienda'           => 'Trenitalia',
                'stazione_partenza' => 'Milano Centrale',
                'stazione_arrivo'   => 'Napoli Centrale',
                'orario_partenza'   => '07:30:00',
                'orario_arrivo'     => '11:05:00',
                'codice_treno'      => 'FR9610',
                'numero_carrozze'   => 11,
                'in_orario'         => false,
                'cancellato'        => false,
                'data_partenza'     => '2026-03-14',
                'data_arrivo'       => '2026-03-14',
            ],
            [
                'azienda'           => 'Italo',
                'stazione_partenza' => 'Torino Porta Nuova',
                'stazione_arrivo'   => 'Roma Termini',
                'orario_partenza'   => '08:15:00',
                'orario_arrivo'     => '12:00:00',
                'codice_treno'      => 'IT8301',
                'numero_carrozze'   => 7,
                'in_orario'         => true,
                'cancellato'        => false,
                'data_partenza'     => '2026-03-16',
                'data_arrivo'       => '2026-03-16',
            ],
            [
                'azienda'           => 'Italo',
                'stazione_partenza' => 'Roma Termini',
                'stazione_arrivo'   => 'Venezia Santa Lucia',
                'orario_partenza'   => '09:45:00',
                'orario_arrivo'     => '14:10:00',
                'codice_treno'      => 'IT8450',
                'numero_carrozze'   => 7,
                'in_orario'         => true,
                'cancellato'        => false,
                'data_partenza'     => '2026-03-15',
                'data_arrivo'       => '2026-03-15',
            ],
            [
                'azienda'           => 'Trenitalia',
                'stazione_partenza' => 'Firenze SMN',
                'stazione_arrivo'   => 'Bologna Centrale',
                'orario_partenza'   => '10:00:00',
                'orario_arrivo'     => '10:37:00',
                'codice_treno'      => 'FR9620',
                'numero_carrozze'   => 9,
                'in_orario'         => false,
                'cancellato'        => true,
                'data_partenza'     => '2026-03-16',
                'data_arrivo'       => '2026-03-16',
            ],
            [
                'azienda'           => 'Trenitalia',
                'stazione_partenza' => 'Bologna Centrale',
                'stazione_arrivo'   => 'Venezia Santa Lucia',
                'orario_partenza'   => '11:20:00',
                'orario_arrivo'     => '13:05:00',
                'codice_treno'      => 'IC700',
                'numero_carrozze'   => 8,
                'in_orario'         => true,
                'cancellato'        => false,
                'data_partenza'     => '2026-03-13',
                'data_arrivo'       => '2026-03-13',
            ],
            [
                'azienda'           => 'Italo',
                'stazione_partenza' => 'Napoli Centrale',
                'stazione_arrivo'   => 'Milano Centrale',
                'orario_partenza'   => '12:00:00',
                'orario_arrivo'     => '15:45:00',
                'codice_treno'      => 'IT8502',
                'numero_carrozze'   => 7,
                'in_orario'         => true,
                'cancellato'        => false,
                'data_partenza'     => '2026-03-16',
                'data_arrivo'       => '2026-03-16',
            ],
            [
                'azienda'           => 'Trenitalia',
                'stazione_partenza' => 'Roma Termini',
                'stazione_arrivo'   => 'Firenze SMN',
                'orario_partenza'   => '13:30:00',
                'orario_arrivo'     => '14:55:00',
                'codice_treno'      => 'FR9630',
                'numero_carrozze'   => 11,
                'in_orario'         => false,
                'cancellato'        => false,
                'data_partenza'     => '2026-03-12',
                'data_arrivo'       => '2026-03-12',
            ],
            [
                'azienda'           => 'Italo',
                'stazione_partenza' => 'Venezia Santa Lucia',
                'stazione_arrivo'   => 'Torino Porta Nuova',
                'orario_partenza'   => '14:50:00',
                'orario_arrivo'     => '18:30:00',
                'codice_treno'      => 'IT8610',
                'numero_carrozze'   => 7,
                'in_orario'         => true,
                'cancellato'        => false,
                'data_partenza'     => '2026-03-16',
                'data_arrivo'       => '2026-03-16',
            ],
            [
                'azienda'           => 'Trenitalia',
                'stazione_partenza' => 'Milano Centrale',
                'stazione_arrivo'   => 'Roma Termini',
                'orario_partenza'   => '16:00:00',
                'orario_arrivo'     => '19:25:00',
                'codice_treno'      => 'FR9650',
                'numero_carrozze'   => 11,
                'in_orario'         => false,
                'cancellato'        => true,
                'data_partenza'     => '2026-03-10',
                'data_arrivo'       => '2026-03-10',
            ],
        ];


        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->azienda = $train['azienda'];
            $newTrain->stazione_partenza = $train['stazione_partenza'];
            $newTrain->stazione_arrivo = $train['stazione_arrivo'];
            $newTrain->orario_arrivo = $train['orario_arrivo'];
            $newTrain->orario_partenza = $train['orario_partenza'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->numero_carrozze = $train['numero_carrozze'];
            $newTrain->in_orario = $train['in_orario'];
            $newTrain->cancellato = $train['cancellato'];
            $newTrain->data_partenza = $train['data_partenza'];
            $newTrain->data_arrivo = $train['data_arrivo'];


            $newTrain->save();
        }
    }
}
