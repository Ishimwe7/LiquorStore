<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Register</title>
    <link rel="stylesheet" href="../CSS/styles.css" />
  </head>
  <body class="body">
    <div class="form">
      <h1>Please Register here</h1>
      <form action="" method="post">
        <label for="f_name">First name:</label>
        <input
          style="font-size: larger"
          type="text"
          placeholder="Enter first name"
          name="f_name"
          required
        />
        <br />
        <br />
        <label for="s_name">Second name:</label>
        <input
          style="font-size: larger"
          type="text"
          placeholder="Enter second name"
          name="s_name"
        /><br />
        <br />
        <label for="email">Email:</label>
        <input
          style="font-size: larger"
          type="email"
          placeholder="Enter email"
          name="email"
          required
        /><br />
        <br />
        <label for="password">Password:</label>
        <input
          style="font-size: larger"
          type="text"
          minlength="8"
          maxlength="10"
          placeholder="Don't exceed 10 characters"
          name="password"
          required
        /><br />
        <br />
        <label for="password">Re-enter Password:</label>
        <input
          style="font-size: larger"
          type="text"
          minlength="8"
          maxlength="10"
          placeholder="Don't exceed 10 characters"
          name="confirm_password"
          required
        /><br />
        <p class="buttons">
          <div>
            <button style="font-size: x-large" type="submit">Register</button>
            <button style="font-size: x-large" type="reset">Clear Form</button>
          </div>
        </p>
      </form>
      <br />
      <p style="font-size: x-large">
        Already have an Account? <a href="../Links/signIn.php"> Login Here</a>
      </p>
      <h3 class="home">Go Back <a href="../Links/signUp.php">Home</a></h3>
    </div>
  </body>
</html>
