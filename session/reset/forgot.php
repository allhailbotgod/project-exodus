<!-- CODE BY BOTGODJAY -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HFYV Reset Password</title>
  <link rel="stylesheet" href="../../styles/forgot.css">
</head>
<body>
  <img src="../../images/logo.png" alt="">
  <h2>Reset Password</h2>
  <P>You will receive an email with a one-time code to reset your password.</P>
  <form action="" htmlspecialchars(method="$_SERVER[POST]")>
    <input type="text" name="hfyv-id" id="hfyv-id" required placeholder="HFYV ID" pattern="^[a-zA-Z0-9/]+$">

    <input type="email" name="email" id="email" required placeholder="SCHOOL EMAIL">

    <button type="submit">Send Code</button>
  </form>

  <footer>
    <p>&copy;HOLY FAMILY YOUTH VILLAGE</p>
  </footer>
</body>
</html>