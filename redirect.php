<?php
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];
if($email !=''&& $name !=''&& $message !='')
{
//  To redirect form on a particular page
header("Location:index.html");
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
?>
