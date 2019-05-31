<?php
//根据已知有序数组，实现二分查找算法（折半查找），输入任意数字，返回该数字在数组中的下标位置。

   $arr = ['1','2','3','4'];
   $data = [];
   foreach ($arr as $k => $v) {
   	  $data[$k] = $v;
   }
   echo $data;
   function actions($arr,$pid=0)
   {
      foreach ($arr as $k => $v) {
      	  $data[$k] = $v;
      	  $data[$k]['click'] = $this->actions($res,$id);
      }
      return $data;
   }
?>