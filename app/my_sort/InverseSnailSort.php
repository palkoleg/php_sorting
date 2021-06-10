<?php

//include ('SnailSort.php');

namespace Work;
//use Work\MySort;

class InverseSnailSort extends MySort
{
	public function sort_arr()
	{
		$this->type = "inverse_snail";
		
		$this->arr = $this->my_rsort($this->arr);
		
		$start_point = 0;
		$new_length = $this->length;
		$new_rows = $this->rows;
		$new_columns = $this->columns;
		$koef = 0;
		
		while($new_length > 1)
		{
		$buff_arr;
		
		for ($i = 0; $i < $new_length; $i++)
		{
			$buff_arr[$i] = $this->arr[$i + $start_point];
			//echo 'buff_arr['.$i.'] = '. $buff_arr[$i]. '</br>';
		}
		
		$right_left = $new_rows -2;
		$top_bottom = $new_columns;
		$center_all = $new_length - (2*$top_bottom + 2*$right_left);
		$center_one_line = $new_columns-2;
		if ($center_one_line != 0)
		{
			$count_lines = $center_all/$center_one_line;
		}
		else
		{
			$count_lines = 'Не ділиться';
		}
		
		/*echo 'Кількість елементів справа і зліва = '. $right_left . '</br>';
		echo 'Кількість елементів зверху і знизу = '. $top_bottom . '</br>';
		echo 'Кількість елементів у центрі загалом = '. $center_all . '</br>';
		echo 'Кількість елементів у одній лінії центру = '. $center_one_line . '</br>';
		echo 'Кількість ліній у центрі = '. $count_lines . '</br>';*/
		
		$right = $new_columns - 1;
		$bottom = ($new_rows - 1)*($new_columns - 1);
		if($count_lines == 'Не ділиться')
				{
					$left = $top_bottom*$right_left;
				}
				else
				{
					$left = $count_lines*$new_columns;
				}
		
		$arr_new;
		
		for ($i = 0; $i < $new_length; $i++)
		{
			$arr_new[$i] = 0;
		}
		
		for ($i = 0; $i < $new_length; $i++)
		{
			if ($i < $top_bottom)
			{
				$arr_new[$i] = $buff_arr[$i];
			}
			else if ($i >= $top_bottom && $i < $top_bottom + $right_left)
			{
				$arr_new[$i+$right] = $buff_arr[$i];
				$right+=$new_columns - 1;
				
			}
			else if ($i >= $top_bottom + $right_left && $i < 2*$top_bottom + $right_left)
			{
				$arr_new[$i+$bottom] = $buff_arr[$i];
				$bottom-=2;
			}
			else if ($i >= 2*$top_bottom + $right_left && $i < 2*$top_bottom + 2*$right_left)
			{
				if($count_lines == 'Не ділиться')
				{
					$arr_new[$left] = $buff_arr[$i];
					//echo $arr_new[$left] . '</br>';
					$left -= $top_bottom;
					
				}
				else
				{
				$arr_new[$left] = $buff_arr[$i];
				$left-=$new_columns;
				}	
			}
		}
		
		$new_matrix = $this->arrToMatrix($arr_new, $new_rows, $new_columns);

		for ($i = $koef; $i < $this->rows - $koef; $i++)
		{
			for ($j = $koef; $j < $this->columns - $koef; $j++)
			{
				$this->arr_sort[$i][$j] = $new_matrix[$i-$koef][$j-$koef];
			}
		}
		
		$start_point += 2*$top_bottom + 2*$right_left;
		$new_length = $this->length - $start_point;
		$new_rows -= 2;
		$new_columns -= 2;
		$koef++;
	}

	if ($new_length == 1)
		{
			for ($i = 0; $i < $this->rows; $i++)
		{
			for ($j = 0; $j < $this->columns; $j++)
			{
				if ($this->arr_sort[$i][$j] == 0)
				{
					$this->arr_sort[$i][$j] = $this->arr[$start_point];
				}
			}
		}
		}
		echo '<b> Після сортування зворотнім равликом </b></br>';
		$this->output($this->arr_sort);
	}
}
?>
