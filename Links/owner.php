<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/styles.css" />
  </head>
  <body class="body">
    <div class="form">
      <h1>WELCOME AGAIN!</h1>
      <h2>Please Login Here</h2>
      <br />
      <form action="">
        <label for="email">Email:</label>
        <input
          style="font-size: larger"
          type="email"
          placeholder="Enter email here"
          name="email"
        /><br />
        <br />
        <label for="password">Password:</label>
        <input
          style="font-size: larger"
          type="text"
          placeholder="Please enter password"
          name="password"
        /><br />
        <br />
        <p class="buttons">
          <input style="font-size: xx-large" type="submit" value="Login" />
          <input
            style="font-size: xx-large"
            type="reset"
            value="Clear Form"
          /><br />
        </p>
      </form>
      <h3 class="home">Go Back <a href="../index.php">Home</a></h3>
    </div>
  </body>
</html>
