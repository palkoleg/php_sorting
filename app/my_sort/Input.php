<?php
namespace Work;
//use Work\MySort;
//include ('DiagonalSort.php');

class Input extends MySort
{
	public function sort_arr()
	{
		$this->type = "input";
		echo 'Кількість елементів: ' . $this->length.'</br> <i>Розмірність матриці: '. $this->rows .' * ' .$this->columns . '</i></br>';
	}
}

?>
