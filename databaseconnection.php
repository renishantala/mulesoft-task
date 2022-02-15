<?php
$con=mysqli_connect("localhost","root","","muledemodatabase");
if($con)
{
	echo "connection is done";
}
else
{
	echo "connection is not done";
}

//create database

$query="create database muledemodatabase ";
if(mysqli_query($con,$query))
{
	echo"database created.<br>.";
}
else{
	echo "database not created.<br>.";
}


//create Table 
$queryinsert="CREATE TABLE Movies( ".
            "name varchar(100) NOT Null, ".
            "actor VARCHAR(100) NOT NULL, ".
            "actress VARCHAR(40) NOT NULL, ".
            "director varchar(50) NOT NULL, ".
            "year int(40) Not Null)";

if(mysqli_query($con,$queryinsert))
{
	echo"Table created.<br>.";
}
else{
	echo "Table  not created.<br>.";
}


//insert data

$insert="insert into Movies values('puhpa','arjun','xyz','abc',2022)";

if(mysqli_query($con,$insert))
{
	echo "Data Inserted.<br>.";
}
else{
	echo "Data  not created.<br>.";
}

//select all data

$queryselect="select * from Movies";
$data1=mysqli_query($con,$queryselect);
 while($option1=mysqli_fetch_array($data1))
 {
   echo $option1[0]."&nbsp";
   echo $option1[1]."&nbsp";
   echo $option1[2]."&nbsp";
   echo $option1[3]."<br>";
 }

//slect movies from actor name

$queryselectname="select name from Movies where actress='xyz'";
$data1=mysqli_query($con,$queryselectname);
 while($option1=mysqli_fetch_array($data1))
 {
   echo $option1[0];
}

?>
