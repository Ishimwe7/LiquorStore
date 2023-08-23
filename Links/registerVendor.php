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
      <form action="../PHP/connection.php" method="POST">
        <div>
          <label for="shop_name">Shop name:</label>
          <input
            style="font-size: large"
            type="text"
            autofocus
            placeholder="Enter Shop name"
            name="shop_name"
            required
          />
        </div>
        <br />
        <div>
          <label for="shop_owner">Shop Owner:</label>
          <input
            style="font-size: large"
            type="text"
            placeholder="Enter Shop Owner's names"
            name="shop_owner"
            required
          />
        </div>
        <br />
        <div>
          <label for="country">Country:</label>
          <select style="font-size: large" name="country" id="country">
            <optgroup label="Africa">
              <option selected value="1">Rwanda</option>
              <option value="2">Uganda</option>
              <option value="3">Kenya</option>
              <option value="4">Tanzania</option>
              <option value="5">Burundi</option>
              <option value="6">DR Congo</option>
              <option value="7">Congo</option>
              <option value="8">Sudan</option>
            </optgroup>
            <optgroup label="Others">
              <option value="9">United States</option>
              <option value="10">United Kingdom</option>
              <option value="11">Italy</option>
              <option value="12">Australia</option>
              <option value="13">New Zealand</option>
              <option value="14">Japan</option>
              <option value="15">China</option>
              <option value="16">India</option>
            </optgroup>
          </select>
        </div>
        <br />
        <div>
          <label for="city">City:</label>
          <input
            style="font-size: large"
            type="text"
            placeholder="Enter your Residental City"
            name="city"
            required
          />
        </div>
        <br />
        <div>
          <label for="address">Address:</label>
          <input
            style="font-size: large"
            type="text"
            placeholder="Enter your Address"
            name="address"
            required
          />
        </div>
        <br />
        <div>
          <label for="password">Password:</label>
          <input
            style="font-size: large"
            type="password"
            minlength="8"
            maxlength="10"
            placeholder="Please don't exceed 10 characters"
            name="password"
            required
          />
        </div>
        <br />
        <div>
          <label for="pass_confirm">Re-enter password:</label>
          <input
            style="font-size: large"
            type="password"
            minlength="8"
            maxlength="10"
            placeholder="Confirm your password"
            name="pass_confirm"
            required
          />
        </div>
        <br />
        <p class="buttons">
          <div>
            <button style="font-size: x-large" name="submit" type="submit">Register</button>
            <button style="font-size: x-large" type="reset">Clear Form</button>
          </div>
        </p>
      </form>
      <p style="font-size: x-large">
        Already have an Account?
        <a href="loginVendor.php"> Login Here</a>
      </p>
      <h3 style="font-size: x-large;" class="home">
        Go Back <a href="../index.php">Home</a>
      </h3>
    </div>
  </body>
</html>
