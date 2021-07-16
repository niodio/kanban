<?php

namespace App\Model;

use App\Model\Connection;
use PDO;
use PDOException;

require 'Connection.php';

class ItemDao
{
	public $conn;

	public function __construct()
	{
		//Cria a instancia da conexao
		$this->conn = new Connection();
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
		$conecta = new Connection();
		$objPdo = $conecta->returnConnection();

		try {
			//$consulta = $objPdo->query("SELECT * FROM tbl_kanban;");

			$stmt = $objPdo->prepare("SELECT * FROM tbl_kanban;");

			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_OBJ);

			$objItem = new Item($row);

			return $objItem;
			// foreach ($row = $stmt->fetch(PDO::FETCH_OBJ) as $key => $value) {
			// 	echo "<br>$key: $value<br><hr>";
			// }

			//var_dump($row);

			// while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			// 	print_r($row =);
			// 	echo '<br><hr>';
			// }

			// while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
			// 	echo "<br><br>Nome: {$linha['titulo']} - Usuário: {$linha['descricao']}<br />";
			// }
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
$e = new ItemDao();
$e->read();
