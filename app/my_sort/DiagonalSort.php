<?php

//include ('SnakeSort.php');

namespace Work;
//use Work\MySort;

class DiagonalSort extends MySort
{
	public function sort_arr()
	{
		$this->type = "diagonal";
		//echo '<b>До діагонального сортування</b> </br> <i>Розмірність матриці: '. $this->rows .' * ' .$this->columns . '</i></br>';
		//$this->output($this->arrToMatrix($this->arr, $this->rows, $this->columns));
		
		$this->arr = $this->my_sort($this->arr);
		$this->arr_sort = $this->arrToMatrix($this->arr, $this->rows, $this->columns);
		
		$j_Max;
		$i_Min;
		$count_element = 0;	

		$max_num_of_diag = $this->rows + $this->columns - 1;

	for($diag = 0; $diag < $max_num_of_diag; $diag++) 
{	
	  //echo 'diag = ' . ($diag+1) . '</br>';
	  if($diag < $this->rows) 
	  {
		 $i = $diag;	
		 $j = 0;	
	  }
	  else
	  {
		 $i = $this->rows - 1;	
		 $j = $diag - $this->rows + 1;		
	  }
	   //echo 'i = ' . $i . ' j = ' . $j .'</br>';
	  if($diag < $this->columns) {
		 $j_Max = $diag;
		 $i_Min = 0;
	  }
	  else
	  {
		 $j_Max = $this->columns - 1;
	  }
	  
	  while($i >= $i_Min && $j <= $j_Max) 
	  {
		 $this->arr_sort[$i][$j] = $this->arr[$count_element];
		 //echo  'i = ' . $i . ' j = ' . $j . ' ' .$this->arr_sort[$i][$j] . '</br>';
		 $count_element++; 
		 $i--;
		 $j++;
	  }
}
		 echo '<b> Після діагонального сортування</b> </br>';
		 $this->output($this->arr_sort);
	}
}
?>
