<?php

//include('HorizontalSort.php');
namespace Work;
//use Work\MySort;

class VerticalSort extends MySort
{
	
	public function sort_arr()
	{
		$this->type = "vertical";
		
		//$this->output(array_chunk($this->arr, $this->columns));
		//echo '<b>До вертикального сортування</b> </br> <i>Розмірність матриці: '. $this->rows .' * ' .$this->columns . '</i></br>';
		//$this->output($this->arrToMatrix($this->arr, $this->rows, $this->columns));
		
		$this->arr = $this->my_sort($this->arr);
		
		for($i = 0; $i < $this->columns; $i++)
		{
			for($j = 0; $j < $this->rows; $j++)
			{
				$this->arr_sort[$i+$j*$this->columns] = $this->arr[$i*$this->rows+$j];
			}
		}
		 //$this->output(array_chunk($this->arr_sort, $this->columns));
		 echo '<b> Після вертикального сортування</b> </br>';
		 $this->output($this->arrToMatrix($this->arr_sort, $this->rows, $this->columns));
	}
}
?>
