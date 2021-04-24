<?php
$SSN="";
$Fname="";
$Lname="";
$Date_of_Birth="";
$Gender="";
$Phone="";
$Email_id="";
$Worked_Days="";
$Off_Days="";
$Extra_Days="";
$Dno="";
$Dname="";
$Dlocation="";
$Monthly_Salary="";
$Monthly_Deductions="";
$Monthly_Insurances="";
$Pno="";
$Pname="";



$con=mysqli_connect("localhost","root","","registration");

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



//search
if(isset($_POST['search']))
{
   $info=getData();
   $search_query="SELECT * FROM employee WHERE SSN='$info[1]'";
   $search_result=mysqli_query($con,$search_query);
   if($search_result)
   {
        if(mysqli_num_rows($search_result))
        {
             while($rows=mysqli_fetch_array($search_result))
             {
                  $SSN=$rows['SSN'];
                  $Fname=$rows['Fname'];
                  $Lname=$rows['Lname'];
                  $Date_of_Birth=$rows['Date_of_Birth'];
                  $Gender=$rows['Gender'];
                  $Phone=$rows['Phone'];
                  $Email_id=$rows['Email_id'];
             }
        }
        else{
             echo "No data are available";
        }
   }else{
   echo "Result Error";
   }
}

//insert
if(isset($_POST['insert']))
{
     $info=getData();
     $insert_query="INSERT INTO employee( SSN, Fname, Lname, Date_of_Birth, Gender, Phone, Email_id) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]')";
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
     $delete_query="DELETE FROM employee WHERE SSN='$info[1]'";
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
     $update_query="UPDATE employee SET SSN='$info[1]',Fname='$info[2]',Lname='$info[3]',Date_of_Birth='$info[4]',Gender='$info[5]',Phone='$info[6]',Email_id='$info[7]' WHERE SSN='$info[1]'";
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

















function getData1()
{
     $data1=array();
     $data1[1]=$_POST['SSN'];
     $data1[2]=$_POST['Worked_Days'];
     $data1[3]=$_POST['Off_Days'];
     $data1[4]=$_POST['Extra_Days'];
     
     return $data1;
}



//search
if(isset($_POST['search1']))
{
   $info=getData1();
   $search_query="SELECT * FROM working_time WHERE SSN='$info[1]'";
   $search_result=mysqli_query($con,$search_query);
   if($search_result)
   {
        if(mysqli_num_rows($search_result))
        {
             while($rows=mysqli_fetch_array($search_result))
             {
                  $SSN=$rows['SSN'];
                  $Fname=$rows['Worked_Days'];
                  $Lname=$rows['Off_Days'];
                  $Date_of_Birth=$rows['Extra'];
                  
             }
        }
        else{
             echo "No data are available";
        }
   }else{
   echo "Result Error";
   }
}

//insert
if(isset($_POST['insert1']))
{
     $info=getData1();
     $insert_query="INSERT INTO working_time( SSN, Worked_Days,Off_Days,Extra_Days) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]')";
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
if(isset($_POST['delete1']))
{
     $info = getData1();
     $delete_query="DELETE FROM working_time WHERE SSN='$info[1]'";
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
if(isset($_POST['update1'])){
     $info=getData1();
     $update_query="UPDATE working_time SET SSN='$info[1]',Worked_Days='$info[2]',Off_Days='$info[3]',Extra_Days='$info[4]' WHERE SSN='$info[1]'";
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










function getData2()
{
     $data2=array();
     $data2[1]=$_POST['Dno'];
     $data2[2]=$_POST['SSN'];
     $data2[3]=$_POST['Dname'];
     $data2[4]=$_POST['Dlocation'];
     
     return $data2;
}
//insert
if(isset($_POST['insert2']))
{
     $info=getData2();
     $insert_query="INSERT INTO department( Dno,SSN,Dname,Dlocation) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]')";
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
if(isset($_POST['delete2']))
{
     $info = getData2();
     $delete_query="DELETE FROM department WHERE dno='$info[1]'";
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
if(isset($_POST['update2'])){
  $info=getData2();
  $update_query="UPDATE department SET Dno='$info[1]',SSN='$info[2]',Dname='$info[3]',Dlocation='$info[4]' WHERE SSN='$info[2]'";
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










function getData3()
{
     $data3=array();
     $data3[1]=$_POST['SSN'];
     $data3[2]=$_POST['Monthly_Salary'];
     $data3[3]=$_POST['Monthly_Deductions'];
     $data3[4]=$_POST['Monthly_Insurances'];
     
     return $data3;
}
//insert
if(isset($_POST['insert3']))
{
     $info=getData3();
     $insert_query="INSERT INTO salary(SSN,Monthly_Salary,Monthly_Deductions,Monthly_Insurances) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]')";
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
if(isset($_POST['delete3']))
{
     $info = getData3();
     $delete_query="DELETE FROM salary WHERE SSN='$info[1]'";
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
if(isset($_POST['update3'])){
  $info=getData3();
  $update_query="UPDATE salary SET SSN='$info[1]',Monthly_Salary='$info[2]',Monthly_Deductions='$info[3]',Monthly_Insurances='$info[4]' WHERE SSN='$info[1]'";
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







function getData4()
{
     $data4=array();
     $data4[1]=$_POST['Pno'];
     $data4[2]=$_POST['Pname'];
     $data4[3]=$_POST['Dno'];
     $data4[4]=$_POST['SSN'];
     
     return $data4;
}
//insert
if(isset($_POST['insert4']))
{
     $info=getData4();
     $insert_query="INSERT INTO project(Pno,Pname,Dno,SSN) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]')";
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
if(isset($_POST['delete4']))
{
     $info = getData4();
     $delete_query="DELETE FROM project WHERE Pno='$info[1]'";
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
if(isset($_POST['update4'])){
  $info=getData4();
  $update_query="UPDATE project SET Pno='$info[1]',Pname='$info[2]',Dno='$info[3]',SSN='$info[4]' WHERE Pno='$info[1]'";
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
<title>Admin</title>

</head>
<body>
<h1>ADMIN PAGE<h1>
<button ><a href="logout.php"> Logout </a></button>
<br>
<button ><a href="create1.php">View </a></button>
<h3 align="center">Employee:</h3>
<form method="post" action="try.php" align="center">
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


</div>
</form>
<br>
<br>
<br>




<h3 align="center">Working_time:</h3>
<form method="post" action="try.php" align="center">
<input type="text" name="SSN" placeholder="SSN" value="<?php echo($SSN);?>"><br><br>
<input type="text" name="Worked_Days" placeholder="Worked_Days" value="<?php echo($Worked_Days);?>"><br><br>
<input type="text" name="Off_Days" placeholder="Off_Days" value="<?php echo($Off_Days);?>"><br><br>
<input type="text" name="Extra_Days" placeholder="Extra_Days" value="<?php echo($Extra_Days);?>"><br><br>

<div>
<input type="submit" name="insert1" value="Insert" >

<input type="submit" name="delete1" value="Delete">

<input type="submit" name="update1" value="Update">


</div>
</form>
<br>
<br>
<br>




<h3 align="center">Department:</h3>
<form method="post" action="try.php" align="center">
<input type="text" name="Dno" placeholder="Dno" value="<?php echo($Dno);?>"><br><br>
<input type="text" name="SSN" placeholder="SSN" value="<?php echo($SSN);?>"><br><br>
<input type="text" name="Dname" placeholder="Dname" value="<?php echo($Dname);?>"><br><br>
<input type="text" name="Dlocation" placeholder="Dlocation" value="<?php echo($Dlocation);?>"><br><br>

<div>
<input type="submit" name="insert2" value="Insert" >

<input type="submit" name="delete2" value="Delete">

<input type="submit" name="update2" value="Update">


</form>
<br>
<br>
<br>











<h3 align="center">Project:</h3>
<form method="post" action="try.php" align="center">

<input type="text" name="Pno" placeholder="Pno" value="<?php echo($Pno);?>"><br><br>
<input type="text" name="Pname" placeholder="Pname" value="<?php echo($Pname);?>"><br><br>
<input type="text" name="Dno" placeholder="Dno" value="<?php echo($Dno);?>"><br><br>
<input type="text" name="SSN" placeholder="SSN" value="<?php echo($SSN);?>"><br><br>
<div>
<input type="submit" name="insert4" value="Insert" >

<input type="submit" name="delete4" value="Delete">

<input type="submit" name="update4" value="Update">


</div>
</form>
<br>
<br>
<br>




<h3 align="center">Salary:</h3>
<form method="post" action="try.php" align="center">

<input type="text" name="SSN" placeholder="SSN" value="<?php echo($SSN);?>"><br><br>
<input type="text" name="Monthly_Salary" placeholder="Monthly_Salary" value="<?php echo($Monthly_Salary);?>"><br><br>
<input type="text" name="Monthly_Deductions" placeholder="Monthly_Deductions" value="<?php echo($Monthly_Deductions);?>"><br><br>
<input type="text" name="Monthly_Insurances" placeholder="Monthly_Insurances" value="<?php echo($Monthly_Insurances);?>"><br><br>
<div>
<input type="submit" name="insert3" value="Insert" >

<input type="submit" name="delete3" value="Delete">

<input type="submit" name="update3" value="Update">


</div>
</form>
<br>
<br>
<br>







</body>
</html>