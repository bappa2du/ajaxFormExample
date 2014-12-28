<?php

$name2 = $_POST['name1'];
$email2 = $_POST['email1'];
$password2 = $_POST['password1'];
$contact2 = $_POST['contact1'];

$connection = mysql_connect("localhost", "root", ""); 
$db = mysql_select_db("university", $connection); 
if($db)
{
	if (isset($_POST['name1'])) 
	{
		$query = mysql_query("INSERT INTO `form_element`(`student_name`, `student_email`, `student_contact`, `student_address`) VALUES ('$name2','$email2','$password2','$contact2')");
		if($query)
		{
			echo "Form Submitted succesfully";
		}
		else
		{
			echo "Form Submitted unsuccesfully";
		}
	}
}
else
{
	echo "Database Error";
}



mysql_close($connection); 
?>
