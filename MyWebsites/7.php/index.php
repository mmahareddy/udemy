
<!doctype html>
<html>
<head>
    <title>Example Domain</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
label{
  width: 5000px;
  height: 500px;
}

</style>

</head>

<body>
<div>
    <form method="post">
        <label for="email">email</label>
        <input type="text" name="email"/><br />
        <label for="subject">Subject</label>
        <input type="text" name="subject" /><br />
        <label for="Body">Enter Comments</label><br />
        <textarea name="Body" placeholder="Enter text here"></textarea><br />
        <input type="submit" name="submit" />
      </form>
</div>
<?php

if ($_POST["submit"]) {
$to_email=$_POST["email"];
$emailSubject = $_POST["subject"];
$emailbody = $_POST["Body"];
$emailHeader = "From: yoursmonick@example.com";

mail($to_email,$emailSubject,$emailbody,$emailHeader);
}


 ?>
</body>
</html>
