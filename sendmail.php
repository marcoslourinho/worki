<html>
<head><title>PHP Mail Sender</title></head>
<body>
<?php

$email = "marcoslourinho@protonmail.com";
$subject = "Formulário da Newsletter";
$message = $_POST['email'];

mail($email, $subject, $message);
echo "<script>javascript:history.back(1);</script>";

?>
</body>
</html> 