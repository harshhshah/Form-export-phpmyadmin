<?php
require('authenticate.php');
?>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
  <body>
      
    <form method="POST"action="download.php">
            <input type="submit" name="Export" value="Export" class="btn btn-primary"/>
            <a href="logout.php" class="btn btn-primary">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
    <table class="table table-striped">

<?php
$con=mysqli_connect("localhost","happimob_happi","77028106*Ab");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM `happimob_site`.`form3`");
$user_arr = array();
echo "
<tr>
<th>Customer Name</th>
<th>Mobile Number</th>
<th>Location</th>
<th>Pincode</th>
<th>Blood group</th>
</tr>";
$user_arr[] = array('customer name','phone number','location','pincode','blood group');

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['cname'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['location'] . "</td>";
  echo "<td>" . $row['pincode'] . "</td>";
  echo "<td>" . $row['blood'] . "</td>";
  echo "</tr>";
  $user_arr[] = array($row['cname'],$row['phone'],$row['location'],$row['pincode'],$row['blood']);
  }
echo "</table>";
$serialize_user_arr = serialize($user_arr);
mysqli_close($con);
?>
<textarea name='export_data' style='display: none;'><?php echo $serialize_user_arr; ?></textarea>
</form>
</body>
</html>