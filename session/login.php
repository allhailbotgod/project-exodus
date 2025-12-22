<!-- CODE BY BOTGODJAY -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HFYV Login</title>
  <link rel="stylesheet" href="../styles/login.css">
</head>
<body>
  <div class="main">
    <div class="display">
      <img src="../images/logo.png" alt="HFYV Logo">
      <p><strong><i>We missed you...</i></strong></p>
    </div>

    <div class="form">
      <form action="" htmlspecialchars(method="$_SERVER[POST]")>
        <input type="text" name="username" id="username" required placeholder="USERNAME or HFYV ID" pattern="^[a-zA-Z0-9/]+$" autocomplete="on">

        <input type="password" name="pwd" id="pwd" required placeholder="PASSWORD">

        <div class="forgot">
          <a href="../session/reset/forgot.php" target="_blank">Forgot password?</a>
        </div>

        <button type="submit">Login</button>
      </form>
      <p>or</p>
      <button onclick="window.open('signup.php','_blank')">Create account</button>
    </div>
  </div>
</body>
</html>