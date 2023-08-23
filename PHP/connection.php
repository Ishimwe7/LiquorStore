<?php
    
        $con = mysqli_connect('localhost', 'root', '', 'liquorstore');
        if(isset($_POST['submit'])){
            $shop_name=$_POST['shop_name'];
            $shop_owner=$_POST['shop_owner'];
            $country=$_POST['country'];
            $city=$_POST['city'];
            $address=$_POST['address'];
            $password=md5($_POST['password']);
            $sql = "INSERT INTO `vendors`(`shop_name`, `shop_owner`, `country`, `city`, `address`, `password`) VALUES ('$shop_name','$shop_owner','$country','$city','$address','$password')";
            $query = mysqli_query($con,$sql);
            if($query){
                echo 'Thank you for Registering';
            }
            else{
                echo 'An error occurred';
            }
        }
        
    ?>