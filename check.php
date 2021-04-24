<?php
$SSN="";
$Fname="";
$Lname="";
$Date_of_Birth="";
$Gender="";
$Phone="";
$Email_id="";

$con=mysqli_connect("localhost","root","","registration");
$sql="select * from sample1";
$result=mysqli_query($con,$sql);

function getData()
{
     $data=array();
     $data[1]=$_POST['SSN'];
     $data[2]=$_POST['Fname'];
     $data[3]=$_POST['Lname'];
     $data[4]=$_POST['Date_of_Birth'];
     $data[5]=$_POST['Gender'];
     $data[6]=$_POST['Phone'];
     $data[7]=$_POST['Email_id'];
     return $data;
}

//insert
if(isset($_POST['insert']))
{
     $info=getData();
     $insert_query="INSERT INTO sample1( SSN, Fname, Lname, Date_of_Birth, Gender, Phone, Email_id) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]')";
     try{
          $insert_result=mysqli_query($con,$insert_query);
          if($insert_result){
               if(mysqli_affected_rows($con)>0){
                    echo "data inserted succesfully";
               }else{
                    echo "data are not inserted";
               }
          }
     }catch(Exception $ex){
          echo("error inserted".$ex->getMessage());
     }
}

//Delete
if(isset($_POST['delete']))
{
     $info = getData();
     $delete_query="DELETE FROM sample1 WHERE Fname='$info[2]'";
     try{
          $delete_result=mysqli_query($con,$delete_query);
          if($delete_result){
               if(mysqli_affected_rows($con)>0){
                    echo "data deleted";

               }
               else{
                    echo "data not deleted";
               }
          }
     } catch(Exception $ex){
          echo("error in delete".$ex->getMessage());
     }
}

//edit
if(isset($_POST['update'])){
     $info=getData();
     $update_query="UPDATE sample1 SET SSN='$info[1]',Fname='$info[2]',Lname='$info[3]',Date_of_Birth='$info[4]',Gender='$info[5]',Phone='$info[6]',Email_id='$info[7]' WHERE SSN='$info[1]'";
     try{
          $update_result=mysqli_query($con,$update_query);
          if($update_result){
               if(mysqli_affected_rows($con)>0){
                    echo "Data updated";
               }else{
                    echo "Data not updated";
               }
          }
     }
     catch(Exception $ex){
          echo("Error in update".$ex->getMessage);
     }
}




?>


<!DOCTYPE html>
<html>
<head>

<title>fetching data</title>
</head>

<style>
.content-table{
  border-collapse: collapse;
  margin:25px 0;
  font-size:1em;
  min-width:100px;
  }
.content-table thead tr{
  background-color:#009879;
  color:#ffffff;
  text-align:left;
  font-weight: bold;
}
.content-table th{
  padding: 12px 15px;

}

.content-table td{
  padding: 12px 15px;
  
}

.content-table tbody tr{
  border-bottom:1px solid #dddddd;

}


#main-doc{
  height:100%;
  width:100%;
} 

#nav-bar{
  position:fixed;
  width:200px;
    height:100%;
  
  text-align:center;
}

.technical-doc{
  width:75%;
  
  margin-left:220px;
}

header{
  font-weight:bold;
  font-size:20px;
}

p{
  font-size:15px;
}

.nav-link{
  margin-top:10px;
  margin-bottom:20px;
  font-size:20px;
}

a{
  text-decoration:none;
}

@media only screen and (max-width: 500px){
  #ele{
    display:none;
  }
}
</style>
<title>crud operations</title>
</head>
<body>

<h1>Employee:</h1>
<form method="post" action="check.php">
<input type="text" name="SSN" placeholder="SSN" value="<?php echo($SSN);?>"><br><br>
<input type="text" name="Fname" placeholder="Fname" value="<?php echo($Fname);?>"><br><br>
<input type="text" name="Lname" placeholder="Lname" value="<?php echo($Lname);?>"><br><br>
<input type="date" name="Date_of_Birth" placeholder="Date_of_Birth" value="<?php echo($Date_of_Birth);?>"><br><br>
<input type="text" name="Gender" placeholder="Gender" value="<?php echo($Gender);?>"><br><br>
<input type="text" name="Phone" placeholder="Phone" value="<?php echo($Phone);?>"><br><br>
<input type="text" name="Email_id" placeholder="Email_id" value="<?php echo($Email_id);?>"><br><br>
<div>
<input type="submit" name="insert" value="Insert" >

<input type="submit" name="delete" value="Delete">

<input type="submit" name="update" value="Update">

<input type="submit" name="find" value="Find">
</div>


<h5>Employee:</h5>
<table class="content-table">
<thead class="content-table thead tr">
<tr>
<th class="content-table th">SSN</th>
<th class="content-table th">Fname</th>
<th class="content-table th">Lname</th>
<th class="content-table th">Date_of_Birth</th>
<th class="content-table th">Gender</th>
<th class="content-table th">Phone</th>
<th class="content-table th">Email_id</th>
</tr>
</thead>
<tbody>
<?php
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_array($result))
  {
    ?>
    <tr>
    <td class="content-table td"><?php echo $row['SSN'];?></td>
    <td class="content-table td"><?php echo $row['Fname'];?> </td>
    <td class="content-table td"><?php echo $row['Lname'];?> </td>
    <td class="content-table td"><?php echo $row['Date_of_Birth'];?></td>
    <td class="content-table td"><?php echo $row['Gender'];?> </td>
    <td class="content-table td"><?php echo $row['Phone'];?> </td>
    <td class="content-table td"><?php echo $row['Email_id'];?> </td>
    </tr>
<tbody>
    <?php
    
  }
}

?>
</tbody>
</table>
</section>

<br>
<br>
<br>
<br>
<br>
</body>
</html>
