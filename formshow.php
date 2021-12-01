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
<link rel="stylesheet" href="css/Table_style.css">
<body style="background-color:rgb(48, 165, 180)">
<div><input class="some" type="button" onclick="location.href='http://localhost/AICL/Form.php';" value="Return"> 
                    <h1 class="some"><u>Students Table in Database</u></h1><br><br>
                    <form >
                    <?php
                        $show="SELECT * from students";
                        $res=mysqli_query($connect,$show);
                        $table_head="<table><thead><tr><th>Id</th><th>Name</th><th>Department</th></tr></thead><tbody>" ;
                        $table_body="";
                        while($i=mysqli_fetch_assoc($res)){
                            $table_body=$table_body."<tr>
                            <td>".$i['id']."</td>
                            <td>".$i['name']."</td>
                            <td>".$i['department']."</td>
                            </tr>";
                        }
                        $table_foot="</tbody></table>";
                        echo $table_head.$table_body.$table_foot;
                        ?>
                        
                    </form>
                </div>
                
                
    </body>

