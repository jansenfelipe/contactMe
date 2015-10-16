<?php

namespace App;

class NotificarFumaca implements NotificacaoInterface
{
    public function notificar(){
    	/*
    	 * Um código muito legal que emite um sinal de fumaça
    	 */
    	echo "Notificando com Fumaça..";
    }
}