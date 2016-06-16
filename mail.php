<html>
<head>
<title>E-mail表單</title>
</head>
<body>
<?php
if(isset($_POST['address'])){
$fromname=$_POST['fromname'];
$address=$_POST['address'];
$content=$_POST['content'];



require("PHPMailer/PHPMailerAutoload.php");
$mail=new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth=true;
$mail->Host="smtp.gmail.com";
$mail->Port=465;
$mail->SMTPSecure = 'ssl';
$mail->Username="信箱帳號@gmail.com";
$mail->Password="信箱密碼";
$mail->CharSet="utf-8";
$mail->Subject="php期末報到A1033311";
$mail->FromName=$fromname;
$mail->IsHTML(true);
$mail->AddAddress($address);
$mail->Body=$content;
$mail->send();
print "信件已寄出";
}else{
?>
<form action='mailform.php' method='post'>
收件人E-mail:<input type='email' name='address'></br>
寄件人姓名:<input type='text' name='fromname'></br>
內容:<textarea name='content'></textarea></br>
<input type='submit' value='送出'>
</form>
<?php
}
?>


</body>
</html>