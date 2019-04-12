<?php
$link= mysqli_connect("localhost", "root", "root","");
mysqli_select_db($link, "credits");
 ?>
<html>
    <head>
      <title> Transfer credit </title>
     </head> 
     <body>
         <form name='form1'action="" method="post">
             <select>
                 <?php 
                 $res= mysqli_fetch_array($result)
                 
             </select>
         </form>
     </body>
 </html>    