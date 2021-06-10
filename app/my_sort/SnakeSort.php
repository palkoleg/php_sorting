<?php

//include ('InverseSnailSort.php');
namespace Work;
//use Work\MySort;

class SnakeSort extends MySort
{

	public function sort_arr()
	{
		$this->type = "snake";
		
		/*echo '<b>До сортування змійкою </b> </br> <i>Розмірність матриці: '. $this->rows .' * ' .$this->columns . '</i></br>';
		$this->output($this->arrToMatrix($this->arr, $this->rows, $this->columns));*/
		
		$this->arr = $this->my_sort($this->arr);
		
		$this->arr_sort = $this->arrToMatrix($this->arr, $this->rows, $this->columns);
		
		for($i = 0; $i < $this->rows; $i++)
		{
			for($j = 0; $j < $this->columns; $j++)
			{
				if(($i+1)%2 == 0)
				{
					$this->arr_sort[$i]= $this->my_rsort($this->arr_sort[$i]);
				}
			}
		}
		echo '<b> Після сортування змійкою </b> </br>';
		 $this->output($this->arr_sort);
	}
}
?>
