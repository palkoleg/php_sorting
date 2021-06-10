
	<?php
	//require 'my_sort/Input.php';	
	require __DIR__ . '/vendor/autoload.php';
	
	?>

	<div align = "center">
	
	
	<?php
	
	function my_rand($arr, $pos, $length)
	{
		$random;
		$count = $pos;
		//echo $count . '<br>';
		while ($count > 0)
		{
			$random = rand(1,$length);
			$count = $pos;
			//echo $random . '<br>';
			for ($i = 0;  $i < $pos; $i++)
			{
				if ($arr[$i] != $random)
				{
					$count--;
					//echo $count . '<br>';
				}
			}
		}
		return $random;
	}
	
	function is_easy($value)
    {
		if($value == 1) 
		{
			return false;
		}
		for($i = 2; $i*$i <= $value; $i++)
		{ 
			if($value % $i ==0) 
			{
				return false;
			}
		}
		return true;
	}
	
	
	
	function last_easy($length)
	{
		$last = 0;
		$count = 0;
		for ($i = 0;  $i < $length*9000000; $i++)
			{
				if (is_easy($i) == true)
				{
					$count++;
					if ($count == $length+1)
					{
						$last = $i;
						break;
					}
				}
				
			}
		return $last;
	}
	
	function my_rand_easy($arr, $pos, $last)
	{
		$random = 4;
		
		while (is_easy($random) == false)
		{
			$count = $pos;
			while ($count > 0)
		{
			$random = rand(1,$last);
			$count = $pos;
			for ($i = 0;  $i < $pos; $i++)
			{
				if ($arr[$i] != $random)
				{
					$count--;
				}
			}
		}
		}
		return $random;
	}
	
	
	$arr = array();
	
	$length = $rows*$columns;
	
	if ($generate == 1)
	{
		for ($i < 0; $i < $length; $i++)
		{
			if ($i > 0)
			{
				array_push($arr, my_rand($arr, $i, $length));
			}
			else
			{
				array_push($arr,rand(1,$length));
			}
		}
	}
	else
	{
		$last = last_easy($length);
		for ($i < 0; $i < $length; $i++)
		{
			if ($i > 0)
			{
				array_push($arr, my_rand_easy($arr, $i, $last));
			}
			else
			{
				$first = 4;
				while (!is_easy($first))
				{
					$first = rand(1,$last);
				}
				array_push($arr,$first);
			}
		}
	}
	
	?>
	
	<h6 align = "center" style = "color:#bd5d38">
		<b>
		Матриця перед сортуванням: 
		</b>
	</h6>
	<?php
		//$arr = array(5,7,9,4,1,3,2,6,8,49,50,51,52,53,54,10,43,44,45,46,47,48,11,12,15,13,14,31,32,33,34,35,36,37,38,39,40,41,42,16,18,17,20,19,21,22,23,24,25,26,27,28,29,30);
		//$rows = 6;
		//$columns = 9;
		

		$input = new Work\Input($arr, $rows, $columns);
		$input -> sort_arr();
		$input->output($input->arrToMatrix($arr, $rows, $columns));
		$horizontal = new Work\HorizontalSort($arr, $rows, $columns);
		$vertical = new Work\VerticalSort($arr, $rows, $columns);
		$snail = new Work\SnailSort($arr, $rows, $columns);
		$inverse_snail = new Work\InverseSnailSort($arr, $rows, $columns);
		$snake = new Work\SnakeSort($arr, $rows, $columns);
		$diagonal = new Work\DiagonalSort($arr, $rows, $columns);
	?>
	
	<h6 align = "center" style = "color:#bd5d38">
		<b>
		Результат сортування: 
		</b>
	</h6>
</div>
	
	
<div class = "main" align = "center">
	<div class = "block">
	<?php
		$horizontal -> sort_arr();
	?>
	</div>
	<div class = "block">
	<?php
		$vertical -> sort_arr();
	?>
	</div>
	<div class = "block">
	<?php
		$snail -> sort_arr();
	?>
	</div>
</div>

<div class = "main" align = "center">
	<div class = "block">
	<?php
		$inverse_snail -> sort_arr();
	?>
	</div>
	<div class = "block">
	<?php
		$snake -> sort_arr();
	?>
	</div>
	<div class = "block">
	<?php
		$diagonal -> sort_arr();
	?>
	</div>
</div>
