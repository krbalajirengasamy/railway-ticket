<?php
    include "connect.php";
    $train_id=$_POST['train_id'];
    $result = mysqli_query($conn,"SELECT * FROM m_trains_t WHERE train_id='".$train_id."'");
    $row = mysqli_fetch_array($result);
    $rowres = array();
    $rowres['train_number']=$row['train_num'];
    $rowres['start_time']=$row['str_time'];
    $rowres['end_time']=$row['end_time'];
    $rowres['start_location']=$row['start_location'];
    $rowres['end_location']=$row['end_location'];
    echo json_encode($rowres);
 ?>