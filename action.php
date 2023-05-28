<?php
include_once('connection.php');
if(isset($_POST['sb']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $fathersname=$_POST['fathersname'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $mob=$_POST['mob'];
    $address_house=$_POST['address_house'];
    $address_locality=$_POST['address_locality'];
    $address_road=$_POST['address_road'];
    $address_pincode=$_POST['address_pincode'];
    $state=$_POST['state'];
    $dis=$_POST['district'];
    $gender=$_POST['gender'];
    $degree=$_POST['degree'];
$dose=$_POST['dose'];
$d=implode(", ",$dose);



    $vaccine=$_POST['vaccine'];
    $id_type=$_POST['id_type'];
                                        
$dir="upload/";
$upload_doc=$dir.basename($_FILES['upload-document']['name']);
move_uploaded_file($_FILES['upload-document']['tmp_name'],$upload_doc);
    $query="insert into registration values('','$fname','$lname','$fathersname','$email','$address_house','$address_locality','$address_road','$address_pincode','$state','$gender','$vaccine','$id_type','$dob','$mob','$dis','$degree','$d','$upload_doc')";
 
    $ck=mysqli_query($cn,$query);

}
?>