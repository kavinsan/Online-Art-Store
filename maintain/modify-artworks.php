<?php require_once('connect.php');

$dbcon = @mysqli_connect('localhost:3306', DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL ' .
        mysqli_connect_error());
mysqli_select_db($dbcon, "ass2");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="modify.css">
</head>
<body>
<div class="tablediv">
  <form class="form1" name="form1" action="" method="post">
    <table>
      <tr>
        <td>Enter Artwork name</td>
        <td><input type="text" name="t1"></td>
      </tr>
      <tr>
        <td>Enter Description</td>
        <td><input type="text" name="t2"></td>
      </tr>
      <tr>
        <td>Enter Price</td>
        <td><input type="text" name="t3"></td>
      </tr>
      <tr>
        <td>Enter Artists</td>
        <td><input type="text" name="t4"></td>
      </tr>
      <tr>
        <td>Enter Date Produced</td>
        <td><input type="text" name="t5"></td>
      </tr>
      <tr>
        <td>Enter Dimensions</td>
        <td><input type="text" name="t6"></td>
      </tr>
      <tr>
        <td>Enter Location</td>
        <td><input type="text" name="t7"></td>
      </tr>
      <tr>
        <td>Enter Genre</td>
        <td><input type="text" name="t8"></td>
      </tr>
      <tr>
        <td>Enter Image Source</td>
        <td><input type="text" name="t9"></td>
      </tr>
      <tr>
        <td>Enter Link to Picture</td>
        <td><input type="text" name="t10"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit1" value="insert"></td>
      </tr>
    </table>
  </form>

  <form class="form2" name="form2" action="" method="post">
    <table>
      <tr>
        <td>Enter artwork ID to delete</td>
        <td><input type="text" name="tdelete"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit2" value="delete"></td>
      </tr>
    </table>
  </form>
  <form class="form3" name="form3" action="" method="post">
    <table>
      <tr>
        <td>Enter artwork ID to update</td>
        <td><input type="text" name="tupdate1"></td>
      </tr>
      <tr>
        <td>Enter value to update in that artwork</td>
        <td><input type="text" name="tupdate2"></td>
      </tr>
      <tr>
        <td>Enter value to replace it with</td>
        <td><input type="text" name="tupdate3"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit3" value="update"></td>
      </tr>
    </table>
  </form>
</div>
  <?php
  if (isset($_POST["submit1"]))
  {
    mysqli_query($dbcon,"insert into artworks values('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]','$_POST[t7]','$_POST[t8]','$_POST[t9]','$_POST[t10]', NULL)");
  }
  if (isset($_POST["submit2"]))
  {
    if(is_numeric($_POST[tdelete])){
      mysqli_query($dbcon,"delete from artworks where artwork_id='$_POST[tdelete]'");
    }
    else{
      echo "<script>
      alert('ENTER A NUMBER');
      </script>";
    }
  }
  if (isset($_POST["submit3"]))
  {
    mysqli_query($dbcon,"update artworks set $_POST[tupdate2]='$_POST[tupdate3]' where artwork_id='$_POST[tupdate1]'");
  }
   ?>
   <li><a class"link" href="get-info-artworks.php"> CLICK HERE TO SEE THE TABLE FOR DATA </a></li>
</body>
</html>
