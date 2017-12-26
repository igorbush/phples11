<?php
namespace classes\order;

class Order
{ 
	public $content;
	public function __construct($content) 
	{
		$this->content = $content;
	}

	public function printOrder() 
	{
		echo "<table border = '1'><tr><th>Товар</th><th>Количество</th><th>Итого</th></tr>";
		foreach ($this->content as $key => $value) 
		{
			echo "<tr><td>" . $value[0] . "</td><td>" . $value[1] . " </td><td>" . $value[2]. " руб. </td></tr>";
		}
		echo "</table>";
	}
}
?>