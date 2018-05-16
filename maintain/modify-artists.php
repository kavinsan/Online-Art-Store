<?php require_once('connect.php'); ?>
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
        <td>Enter Artist name</td>
        <td><input type="text" name="t1"></td>
      </tr>
      <tr>
        <td>Enter Date</td>
        <td><input type="text" name="t2"></td>
      </tr>
      <tr>
        <td>Enter Location</td>
        <td><input type="text" name="t3"></td>
      </tr>
      <tr>
        <td>Enter Genres</td>
        <td><input type="text" name="t4"></td>
      </tr>
      <tr>
        <td>Enter Famous Pieces</td>
        <td><input type="text" name="t5"></td>
      </tr>
      <tr>
        <td>Enter Image Sorce</td>
        <td><input type="text" name="t6"></td>
      </tr>
      <tr>
        <td>Enter Name Link</td>
        <td><input type="text" name="t7"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit1" value="insert"></td>
      </tr>
    </table>
  </form>

  <form class="form2" name="form2" action="" method="post">
    <table>
      <tr>
        <td>Enter Artist ID to delete</td>
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
        <td>Enter Artist ID to update</td>
        <td><input type="text" name="tupdate1"></td>
      </tr>
      <tr>
        <td>Enter value to update in that Artist database</td>
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
    mysqli_query($dbcon,"insert into artists values('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]','$_POST[t7]', NULL)");
  }
  if (isset($_POST["submit2"]))
  {
    if(is_numeric($_POST[tdelete])){
      mysqli_query($dbcon,"delete from artists where artist_id='$_POST[tdelete]'");
    }
    else{
      echo "<script>
      alert('ENTER A NUMBER');
      </script>";
    }
  }
  if (isset($_POST["submit3"]))
  {
    mysqli_query($dbcon,"update artists set $_POST[tupdate2]='$_POST[tupdate3]' where artist_id='$_POST[tupdate1]'");
  }
   ?>
   <li><a class"link" href="get-info-artists.php"> CLICK HERE TO SEE THE TABLE FOR DATA </a></li>
</body>
</html>
