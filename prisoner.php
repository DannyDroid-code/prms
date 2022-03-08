<?php include 'connection.php';?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >
    <title>Prisoner</title>
    <style>
       body {
         display: block;
         text-align:center;
       }
        input{
    width: 30%;
    height: 5%;
    border-radius: 1px;
    padding: 8px 15px 8px 15px;
    box-shadow: 1px 1px 1px 1px;
  
        }
    </style>
  </head>
  <body>
    <div class="container my-5">  
    <form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>Firstname</label>
    <input type="text " class="form-control-sm"
    placeholder="Enter Firstname" name="firstname">
   
</div>
<div class="form-group">
    <label>Lastname</label>
    <input type="text " class="form-control-sm"
    placeholder="Enter Lastname" name="lastname">
   
</div>
<div class="form-group">
<label for=> Select  gender </label>
<select name="gender">
	<option value="none" selected>Gender</option>
	<option value="male">Male</option>
	<option value="female">Female</option>
	<option value="other">other</option>
</select>
</div>
<div class="form-group">
<<label>Date of birth:</label>
<input type="date"  name="DOB"
       value="2022-05-01"
       min="1930-01-01" max="3080-12-31">
       </div>
<div class="form-group">
    <label>National ID</label>
    <input type="text " class="form-control-sm"
    placeholder="Enter National Id" name="nationalid">
   
</div>
<div class="form-group">
    <label>Address</label>
    <input type="text " class="form-control-sm"
    placeholder="Enter the address" name="address">
   
</div>
<div class="form-group">
<<label>Date In:</label>
<input type="date"  name="datein"
       value="2022-05-01"
       min="1930-01-01" max="3080-12-31">
       </div>
    
       <div class="form-group">
<<label>Date Out:</label>
<input type="date"  name="dateout"
       value="2022-05-01"
       min="1930-01-01" max="3080-12-31">
       </div>

<div class="form-group">
    <label>Cell ID</label>
    <input type="text " class="form-control-sm"
    placeholder="Enter cellid" name="cellid">
   
</div>

<div class="form-group">
    <label>Crime</label>
    <input type="text " class="form-control-sm"
    placeholder="Enter Crime committed" name="crime">
   
</div>

<div class="form-group">
    <label>Height</label>
    <input type="text " class="form-control-sm"
    placeholder="Enter height" name="height">
   
</div>


<div class="form-group">
    <label>Weight</label>
    <input type="text " class="form-control-sm"
    placeholder="Enter weight" name="weight">
   
</div>

  <div class="form-group">
    <label >Choose Image</label>
    <input type="file" class="form-control-sm" id="image" >

  </div>
</form>

 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>

  </body>
</html>
 
<?php
if(isset($_POST['submit'])){ 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$DOB = $_POST['DOB'];
$address= $_POST['address'];
$nationalid = $_POST['nationalid'];
$datein = $_POST['datein'];
$dateout = $_POST['dateout'];
$cellid = $_POST['cellid'];
$crime =$_POST['crime'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$file= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

$query="INSERT INTO `prisoner`( `firstname`, `lastname`, `gender`, `DOB`, `address`, `nationalid`, `datein`, `dateout`, `cellid`, `crime`, `height`, `weight`, `image`) 
VAlUES('$firstname','$lastname','$gender','$DOB','$address',$nationalid','$datein','$dateout','$cellid','$crime','$height','$weight','$file')";
 $result = mysqli_query($con,$query);

if($result)
{ 
    echo 'script type= "text/jaavascript"> alert("Submitted Successfully") </script>';
} 
else
{
  die(mysqli_error($con));    
}
}
?> 