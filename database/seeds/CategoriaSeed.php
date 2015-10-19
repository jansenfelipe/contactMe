<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::insert(['nome' => 'Dúvidas', 'descricao' => 'Tire suas dúvidas agora mesmo!']);
        Categoria::insert(['nome' => 'Sugestões', 'descricao' => 'Gostaria de sugerir algo?']);
        Categoria::insert(['nome' => 'Outros', 'descricao' => 'Qualquer outro tipo de assunto']);
    }
}
