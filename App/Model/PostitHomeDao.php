<?php

namespace App\Model;

use App\Model\Connection;
use PDO;
use PDOException;

require 'Connection.php';

// Classe responsavel pelo crud

class PostitHomeDao
{
	public $conecta;

	public function __construct()
	{
		//Cria a instancia da conexao
		$this->conecta = new Connection();
	}

	public function create()
	{
		// try {
		// 	$stmt = $this->conn->prepare('INSERT INTO minhaTabela (nome) VALUES(:nome)');
		// 	$stmt->execute(array(
		// 		':nome' => 'Ricardo Arrigoni'
		// 	));

		// 	echo $stmt->rowCount();
		// } catch (PDOException $e) {
		// 	echo 'Error: ' . $e->getMessage();
		// }
	}

	public function read()
	{
		//$conecta = new Connection();
		$objPdo = $this->conecta->returnConnection();

		try {
			$stmt = $objPdo->prepare("SELECT * FROM tbl_kanban;");

			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_OBJ);

			$objPostit = new Postit($row);
			return $objPostit;


			//  foreach ($row = $stmt->fetch(PDO::FETCH_OBJ) as $key => $value) {
			//  	echo "<br>$key: $value<br><hr>";
			//  }
			// var_dump($row);

		} catch (PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		}
	}


	public function update()
	{
		// code...
	}

	public function delete($id)
	{
		// code...
	}
}

echo $conn;
$e = new PostitHomeDao();
$e->read();
