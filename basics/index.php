<?php

function dd($data) {
	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
}

/*class Task {
	public $description;
	public $completed = false;
	function __construct($description)
	{
		$this->description = $description;
	}

	public function isComplete()
	{
		return $this->completed;
	}
	public function complete()
	{
		$this->completed = true;
	}
}*/
class Task {
	public $description;
	public $completed = false;
}

try {
	$pdo = new PDO('mysql:host=localhost;dbname=spsdaurm_users','spsdaurm_user','12345');
} catch (PDOException $e) {
	die('Couldn\'t Connect');
}

$statement = $pdo->prepare('select * from names');
$statement->execute();


//$tasks = $statement->fetchAll(PDO::FETCH_OBJ);
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

echo '<ul>';
foreach ($tasks as $key => $value) {

	echo '<li>';

	if ($value->completed) {
		echo '<strike>'.$value->description.'</strike>';
	} else {
		echo $value->description;
	}

	echo '</li>';
}
echo '</ul>';