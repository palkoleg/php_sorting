<?php
namespace Work;

abstract class MySort
{
	public $arr;
	public $arr_sort;
	public $length; 
	public $columns;
	public $rows;
	public $type;
	
	public function __construct($arr, $rows, $columns)
	{
		$this->arr = $arr;
		$this->length = count($arr);
		$this->rows = $rows;
		$this->columns = $columns;
	}
	
	abstract public function sort_arr();
	
	
	public function my_sort($arr)
	{
		for($j = 0; $j < count($arr)-1; $j++)
		{
		for($i = 0; $i < count($arr)-1; $i++)
		{
			if ($arr[$i] > $arr[$i+1])
			{
				$buff = $arr[$i];
				$arr[$i] = $arr[$i+1];
				$arr[$i+1] = $buff;
			}
		}
		}
		return $arr;
	}
	
	public function my_rsort($arr)
	{
		for($j = 0; $j < count($arr)-1; $j++)
		{
		for($i = 0; $i < count($arr)-1; $i++)
		{
			if ($arr[$i] < $arr[$i+1])
			{
				$buff = $arr[$i+1];
				$arr[$i+1] = $arr[$i];
				$arr[$i] = $buff;
			}
		}
		}
		return $arr;
	}
	
	public function arrToMatrix($arr, $rows, $columns)
	{
		$matrix;
		$pos = 0;
		for($i = 0; $i < $rows; $i++)
		{
			for($j = 0; $j < $columns; $j++)
			{
				$matrix[$i][$j] = $arr[$pos];
				$pos++;
			}
		}
		return $matrix;
	}
	
	public function arr_to_string($arr)
	{
		$str = "";
		for($i = 0; $i < $this->rows; $i++)
		{
			for($j = 0; $j < $this->columns; $j++)
			{
				if ($j == 0)
				{
					$str = $str . $arr[$i][$j];
				}
				else
				{
					$str = $str . "\t" . $arr[$i][$j];
				}
			}
				if($i != $this->rows - 1)
				{
					$str = $str ."\n";
				}
		}
		return $str;
	}
	
	public function save_to_txt($arr, $type)
	{
	$fp = fopen("my_sort.txt", "a");
	$type = "\n" . $type . " " . date("H:i:s d-m-Y") . "\n";
	fwrite($fp, $type); 
	$str = $this->arr_to_string($arr);
	fwrite($fp, $str);
	fclose($fp); 
	}
	
	public function save_to_db($arr, $type)
	{
		$host = "localhost";
		$db_name = "sort";
		$login = "palkoleg";
		$passwd = "Palka@1997";
		$connect =  mysqli_connect("$host", "$login", "$passwd", "$db_name");
		if (!$connect) {
           //echo "Не працює!";
		   echo '<script> alert("mysql не підключено !") </script>';
           //exit(mysql_error());
           }
           else {
		   $str = $this->arr_to_string($arr);
			$query = "insert into " .  $type . " (arr, rows, columns, date) values  ('" . $str . "'," . $this->rows . ", " . $this->columns . ", '" . date("Y-m-d H:i:s") . "' );";
			mysqli_query($connect,$query);
			/*$query = "select arr from inverse_snail where id = 12";
			$result = mysqli_query($connect,$query);
			$row = mysqli_fetch_array($result, MYSQLI_NUM);
			echo 'db_select' . '<br>';
			$result = $row[0];
			for($i = 0; $i < strlen($result); $i++)
		{		
				if ($result[$i] == " ")
				{
					echo "\t";
				}
				else if ($result[$i] == "\n")
				{
					echo '<br>';
				}
				else
				{
					echo $result[$i];
				}
		}*/
			mysqli_close($connect);
       }	
	}
	
	public function output($arr)
	{
		//echo 'Кількість елементів: ' . $this->length.'</br> <i>Розмірність матриці: '. $this->rows .' * ' .$this->columns . '</i></br>';
		echo '<table class="table table-striped">'; 
		for($i = 0; $i < $this->rows; $i++)
		{		
		echo "<tr>"; 
			for($j = 0; $j < $this->columns; $j++)
			{
				echo "<td>" . $arr[$i][$j] . "</td>"; 
			}
		echo "</tr>"; 
	}
	echo "</table>";
		$this->save_to_db($arr, $this->type);
		$this->save_to_txt($arr, $this->type);
	}
}

?>
