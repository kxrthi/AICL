<?php
$end_point ="localhost" ; //127.0.0.1, 0.0.0.0
$user_name ="root";
$user_pass =""; //12345
$dbname = "aicl_query";
//creating a connection
$connect = new mysqli($end_point,$user_name,$user_pass,$dbname);
if ($connect -> connect_error){
    echo "connection Failed!";
    die("Connection Failed!". $connect->connect_error);
}
else{
}

?>

<link rel="stylesheet" href="css/Signin_style.css">



<body style="background-color:rgb(48, 165, 180)">
                <div class="box">
                <h1>Enter Details</h1>
                    <hr><br><br><br>
                    <form action=""method="post" >
                    <label class="font">Register Number :</label>
                    <input class="font" type="Number" name="reg"required><br>
                    <label class="font">Name :</label>
                    <input class="font" type="text" name="fullna"required><br>
                    <label class="font">Department Name :</label>
                    <input class="font"type="text"  name="dep"required>
                    <br><br><br>
                    <?php    
                        if(isset($_POST["fullna"])){
                        $id=$_POST["reg"];
                        $name=$_POST["fullna"];
                        $department=$_POST["dep"];
                        $sql="INSERT INTO `students` (`id`, `name`, `department`) VALUES ('".$id."','".$name."','".$department."')";
                        if($connect->query($sql)==TRUE)
                        {
                            
                        }
                        else{
                            echo"<script>alert('Connection to DB Failed.')</script>";
                        }
                        }
                        ?>
                    <input class="font" type="submit" value="Insert">
                    <br>
                    <input class="font" type="button" onclick="location.href='http://localhost/AICL/formshow.php';" value="Show Current Database">
                    <br>
                    <input class="font" type="button" onclick="location.href='http://localhost/AICL/';" value="HomePage">
                    </form>
                </div>
    
   
    </body>
   
               