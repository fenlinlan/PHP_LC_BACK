<?php

class data{
   public $id  ; 
   public $phone ; 
   public $drawtype	 ;
   public $number;
   public $crdtime ; 

}
 include("../Connections/iotcnn.php");	
     $link=Connection();
   $qrystr="select * from LC.Draws WHERE 1 order by id asc;" ;	
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
           $basedata->phone = $row["phone"] ;
           $basedata->drawtype  = $row["drawtype"] ;
           $basedata->number  = $row["number"] ;
           $basedata->crdtime = $row["crdtime"] ;
           array_push($dd , $basedata) ;

       }
       echo json_encode($dd , JSON_UNESCAPED_UNICODE);
   }
    mysqli_free_result($result);
    mysqli_close($link);





?>