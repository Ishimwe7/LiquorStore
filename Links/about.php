<!DOCTYPE html>
<html>
  <head>
    <title>about us</title>
    
    <link rel="stylesheet" href="../CSS/styles.css" />
    <style>
      p img {
        width: 225px;
        height: 185px;
        border-radius: 25px;
      }
      .founder {
        float: left;
        margin-right: 50px;
      }
      h1 {
        text-align: center;
        font-size: 2cm;
      }
      body {
        background-color: white;
      }
      p {
        font-size: 25px;
        font-weight: bold;
      }
      .whole .home a:hover {
        color: red;
      }
      .whole{
        display: flex;
        padding-top: 10px;
        padding-left: 10px;
      }
      h2.titles{
        text-decoration: underline;
      }
      .home{
        padding-top: 140px;
        padding-right: 30px;
      }

    </style>
  </head>
  <body>
  <div class="container">
    <div class="logo">
        <img src="pictures/logo.PNG" width="100px" alt="">
    </div>
    <div class="menu">
                        <ul>
                                <li><a class="un_drop" href="../index.php">HOME</a></li>
                                <div class="drop" >
                                <li> <a id="products" >OUR PRODUCTS</a>
                                    <ul id="drop_list">
                                            <li><a href="#">Water</a></li>
                                            <li><a href="#">Milk</a></li>
                                            <li><a href="#">Carbonated Drinks</a></li>
                                            <li><a href="#">Juice and plent drinks</a></li>
                                            <li><a href="#">Beers</a></li>
                                            <li><a href="#">Ciders</a></li>
                                            <li><a href="#">Wines</a></li>
                                            <li><a href="#">Spirits</a></li>
                                    </ul>
                                </li>
                            </div>
                            <!--<a href="/Links/clients.html">CLIENTS</a> -->
                            <div class="un_drop">
                                <li><a href="vendor.php">VENDORS</a></li>
                                <li><a href="owner.php">OWNER</a></li>
                                <li><a href="#">ABOUT US</a></li>
                                <li><a href="contacts.php">CONTACT US</a></li>
                            </div>
                        </ul>
    </div>
    </div>
    <div class="whole" >
      <div class="founder">
        <p>
          <img
            src="../pictures/WhatsApp Image 2023-04-11 at 09.09.08.jpg"
            alt=""
          />
        </p>
        <p style="font-size: 23px">Eng.Ny@nja~Cy@ne</p>
        <p style="font-size: 15px">
          C.E.O and Founder of <br><a style="color: chocolate;" href="../index.php"> The Liqour Store</a>
        </p>
      </div>
      <div class="b_text" >
        <h2 class="titles" style="color:chocolate">Overview</h2>
        <p>
          <a style="color:chocolate;" href="../index.php"> The Liqour Store</a> is a project designed to
          create an online presence for liquor stores worldwide. <br />
          It lets customers order liquor products online and have them shipped to
          their address of preference. <br />
          Our project falls under the category of e-commerce.<br />
          <br />
        </p>
        <h2 class="titles" style="color:chocolate">Our Goals</h2>
        <p>
          1. The project should give an option for customers around the world to
          order liquor products. <br /> <br>
          2.The project should allow shop owners to manage their products and
          receive customer payments. <br />
        </p>
        <h3 style="text-align: right" class="home">
          Go Back <a style="color: chocolate;" href="../index.php">Home</a>
        </h3>
      </div>
    </div>
  </body>
</html>
