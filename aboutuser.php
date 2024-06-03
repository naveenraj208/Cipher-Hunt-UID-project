<!DOCTYPE html>
<html>
<head>
  <title>About User Page</title>
        <style>
            * {
              font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            body {
              background-color: #f2f2f2;
            }
           
            .column1{
              border: 1px solid #021223;
              background-image:url(data:image/jpeg;base64,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);
              background-repeat: no-repeat;
              background-size: cover;      
              height: 650px;
              width: 240px;
              color: aliceblue;
              animation: slideIn 1s ease-in-out;
              margin-left: -7px;
              font-size: larger;
              text-align: center;
              position: absolute;
               top: 50%;
               left: 50%;
               transform: translate(-50%, -50%);

              }
            
            
            body {
              background-image: url("data:image/jpeg;base64,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");
              background-repeat: no-repeat;
              background-size: cover;
            }
            body {
              overflow-x: hidden; /* Disable horizontal scrolling */
            }
            
          </style>
</head>
<body>
  <div class="container">
    <h2>About User</h2>
    <?php 
    $cook=shell_exec("cat cookie");
    $email1=trim($cook);
    
  
      $con= mysqli_connect('localhost','root','','user');
      
      if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}


  $sql="select * from account where email='".$email1."';";
  //echo $sql;
  $result1=mysqli_query($con,$sql);

 $result=mysqli_fetch_assoc($result1);
  
  echo "<div>
  <div style='color:white;text-align:center;font-size:30px;font-family: Arial, sans-serif'>
  <h2>About User</h2>
      <p>NAME:  ".$result["name"]." </p>
      <p>PHONE NUMBER:  ".$result["phone"]."</p>
      <p>EMAIL:  ".$result["email"]."</p>
      <p>ID:  ".$result["id"]."</p>
      <p>LOCATION:  ".$result["location"]."</p>
      <p>DESIGNATION:  ".$result["designation"]."</p>
      <p>ORGANIZATON:  ".$result["organization"]."</p>
    </div>
    </div>";

mysqli_close($conn);

  ?>
  
</div>
  </script>
</body>
</html>