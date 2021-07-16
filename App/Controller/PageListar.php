<?php

namespace App\Controller\Pages;

use App\Model\PostitHomeDao;

$objItemDao = new PostitHomeDao();
$objItemDao->read();


// SOLICITACAO(CONTROLER-LISTAR quer trata o $_POST) >> 
// ItemDao(recebe a solicitação, solicita para a DB e retorna para o controler) >>
// Controler envia para a View
