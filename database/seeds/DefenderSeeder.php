<?php

use Illuminate\Database\Seeder;
use App\User;

class DefenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Criar Grupo admin
//        $admin = Defender::createRole('admin');

        //Acha Grupo
        $admin = Defender::findRole('admin');


        //Criar Permissões
        //  $exemploIndex = Defender::createPermission('exemplo.index', 'Exemplo Index');
        //  $exemploCreate = Defender::createPermission('exemplo.create', 'Exemplo Create');

        //Atribui Permissões ao Grupo Admin
        //   $admin->attachPermission($exemploIndex);
        //   $admin->attachPermission($exemploCreate);

        //Colocar usuario id[1] no grupo admin

        $user = User::find(1);
        $user->attachRole($admin);

    }
}
