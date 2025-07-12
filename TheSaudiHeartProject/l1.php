<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>Connect to MySQL</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "your_username_here";
$password = "your_password_here";
$company = "Company";

// Create connection
$conn = new mysqli($servername, $username, $password , $company);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//----------------------------------------------------------------------------------------
/*
// Create database
$sql = "CREATE DATABASE Company";
if ($conn->query($sql) === TRUE) {
 echo "Database created successfully";
} else {
 echo "Error creating database: " . $conn->error;
}
//----------------------------------------------------------------------------------------
*/
// sql to create table
/*
$sql = "CREATE TABLE Employee_Table (
Emploey_ID INT UNSIGNED NOT NULL  PRIMARY KEY,
First_Name VARCHAR(100) NOT NULL,
Last_Name VARCHAR(100) NOT NULL,
Email VARCHAR(100) NOT NULL,
Phone_Number float  NOT NULL  ,
Hair_date DATE NOT NULL,
Job_ID VARCHAR(100) NOT NULL,
Salary float NOT NULL,
commission_pct float NOT NULL,
Manager_ID INT NOT NULL,
Department_ID INT  )";


if ($conn->query($sql) === TRUE) {
  echo "Table Employee_Table  created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
*/
// Insert value to table
$sql = "INSERT INTO employee_table (Emploey_ID,First_Name, Last_Name, Email,Phone_Number,Hair_date,Job_ID,Salary,commission_pct,Manager_ID,Department_ID)
VALUES ('100', 'Steven', 'King','SKING','515,4567','1987-06-17','AD_PRES','24000,00','0,00','0','90')";
//VALUES ('101', 'Neena', 'Kochhar','NKOCH','515.123.4568','1987-06-18','AD_VP','17000.00','0.00','100','90')";
//VALUES ('102', 'Ghosson', 'Banjar','GHBANJAR','515.123.4567','1999-05-23','VIP','30000.00','0.00','100','90')";
//VALUES ('103', 'GHADI', 'Banjar','GHABANJAR','515.123.4577','2001-05-23','PLATINUM','5000.00','0.00','100','90')";
//VALUES ('104', 'AZIZ', 'MAHMD','AMOHAMAD','515.123,47777','2008-05-23','bronze','5600.00','0.00','100','60')";
//VALUES ('100', 'Steven', 'King','SKING','515,4567','1987-06-17','AD_PRES','24000,00','0,00','0','90')";
//-----------------------------------------------------------------------------------------

//sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'"; // Display just

//$sql = "UPDATE Employee_Table SET commission_pct='0.10'";	 //change the commission_pct for all employee

//$sql = "UPDATE Employee_Table SET Salary='15000.001' WHERE Department_ID='90'";	 //change the salary for emploeyy has dwpID90

$sql = "SELECT  Last_Name FROM employee_table WHERE Salary<'25000' AND Hair_date BETWEEN '1987-01-01'AND'1987-12-31'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo" This is the list of last name of all employee who has salary <br> less than 250000 and worn in 1987 <br>";
    while($row = $result->fetch_assoc()) {
        echo "<br> The Last name: ". $row["Last_Name"]. " <br>";
        
    }
} else {
    echo "0 results";
}

//sql = 'DROP TABLE employee_table';*/
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "<br> Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>
