<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="/CSS/styles.css" />
  </head>
  <body class="body">
    <div class="form">
      <h1>Please Login Here</h1>
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
          <div>
            <button style="font-size: x-large" type="submit">Login</button>
            <button style="font-size: x-large" type="reset">Clear Form</button>
          </div>
        </p>
      </form>
      <br />
      <p style="font-size: x-large">
        You don't have an account?
        <a href="/Links/signUp.html"> Register Here</a>
      </p>
      <h3 class="home">Go Back <a href="/Links/index.html">Home</a></h3>
    </div>
  </body>
</html>
