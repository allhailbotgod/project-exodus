<!-- CODE BY BOTGODJAY -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HFYV New Account</title>
  <link rel="stylesheet" href="../styles/signup.css">
</head>
<body>
  <div class="body">
    <div class="display">
      <img src="../images/logo.png" alt="HFYV Logo">
      <h2>Create an account</h2>
    </div>
    <form action="" htmlspecialchars(method="$_SERVER[POST]")>
      <label for="first-name">First Name:</label>
      <input type="text" name="name" id="first-name" placeholder="First Name" required>

      <label for="middle-name">Middle Name:</label>
      <input type="text" name="name" id="middle-name" placeholder="Middle Name">

      <label for="last-name">Last Name:</label>
      <input type="text" name="name" id="last-name" placeholder="Last Name" required>

      <label for="username">Username:</label>
      <input type="text" name="username" id="username" placeholder="Enter a unique username" required>

      <label for="password">New Password:</label>
      <input type="password" name="password" id="password" required placeholder="Create password">

      <label for="password">Confirm Password:</label>
      <input type="password" name="password" id="cPassword" required placeholder="Confirm password">

      <label for="dob">Date of Birth:</label>
      <input type="date" name="dob" id="dob" required>

      <label for="denomination">Denomination</label>
      <input type="text" name="denomination" id="denomination" placeholder="Denomination">

      <label for="faculty">Faculty:</label>
      <select name="faculty" id="faculty">
        <option value="">--Select Faculty--</option>
      </select>

      <select name="dept" id="dept">
        <option value="">--Select --Department--</option>
      </select>

      <select name="level" id="level">
        <option value="">--Select Level--</option>
      </select>

      <label for="sch-email">School E-mail:</label>
      <input type="email" name="sch-email" id="sch-email" required placeholder="School email" autocomplete="on">

      <button type="submit">Create account</button>

    </form>

    <footer>
      <p>&copy;HOLY FAMILY YOUTH VILLAGE</p>
    </footer>
  </div>
</body>
</html>