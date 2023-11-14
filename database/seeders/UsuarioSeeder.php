<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name'=>'adm',
            'email'=>'adm@mail.com',
            'password'=>bcrypt('123123'),
        ];

        if(User::where('email', '=', $dados['email'])->count()){
            $usuario = User::where('email', '=', $dados['email'])->first();
            $usuario->update($dados);
            echo "usuario alterado";
        }else{
            User::create($dados);
            echo "usuario criado";
        }
    }
}
