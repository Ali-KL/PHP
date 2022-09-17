<html>

<head>
  <title>Task 1</title>
  <link rel="stylesheet" href="/globals2.php">
  <style>
    .cont {
      width: 50%;
      height: 250px;
      margin: auto;
    }

    .sarchLabel {
      margin-top: 40px;

    }

    .searchEngine {
      width: 400px;
      margin: auto;
    }

    .input-div {
      width: 400px;
      margin: auto;
      display: flex;
      flex-direction: column;
    }
  </style>
</head>

<body>

  <div class="cont">
    <form name="contact" method="post" action="globals2.php">
      <div class="input-div">
        <label for="Email">Email</label>
        <input name="email" class="email-input" type="email" placeholder="Enter Email..." required><br>
        <label class="password-input" for="Password">Password</label>
        <input name="password" type="password" placeholder="Enter A Password..." required>
        <button class="go-button">Go</button>


      </div>




  </div>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $email = htmlspecialchars($_REQUEST['email']);
    $password = htmlspecialchars($_REQUEST['password']);
    echo 'Email Is:  ' . $email . '<br>';
    echo 'Email Is:  ' . $password;
  }
  ?>


</body>

</html>