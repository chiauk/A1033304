<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>email寄送表單</title>
</head>
<body>
	<form action='sendmail.php' method='post'>
		寄件人<input type='text' name='sender' ><br/>
		收件箱<input type='text' name='email' ><br/>
		收件人<input type='text' name='receiver' ><br/>
		內容<textarea name='content' rows='5' cols='40' ></textarea><br/>
		<input type='submit' value='發送電子報'>
	</form>
</body>
</html>
