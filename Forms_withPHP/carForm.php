<?php
$msg = "E-MAIL SENT FROM Hills\n";
$msg .= "Sender's Name:       $_POST[name]\n";
$msg .= "Sender's E-mail:     $_POST[email]\n";
$msg .= "Sender's Phone:      $_POST[phone]\n";
$msg .= "Sender's State:      $_POST[state]\n";
$msg .= "Sender's Occupation: $_POST[ocupation]\n";
$msg .= "Sender's Gender:     $_POST[gender]\n";
$msg .= "Sender's Interest:   $_POST[buy_or_lease]\n";
$msg .= "Sender's Age:        $_POST[age]\n";
$msg .= "Was sender satisfied with the customer service we provided for him: $_POST[cus_ser1]\n";
$msg .= "Was our customer service provided to sender in accessible manner: $_POST[cus_ser2]\n";
$msg .= "What kind of car(cars) did sender buy or lease with us: $_POST[interest1] $_POST[interest2] $_POST[interest3] $_POST[interest4] $_POST[interest5] $_POST[interest6] $_POST[interest7] 
$_POST[interest8] $_POST[interest9] $_POST[interest10] $_POST[interest11] $_POST[interest12]\n";	
$msg .= "Sender's Comments:     $_POST[comments]\n";
$msg .= "Sender's date:     $_POST[todays_date]\n";

$to = "igolovko@mail.ccsf.edu";

$subject = "Web Site Feedback(http://hills.ccsf.edu/~igolovko/cnit132/HW8/hw8_1.html)";
$mailheaders = "From: My Web Site <> \n";
$mailheaders .= "Reply-To: $_POST[email]\n\n";
mail($to, $subject, $msg, $mailheaders);


if(mail($to, $subject, $msg, $mailheaders))
{
	echo("<p>Email successfully sent!</p>");
} 
else 
{
	echo("<p>Email delivery failed</p>");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<title>The following email has been sent to Irina Golovko</title>

<style type="text/css">

body {
	background-image: url('mix.jpg');
}

#contents {
	
	    margin: 0px auto; padding: 15px;
        text-align: left; 	
        border: 1px solid;
        width: 630px; border: solid; padding: 10px; background-color: white;
	}	
</style>
</head>

<body>
	
<section>
<br><br>

<div id="contents">
<h3>The following email has been sent to Irina Golovko(igolovko@mail.ccsf.edu):
</h3>

<div id="box">

<p><b>Your Name:</b>
<?php echo "$_POST[name]"; ?>
<br><br>

<b>Your E-mail Address:</b>
<?php echo "$_POST[email]"; ?>
<br><br>

<b>Your Phone:</b>
<?php echo "$_POST[phone]"; ?>
<br><br>

<b>Your State:</b>
<?php echo "$_POST[state]"; ?>
<br><br>

<b>Your Occupation:</b>
<?php echo "$_POST[ocupation]"; ?>
<br><br>

<b>Your Gender:</b>
<?php echo "$_POST[gender]"; ?>
<br><br>

<b>Your Interest:</b>
<?php echo "$_POST[buy_or_lease]"; ?>
<br><br>

<b>Your Age:</b>
<?php echo "$_POST[age]"; ?>
<br><br>

<b>Were you satisfied with the customer service we provided for you?</b>
<?php echo "$_POST[cus_ser1]"; ?>
<br><br>

<b>Was our customer service provided for you in accessible manner?</b>
<?php echo "$_POST[cus_ser2]"; ?>
<br><br>

<b>What kind of car(cars) did you buy or lease with us:</b>
<?php echo "$_POST[interest1]"; ?>
<?php echo " "; ?>
<?php echo "$_POST[interest2]"; ?>
<?php echo " "; ?>
<?php echo "$_POST[interest3]"; ?>
<?php echo " "; ?>
<?php echo "$_POST[interest4]"; ?>
<?php echo " "; ?>
<?php echo "$_POST[interest5]"; ?>
<?php echo " "; ?>
<?php echo "$_POST[interest6]"; ?>
<?php echo " "; ?>
<?php echo "$_POST[interest7]"; ?>
<?php echo " "; ?>
<?php echo "$_POST[interest8]"; ?>
<?php echo " "; ?>
<?php echo "$_POST[interest9]"; ?>
<?php echo " "; ?>
<?php echo "$_POST[interest10]"; ?>
<?php echo " "; ?>
<?php echo "$_POST[interest11]"; ?>
<?php echo " "; ?>
<?php echo "$_POST[interest12]"; ?>
<?php echo " "; ?>
<br><br>

<b>Your Comments:</b>
<?php echo "$_POST[comments]"; ?>
<br><br>

<b>Your Date:</b>
<?php echo "$_POST[todays_date]"; ?>
</p>

</div> 
</section>

</body>
</html>