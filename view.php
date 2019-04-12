<html>
<header>
    <div class="container">
      <h1 class="logo"></h1>
       <link rel="stylesheet" href="u.css" type="text/css"/>
        <link rel="stylesheet" href="u.css" type="text/css">
<nav>
        <ul>
          <li><a href="index.php">Home</a></li>
        </ul>
      </nav>
    </div>
  </header>
<body>
<table>
 <tr>
  <th>Id</th> 
  <th>Username</th> 
  <th>current_credit</th>
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "root", "credits");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT cid, name, current_credit FROM users";
  $result = $conn->query($sql);
  if ($result-> num_rows> 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["cid"]. "</td><td>" . $row["name"] . "</td><td>"
. $row["current_credit"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
