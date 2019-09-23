<?php 
function dd($data) {
	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
}

/**
 * https://laracasts.com/series/php-for-beginners/episodes/12?autoplay=true
 */
class Task {
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
}

$tasks = [
	new Task('Go to the store'),
	new Task('Eat Food'),
	new Task('Chip-chop Bun')
];
//$task->new Task('Live Free');
//$task->isComplete(); //outputs default (false)
//$task->complete(); //calls the method of the class


$tasks[0]->complete();
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