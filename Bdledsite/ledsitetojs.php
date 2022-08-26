<?php

class data{
   public $id  ; 
   public $name	 ; 
   public $typeid ; 
   public $amount ;  	  
   public $crdtime;	 
}

 
// 	include("comlib.php");		//使用資料庫的呼叫程式

 include("../Connections/iotcnn.php");		//使用資料庫的呼叫程式
       //	Connection() ;
     $link=Connection();		//產生mySQL連線物件

  //   select * from LC.ledset WHERE 1 order by id asc;
   $qrystr="select * from LC.Ledsite WHERE 1 order by id asc;" ;		//將dhtdata的資料找出來
   //SELECT * FROM HAuser as a  WHERE 1 order by userid asc

   $result=mysqli_query($link , $qrystr);		//將dhtdata的資料找出來(只找最後5
   $cnt= 1 ;
   $count = mysqli_num_rows($result) ;
   
   if ($count >0)
   {
       $dd = array() ;
   while($row = mysqli_fetch_array($result)) 
       {
           $userdata = new data() ; 
           $userdata->id = $row["id"] ;
           $userdata->name = $row["name"] ;
           $userdata->typeid = $row["typeid"] ;
           $userdata->amount = $row["amount"] ;
           $userdata->crdtime = $row["crdtime"] ;
           array_push($dd , $userdata) ;
       } 
  
       //echo "<br>=======================================<br><br>";
       //$user = utf8_encode($user) ;
       echo json_encode($dd , JSON_UNESCAPED_UNICODE);
   }
   
    mysqli_free_result($result);	// 關閉資料集

    mysqli_close($link);		// 關閉連線





?>