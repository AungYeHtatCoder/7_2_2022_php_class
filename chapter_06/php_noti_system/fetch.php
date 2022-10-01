<?php 
if(isset($_POST["view"]))
{
 include("config/db_con.php");
 if($_POST["view"] != '')
 {
  mysqli_query($link,"update `user` set seen_status='1' where seen_status='0'");
 }
 $query = mysqli_query($link,"select * from `user` order by userid desc limit 5");
 $output = '';

 if(mysqli_num_rows($query) > 0 ) {
  while($row = mysqli_fetch_array($query)) {
   $output .= '
   <li>
    <a href="#">
     <strong>'.$row["firstname"].' '.$row["lastname"].'</strong><br />
     <small><em>'.$row["email"].'</em></small>
    </a>
   </li>
   ';
  }
   
 }else{
  $output .= '
  <li><a href="#" class="text-bold text-italic">No Notification Found</a></li>
  ';
 }

  $query1 = mysqli_query($link,"select * from `user` where seen_status='0'");
  $count = mysqli_num_rows($query1);
  $data = array(
   'notification' => $output,
   'unseen_notification' => $count
  );
  echo json_encode($data);
}