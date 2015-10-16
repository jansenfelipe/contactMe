<?php

namespace App;

class NotificarPombo implements NotificacaoInterface
{
    public function notificar(){
    	/*
    	 * Um código muito legal que envia um pombo
    	 */
    	echo "Enviando o Pombo..";
    }
}