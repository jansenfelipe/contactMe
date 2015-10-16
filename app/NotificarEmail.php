<?php

namespace App;

class NotificarEmail implements NotificacaoInterface
{
    public function notificar(){
    	/*
    	 * Um código muito legal que manda email
    	 */
    	echo "Notificando por email..";
    }
}