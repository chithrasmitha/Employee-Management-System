<?php
$connect=mysqli_connect("localhost","root","","registration");
$sql="select * from employee where SSN=112233";
$result=mysqli_query($connect,$sql);
$sql1="select * from working_time where ssn=112233";
$result1=mysqli_query($connect,$sql1);
$sql2="select * from department where ssn=112233";
$result2=mysqli_query($connect,$sql2);
$sql3="select * from salary where ssn=112233";
$result3=mysqli_query($connect,$sql3);
$sql4="select * from project where ssn=112233";
$result4=mysqli_query($connect,$sql4);
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



<main id="main-doc">
<nav id="nav-bar">
<header> Dashboard </header>
<div class="nav-link">
    <a href="#empl">Employee</a>
    </div>
    <div class="nav-link">
    <a href="#wrktime"> Working_time</a>
    </div>
     <div class="nav-link">
      <a href="#dept">Department</a>
    </div>
     <div class="nav-link">
    <a href="#slry"> Salary</a>
    </div>
     <div class="nav-link">
    <a href="#pjt"> Project</a>
    </div>
    </nav>

    <div  class="technical-doc">
<br>
<br>
<br>
<br>

    <section class="main-section" id="empl">
    <button><a href="logout.php"> Logout </a></button>
<br>
<br>
<br>
<br>
<br>

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
    <td class="content-table td"><?php echo $row["SSN"];?></td>
    <td class="content-table td"><?php echo $row["Fname"];?> </td>
    <td class="content-table td"><?php echo $row["Lname"];?> </td>
    <td class="content-table td"><?php echo $row["Date_of_Birth"];?></td>
    <td class="content-table td"><?php echo $row["Gender"];?> </td>
    <td class="content-table td"><?php echo $row["Phone"];?> </td>
    <td class="content-table td"><?php echo $row["Email_id"];?> </td>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<section class="main-section" id="wrktime">
<br>
<br>
<br>
<br>
<br>


<h5>Working_time:</h5>
<table class="content-table">
<thead class="content-table thead tr">
<tr>
<th class="content-table th">SSN</th>
<th class="content-table th">Worked_Days</th>
<th class="content-table th">Off_Days</th>
<th class="content-table th">Extra_Days</th>
</tr>
</thead>
<?php
if(mysqli_num_rows($result1)>0)
{
  while($row=mysqli_fetch_array($result1))
  {
    ?>
    <tr>
    <td class="content-table td"><?php echo $row["ssn"];?></td>
    <td class="content-table td"><?php echo $row["worked_days"];?> </td>
    <td class="content-table td"><?php echo $row["off_days"];?> </td>
    <td class="content-table td"><?php echo $row["extra_days"];?></td>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<section class="main-section" id="dept">
<br>
<br>
<br>
<br>
<br>
<h5>Department:</h5>
<table class="content-table">
<thead class="content-table thead tr">
<tr>
<th class="content-table th">Dno</th>
<th class="content-table th">SSN</th>
<th class="content-table th">Dname</th>
<th class="content-table th">Dlocation</th>
</tr>
</thead>
<?php
if(mysqli_num_rows($result2)>0)
{
  while($row=mysqli_fetch_array($result2))
  {
    ?>
    <tr>
    <td class="content-table td"><?php echo $row["dno"];?></td>
    <td class="content-table td"><?php echo $row["ssn"];?> </td>
    <td class="content-table td"><?php echo $row["dname"];?> </td>
    <td class="content-table td"><?php echo $row["dlocation"];?></td>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<section class="main-section" id="slry">
<br>
<br>
<br>
<br>
<br>
<h5>Salary:</h5>
<table class="content-table">
<thead class="content-table thead tr">
<tr>
<th class="content-table th">SSN</th>
<th class="content-table th">Monthly_Salary</th>
<th class="content-table th">Monthly_Deductions</th>
<th class="content-table th">Monthly_Insurances</th>
</tr>
</thead>
<?php
if(mysqli_num_rows($result3)>0)
{
  while($row=mysqli_fetch_array($result3))
  {
    ?>
    <tr>
    <td class="content-table td"><?php echo $row["SSN"];?></td>
    <td class="content-table td"><?php echo $row["Monthly_Salary"];?> </td>
    <td class="content-table td"><?php echo $row["Monthly_Deductions"];?> </td>
    <td class="content-table td"><?php echo $row["Monthly_Insurances"];?></td>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<section class="main-section" id="pjt">
<br>
<br>
<br>
<br>
<br>
<h5>Project:</h5>
<table class="content-table">
<thead class="content-table thead tr">
<tr>
<th class="content-table th">Pno</th>
<th class="content-table th">Pname</th>
<th class="content-table th">Dno</th>
<th class="content-table th">SSN</th>
</tr>
</thead>
<?php
if(mysqli_num_rows($result4)>0)
{
  while($row=mysqli_fetch_array($result4))
  {
    ?>
    <tr>
    <td class="content-table td"><?php echo $row["pno"];?></td>
    <td class="content-table td"><?php echo $row["pname"];?> </td>
    <td class="content-table td"><?php echo $row["dno"];?> </td>
    <td class="content-table td"><?php echo $row["ssn"];?></td>
    </tr>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
</main>

</html>