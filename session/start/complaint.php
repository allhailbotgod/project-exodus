<!-- CODE BY BOTGODJAY -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HFYV Complaint Section</title>
  <link rel="stylesheet" href="../../styles/complaint.css">
</head>
<body>
  <header>
    <nav class="nav">
      <ul>
        <li><a href="dashboard.php">Home</a></li>
        <li><a href="chat.php">Chat</a></li>
        <li><a href="schedule.php">Schedule</a></li>
        <li><a href="complaint.php">Complaint</a></li>
      </ul>
    </nav>
  </header>

  <div class="body">
    <div class="header">
      <img src="../../images/logo.png" alt="HFYV Logo">
      <h2>HOLY FAMILY YOUTH VILLAGE</h2>
    </div>

    <h3>Make a complaint</h3>

    <form action="" htmlspecialchars(method="$_SERVER[POST]")>
      <textarea name="complaint" id="complaint" rows="10" required placeholder="Write your message here..."></textarea>

      <button type="submit">Submit</button>

      <span id="suggestion"><i>You might want to consider <a href="">making a suggestion...</a></i></span>
    </form>
  </div>

  <footer>
    <p>&copy; HOLY FAMILY YOUTH VLLAGE</p>
  </footer>
</body>
</html>