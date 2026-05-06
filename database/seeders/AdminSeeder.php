<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // ── SUPERADMINISTRADOR ─────────────────────────────
        User::updateOrCreate(
            ['email' => 'sistemas@uptex.edu.mx'],
            [
                'name'       => 'Edurnet Jhaqueline Luna Becerril',
                'password'   => Hash::make('K3ndr@28'),
                'role'       => 'superadmin',
                'is_active'  => true,
                'proceso'    => 'TI',
                'departamento' => 'Sistemas Computacionales',
            ]
        );

        // ── ADMINISTRADOR ──────────────────────────────────
        User::updateOrCreate(
            ['email' => 'gestiondelacalidad@uptex.edu.mx'],
            [
                'name'       => 'María Fernanda Sánchez Carsolio ',
                'password'   => Hash::make('Admin2026!'),
                'role'       => 'admin',
                'is_active'  => true,
                'proceso'    => 'Sistema de Gestión de la Calidad',
                'departamento' => 'Coordinador del SGC',
            ]
        );
    }
}