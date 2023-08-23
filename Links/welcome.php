<?php
    
        $con = mysqli_connect('localhost', 'root', '', 'liquorstore');
        if(isset($_POST['submit'])){
            $shop_name=$_POST['shop_name'];
            $shop_owner=$_POST['shop_owner'];
            $password =md5($_POST['password']);

            $sql = " SELECT * FROM vendors WHERE shop_name = '$shop_name' AND shop_owner = '$shop_owner' AND password = '$password' ";
            $query = mysqli_query($con,$sql);
            if(mysqli_num_rows($query) > 0){
                include "nav.php";
                echo 'Welcome home!!!';
            }
            else{
                echo 'Invalid login. Please try to use valid credentials';
            }
        }
        ?>

