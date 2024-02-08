<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "Registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// Create - Insert a new record:
$sql = "INSERT INTO Registration (Name, Email, DateOfBirth) VALUES ('John Doe', 'john.doe@example.com', '1990-01-01')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


// Retrieve records
$sql = "SELECT ID, Name, Email, DateOfBirth FROM Registration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["ID"]. " - Name: " . $row["Name"]. " - Email: " . $row["Email"]. " - DateOfBirth: " . $row["DateOfBirth"]. "<br>";
  }
} else {
  echo "0 results";
}


// Update an existing record
$sql = "UPDATE Registration SET Name='Jane Doe', Email='jane.doe@example.com' WHERE ID=1";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}



// Delete a record 
$sql = "DELETE FROM Registration WHERE ID=1";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

?>