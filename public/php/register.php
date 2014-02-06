<?php

echo "Hello World\n";


$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="ecse428"; // Mysql password 
$db_name="iHealthPal"; // Database name 
$tbl_name="users"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");


// Get values from form 
$Password1=$_POST['password1'];
$Password2=$_POST['password2'];
$Email1=$_POST['email1'];
$Email2=$_POST['email2'];

//TEST
echo "\n";
echo $Emai11;
echo $Emai12;
echo "\n";
echo $Password1;
echo $Password2;

// Required field names
$required = array('Email1', 'Email2', 'Password1', 'Password2' );

// Loop over fields, make sure each one exists and is not empty
$error = false;
foreach($required as $field) {
  if (empty($_POST[$field])) {
    $error = true;
  }
}


if ($error) {
  echo "All fields are required.\n";
  echo "<BR>";
  echo "<a href='signup.html'>Back to registration page</a>";
} 
else {
  echo "All fields were filled. Thank you.\n";
  echo "<BR>";
  echo "<a href='signup.html'>Back to registration page</a>";
}

/*
if ($error) {
  echo "All fields are required.";
  echo "<BR>";
  echo "<a href='signup.html'>Back to registration page</a>";
} 

else{

  // Insert data into mysql 
  $sql="INSERT INTO $tbl_name(email, password)VALUES('$Email1', '$Password1')";
  $result=mysql_query($sql);

  // if successfully insert data into database, displays message "Successful". 
  if($result){
    echo "Account successfully created. <BR/>"; 
    echo "<BR>";
    echo "<a href='login.html'>Go to login page</a>";
  }
  else {
    echo "The account was NOT created. <BR/>"; 
    echo "<BR>";
    echo "<a href='signup.html'>Back to registration page</a>";
  }
*/
// close connection 
mysql_close();


?>