<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlgorithmsController extends Controller
{
    function sortFive()
    {
        $arr=array(3,4,5,3,2,3,10,11);
        $countArr = count($arr);
        for ($i = 0; $i < $countArr - 1; $i++)
        {
            $max = $i;
            for ($j = $i + 1; $j < $countArr; $j++){
                if ($arr[$j] > $arr[$max]){
                    $max = $j;
                }
            }
            $temp = $arr[$i];
            $arr[$i] =$arr[$max];
            $arr[$max] = $temp;
        }
        $arrs=array_slice($arr,0,5);
       foreach($arrs as $arr){
          echo $arr.' ';
       }
       echo "</br>";
       $arr=array(14,12,38,17,10,36,12,29,45,34,48,22);
       $countArr = count($arr);
       for ($i = 0; $i < $countArr - 1; $i++)
       {
           $max = $i;
           for ($j = $i + 1; $j < $countArr; $j++){
               if ($arr[$j] > $arr[$max]){
                   $max = $j;
               }
           }
           $temp = $arr[$i];
           $arr[$i] =$arr[$max];
           $arr[$max] = $temp;
       }
       $arrs=array_slice($arr,0,5);
      foreach($arrs as $arr){
         echo $arr.' ';
      }
      echo "</br>";
      $arr=array(10,11,2,30,22,6,8,9,11,12,22);
      $countArr = count($arr);
      for ($i = 0; $i < $countArr - 1; $i++)
      {
          $max = $i;
          for ($j = $i + 1; $j < $countArr; $j++){
              if ($arr[$j] > $arr[$max]){
                  $max = $j;
              }
          }
          $temp = $arr[$i];
          $arr[$i] =$arr[$max];
          $arr[$max] = $temp;
      }
      $arrs=array_slice($arr,0,5);
     foreach($arrs as $arr){
        echo $arr.' ';
     }
    }

    public function Timsolanxuathien()
{
    $arr=array(3, 7, 3,4,4);
    $countArr = count($arr);
    for ($i = 0; $i < $countArr - 1; $i++)
    {
        $max = $i;
        for ($j = $i + 1; $j < $countArr; $j++){
            if ($arr[$j] < $arr[$max]){
                $max = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] =$arr[$max];
        $arr[$max] = $temp;
    }
    $imax=0;
	$max=0;
	$count=1;
	for($i=0;$i<$countArr-1;$i++)
	{
		if($arr[$i]==$arr[$i+1])
		{
			$count++;
				if($count>$max)
				{
					$max=$count;
                    $imax=$i;
				}	
			
		}
		else
		{
			
           $count=1;
		}
	}
    echo $arr[$imax];


    $arr=array(null, "hello", true, null);
    $countArr = count($arr);
    for ($i = 0; $i < $countArr - 1; $i++)
    {
        $max = $i;
        for ($j = $i + 1; $j < $countArr; $j++){
            if ($arr[$j] < $arr[$max]){
                $max = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] =$arr[$max];
        $arr[$max] = $temp;
    }
    $imax=0;
	$max=0;
	$count=1;
	for($i=0;$i<$countArr-1;$i++)
	{
		if($arr[$i]==$arr[$i+1])
		{
			$count++;
				if($count>$max)
				{
					$max=$count;
                    $imax=$i;
				}	
			
		}
		else
		{
			
           $count=1;
		}
	}
    echo $arr[$imax];

    
    $arr=array(false, "up", "down", "left", "right", true, false);
    $countArr = count($arr);
    for ($i = 0; $i < $countArr - 1; $i++)
    {
        $max = $i;
        for ($j = $i + 1; $j < $countArr; $j++){
            if ($arr[$j] < $arr[$max]){
                $max = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] =$arr[$max];
        $arr[$max] = $temp;
    }
    $imax=0;
	$max=0;
	$count=1;
	for($i=0;$i<$countArr-1;$i++)
	{
		if($arr[$i]==$arr[$i+1])
		{
			$count++;
				if($count>$max)
				{
					$max=$count;
                    $imax=$i;
				}	
			
		}
		else
		{
			
           $count=1;
		}
	}
    echo $arr[$imax];
}
}
