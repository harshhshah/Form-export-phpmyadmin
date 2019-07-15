<?php
$a=$_POST['cname']; 
$b=$_POST['phone']; 
$c=$_POST['location']; 
$d=$_POST['pincode'];
$e=$_POST['blood'];

$link = mysqli_connect("localhost","db_name","password");
 
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
mysqli_select_db("db_name");
$sql = "INSERT INTO `db_name`.`table_name` (cname,phone,location,pincode,blood) VALUES ('$a','$b','$c','$d','$e')";
if(mysqli_query($link, $sql))
{
    echo "Records inserted successfully.";
    ?>
    <script type="text/javascript">
    alert("Response recorded");
    window.location = "#";
    </script>
    <?php
} 
else
{
    echo "Some error occured. Please try again.";
}
mysqli_close($link);
?>