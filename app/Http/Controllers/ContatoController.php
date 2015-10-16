<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContatoEnviarRequest;
use App\Http\Controllers\Controller;
use App\Contato;
use App\NotificacaoInterface;

class ContatoController extends Controller
{
	/**
     * Exibe o formulário para enviar uma mensagem
     */
    public function index(){
    	return view('welcome');
    }

	/**
     * Insere a mensagem no banco de dados
     */
    public function enviar(ContatoEnviarRequest $request, Contato $contato, NotificacaoInterface $notificar){

		$contato->nome = $request->get('nome');
		$contato->email = $request->get('email');
		$contato->mensagem = $request->get('mensagem');

		$contato->save();

        //Notificando..
        $notificar->notificar();

		echo "Sua mensagem foi armazenada com sucesso! Código: " . $contato->id;
    }

	/**
     * Exibe uma lista com as mensagens cadastradas
     */
    public function lista(){
    	return view('lista', array('contatos' => Contato::all()));
    }
}
