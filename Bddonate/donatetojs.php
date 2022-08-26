<?php

class data{
   public $id  ; 
   public $name ; 
   public $phone ; 
   public $money ; 
   public $ps ; 
   public $comefrom ; 
   public $updtime ; 

}
 include("../Connections/iotcnn.php");	
     $link=Connection();
   $qrystr="select * from LC.Donate WHERE 1 order by id asc;" ;	
   $result=mysqli_query($link , $qrystr);
   $cnt= 1 ;
   $count = mysqli_num_rows($result) ;
   if ($count >0)
   {
       $dd = array() ;
   while($row = mysqli_fetch_array($result)) 
       {
           $basedata = new data() ; 
           $basedata->id = $row["id"] ;
           $basedata->name = $row["name"] ;
           $basedata->phone = $row["phone"] ;
           $basedata->money = $row["money"] ;
           $basedata->ps = $row["ps"] ;
           $basedata->comefrom = $row["comefrom"] ;
           $basedata->updtime = $row["updtime"] ;
           array_push($dd , $basedata) ;

       }
       echo json_encode($dd , JSON_UNESCAPED_UNICODE);
   }
    mysqli_free_result($result);
    mysqli_close($link);





?>