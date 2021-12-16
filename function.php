<?php 

if(isset($_POST['submit']))
{
   $firstname = $_POST['firstname'];

   $lastname = $_POST['lastname'];

   $email = $_POST['email'];

   $mobileno = $_POST['mobileno'];

   $country = $_POST['country'];

   $message = $_POST['message'];

   $connect = mysqli_connect("localhost", "root", "", "responsiveform");

   $form_sql = ("INSERT INTO form (firstname, lastname, email, mobileno, country, message) VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$mobileno."', '".$country."', '".$message."')");

   $form_res = mysqli_query($connect,$form_sql);

   if($form_sql)
   {
   	 echo "<script>alert('Details Save Success')</script>";

   	echo "<script>window.location.href='index.php'</script>";
   }
   else
   {
   	echo "<script>alert('Details Save Failed!!')</script>";
   } 
}


?>