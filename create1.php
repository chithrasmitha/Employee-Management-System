<?php
$con=mysqli_connect("localhost","root","","registration");
$sql1="select * from employee";
$sql2="select * from working_time";
$sql3="select * from department";
$sql4="call final_sal();";
$sql5="select * from project";

?>
<!DOCTYPE html>
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

<body>
<h2>Employee:</h2>
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
<?php
if($result1=mysqli_query($con,$sql1))
{
  while($row=mysqli_fetch_assoc($result1))
  {
    ?>
    <tr>
    <td class="content-table td"><?php echo $row["SSN"];?></td>
    <td class="content-table td"><?php echo $row["Fname"];?> </td>
    <td class="content-table td"><?php echo $row["Lname"];?> </td>
    <td class="content-table td"><?php echo $row["Date_of_Birth"];?></td>
    <td class="content-table td"><?php echo $row["Gender"];?></td>
    <td class="content-table td"><?php echo $row["Phone"];?></td>
    <td class="content-table td"><?php echo $row["Email_id"];?></td>
    
    </tr>
<tbody>
    <?php
  }
}
?>
</tbody>
</table>





<body>
<h2>Working_Time:</h2>
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
if($result2=mysqli_query($con,$sql2))
{
  while($row=mysqli_fetch_assoc($result2))
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





<body>
<h2>Department:</h2>
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
if($result3=mysqli_query($con,$sql3))
{
  while($row=mysqli_fetch_assoc($result3))
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



<h2>Project:</h2>
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
if($result5=mysqli_query($con,$sql5))
{
  while($row=mysqli_fetch_assoc($result5))
  {
    ?>
    <tr>
    <td class="content-table td"><?php echo $row["pno"];?></td>
    <td class="content-table td"><?php echo $row["pname"];?> </td>
    <td class="content-table td"><?php echo $row["dno"];?> </td>
    <td class="content-table td"><?php echo $row["ssn"];?></td>
    
    
    </tr>
<tbody>
    <?php
  }
}
?>
</tbody>
</table>



<body>
<h2>Salary:</h2>
<table class="content-table">
<thead class="content-table thead tr">
<tr>
<th class="content-table th">SSN</th>
<th class="content-table th">Monthly_Salary</th>
<th class="content-table th">Monthly_Deductions</th>
<th class="content-table th">Monthly_Insurances</th>
<th class="content-table th">Total_Salary</th>

</tr>
</thead>
<?php
if($result4=mysqli_query($con,$sql4))
{
  while($row=mysqli_fetch_assoc($result4))
  {
    ?>
    <tr>
    <td class="content-table td"><?php echo $row["SSN"];?></td>
    <td class="content-table td"><?php echo $row["Monthly_Salary"];?> </td>
    <td class="content-table td"><?php echo $row["Monthly_Deductions"];?> </td>
    <td class="content-table td"><?php echo $row["Monthly_Insurances"];?></td>
    <td class="content-table td"><?php echo $row["total_salary"];?></td>
    
    </tr>
<tbody>
    <?php
  }
}
?>
</tbody>
</table>








</body>
</html>