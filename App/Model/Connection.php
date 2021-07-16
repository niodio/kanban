<?php

namespace App\Model;

use \PDO;
use \PDOException;

require 'Config.php';

class Connection
{
	private $pdo;

	public function __construct()
	{
		try {
			$this->pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DATABASE, USER, PASS);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo "Conectado com sucesso.";
		} catch (PDOException $e) {
			echo "<h1>Ops, algo deu errado: " . $e->getMessage() . "</h1>";
			echo "<pre>";
			echo print_r($e);
		}
	}
	// return Connection
	public function returnConnection()
	{
		return $this->pdo;
	}
}
