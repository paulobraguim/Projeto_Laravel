<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();

        $fornecedor->nome = "Fornecedor 100";
        $fornecedor->site = "fornecedor100.com.br";
        $fornecedor->uf = "SP";
        $fornecedor->email = "contato@fornecedor100.com.br";

        $fornecedor->save();

    }
}
