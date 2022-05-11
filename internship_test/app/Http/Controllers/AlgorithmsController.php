<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlgorithmsController extends Controller
{
    function sortFive()
    {
        //findMax5([3,4,5,3,2,3,10,11]) => [11,10,5,4,3]
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
       //findMax5([14,12,38,17,10,36,12,29,45,34,48,22]) => [48, 45, 38, 36, 34]
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

      //findMax5([10,11,2,30,22,6,8,9,11,12,22]) => [30, 22, 22, 12, 11]
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

 public function filter()
{
    //findFrequent([3, 7, 3]) ➞ 3
    $arr=array(3, 7, 3);
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
    echo "=>".''.$arr[$imax];
    echo "</br>";

//findFrequent([null, "hello", true, null]) ➞ null
    $arr=array( null,"hello", true, null);
    $arrCount=[];
    $countArr = count($arr);
    
    for ($i = 0; $i < $countArr - 1; $i++)
    {
        $count=0;
        for($j=$i+1;$j<$countArr;$j++){
        
            if(strcmp($arr[$i],$arr[$j]) == 0){
                $count++;
                $arrCount[$i]=$count;  
            }else{
                $count+=0;
                $arrCount[$i]=$count;  
            }
        }
    }
    $countArr = count($arrCount);

    for($i=0;$i<$countArr;$i++){
        $max=0;
        if($arrCount[$i]>$max){
            $max=$arrCount[$i];
            $imax=$i;
        }
    }

    $string = ($arr[$imax] === null) ? 'null' : $arr[$imax];
    echo "=>".''.$string;
    echo "</br>";

    //findFrequent([false, "up", "down", "left", "right", true, false]) ➞ false
    $arr=array(false, "up", "down", "left", "right", true, false);
    $arrCount=[];
    $countArr = count($arr);
    
    for ($i = 0; $i < $countArr - 1; $i++)
    {
        $count=0;
        for($j=$i+1;$j<$countArr;$j++){
        
            if(strcmp($arr[$i],$arr[$j]) == 0){
                $count++;
                $arrCount[$i]=$count;  
            }else{
                $count+=0;
                $arrCount[$i]=$count;  
            }
        }
    }
    $countArr = count($arrCount);

    for($i=0;$i<$countArr;$i++){
        $max=0;
        if($arrCount[$i]>$max){
            $max=$arrCount[$i];
            $imax=$i;
        }
    }
    $string = ($arr[$imax] === null) ? 'null' : $arr[$imax];
    $string = ($arr[$imax] === true) ? 'true' : $arr[$imax];
    $string = ($arr[$imax] === false) ? 'false' : $arr[$imax];
    echo "=>".''.$string;
   
}
}
