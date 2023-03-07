<?php
require_once 'config.php';

if(isset($_POST['viewid']))
{
   // alert($viewid);
    $user_id=$_POST['viewid'];
  //  alert($user_id);
  
 
 
 $sql = 
 " SELECT id,building_name,manager_email,floor_no,room_no,bed_no,tenant_name,tenant_mobile, `breakfast`, `lunch`, `dinner`, `date`, `comments`,DATE_FORMAT(`date`, '%d-%m-%Y') as date from meals
 where id=$user_id ORDER by id DESC ";
 
 
 
   // $sql="select * from `meals` where id=$user_id";
    $result=mysqli_query($conn,$sql);
    $response=array();
    while($row=mysqli_fetch_assoc($result)){
        $response=$row;
    } 
    // alert($response);
    ?>
   
    
    <?php
    echo json_encode($response);
}
else{
    $response['status']=200;
    $response['message']="Invalid or data not found";

}
?>