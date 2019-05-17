<?php
	// 把只包含质因子2、3和5的数称作丑数（Ugly Number）。例如6、8都是丑数，但14不是，因为它包含质因子7。 习惯上我们把1当做是第一个丑数。求按从小到大的顺序的第N个丑数。
	function GetUglyNumber_Solution($index)
	{
		if(!is_numeric($index))
		{
			echo "不是数字"；
		}
		if($index%2 == 0)
		{
			$index = $index/2;
		}
		if($index%3 == 0)
		{
			$index = $index/3;
		}
		if($index%5 == 0)
		{
			$index = $index/5;
		}
		if($index%2 == 1)
		{
			return "丑数";
		}
		else
		{
			return "不是丑数";
		}
	}
?>