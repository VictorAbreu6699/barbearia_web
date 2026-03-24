<?php

namespace Database\Seeders;

use App\Repositories\RoleRepository;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                "name" => "client",
                "description" => "Usuário que frequentará as barbearias"
            ],
            [
                "name" => "professional",
                "description" => "Usuário que executará os serviços na barbearia"
            ],
            [
                "name" => "owner",
                "description" => "Usuário que fará a gerencia da barbearias"
            ],
            [
                "name" => "admin",
                "description" => "Usuário administrador global do sistema"
            ],
            
        ];

        foreach ($roles as $role) {
            (new RoleRepository)->create($role);
        }
    }
}
