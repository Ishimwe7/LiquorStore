<html>
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/styles.css" />
  </head>
  <body class="body">
    <div class="form">
      <h1>Please Login Here</h1>
      <br />
      <form action="welcome.php" method="POST">
        <label for="email">Shop name:</label>
        <input
          style="font-size: larger"
          type="text"
          autofocus
          placeholder="Enter shop name here"
          name="shop_name"
        /><br />
        <br />
        <label for="email">Shop Owner:</label>
        <input
          style="font-size: larger"
          type="text"
          placeholder="Enter shop owner here"
          name="shop_owner"
        />
        <br /><br />
        <label for="password">Password:</label>
        <input
          style="font-size: larger"
          type="password"
          maxlength="10"
          placeholder="Enter your password"
          name="password"
        /><br />
        <br />
        <p class="buttons">
          <button style="font-size: x-large" type="submit" name="submit">Login</button>
          <button style="font-size: x-large" type="reset">Clear Form</button>
        </p>
      </form>
      <p style="font-size: x-large">
        You don't have an account?
        <a href="registerVendor.php"> Register Here</a>
      </p>
      <h3 style="font-size: x-large" class="home">
        Go Back <a href="../index.php">Home</a>
      </h3>
    </div>
  </body>
</html>
