<?php

//include('MySort.php');
namespace Work;
//use Work\MySort;

class HorizontalSort extends MySort
{
	public function sort_arr()
	{
		$this->type = "horizontal";
		
		/*echo '<b>До горизонтального сортування</b> </br> <i>Розмірність матриці: '. $this->rows .' * ' .$this->columns . '</i></br>';
		$this->output($this->arrToMatrix($this->arr, $this->rows, $this->columns));*/
		
		$this->arr = $this->my_sort($this->arr);
		
		$this->arr_sort = $this->arrToMatrix($this->arr, $this->rows, $this->columns);
		echo '<b> Після горизонтального сортування</b> </br>';
		 $this->output($this->arr_sort);
	}
	}

//$arr = array(5,7,9,4,1,3,2,6,8,10,11,12,15,13,14,16,18,17,20,19);
/*$arr = array(5,7,9,4,1,3,2,6,8,49,50,51,52,53,54,10,43,44,45,46,47,48,11,12,15,13,14,31,32,33,34,35,36,37,38,39,40,41,42,16,18,17,20,19,21,22,23,24,25,26,27,28,29,30);
$hor = new Horizontal_sort($arr,9,6);
$hor -> sort_arr();*/
?>
