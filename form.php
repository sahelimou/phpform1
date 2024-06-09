<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
$target_path = "e:/phpfiles/";  
$target_path = $target_path.basename( $_FILES['fileSelect']['name']);   
  
 $file_size =$_FILES['fileSelect']['size'];
 $file_type=$_FILES['fileSelect']['type'];
 $string =$_FILES['fileSelect']['name'];
 $strings = explode('.', $string);
 $file_ext=strtolower(end($strings));
 $extensions= array("jpeg","jpg","png");
 $errors= array();
if (isset($_POST['name'], $_POST['email'],$_POST['website'],$_POST['comment'],$_POST['gender'],$_POST['qf'])) {
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
        $wb = htmlspecialchars($_POST['website']);
        $cm = htmlspecialchars($_POST['comment']);
$gd = htmlspecialchars($_POST['gender']);
$qf= htmlspecialchars($_POST['qf']);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email format";
}

	if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$wb)) {
  echo "Invalid URL";
}
if(in_array($file_ext,$extensions)== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
	if(empty($errors)==true){ 
            move_uploaded_file($_FILES['fileSelect']['tmp_name'], $target_path);
    echo "File uploaded successfully!";  
} else{  
    print_r($errors);  
} 

        echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $wb;
echo "<br>";
echo $cm;
echo "<br>";
echo $gd;
echo "<br>";
echo $qf;}
else{
    if($_POST['name']=== '' )
        echo "Name required"."<br>";
     if($_POST['email']=== '')
        echo "Email required"."<br>";
    if($_POST['website']=== '')
        echo "Website required"."<br>";
        if($_POST['comment']=== '')
            echo "comment required"."<br>";
     if(empty($_POST['gender']))
            echo "select a gender";
        
    
}
?>