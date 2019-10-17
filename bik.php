<html>
<head>
<body>
SUBMITTED DATA IS:<?php print_r($_POST); ?>
<hr>
NAME:<?php echo($_POST['name']); ?>
<br>
LAST NAME:<?php echo($_POST['last']); ?>
<br>
GENDER:<?php echo($_POST['gender']); ?>
<br>
PHONE NUMBER:<?php echo($_POST['no']); ?>
<br>
EMAIL ID:<?php echo($_POST['email']); ?>
<br>
COMMENT:<?php echo($_POST['com']); ?><br><br><hr>
<?php 
$handle = fopen("data.txt",a);

foreach($_POST as $variable => $value)
 {
fwrite($handle, $variable);

fwrite($handle, "=");

fwrite($handle, $value);
fwrite($handle, "\r\n");

}

fwrite($handle, "\r\n");

fclose($handle);
exit;
?>
</body>
</head>
</html>