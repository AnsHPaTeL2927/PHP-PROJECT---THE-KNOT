<?php
// Assuming you have a database connection established
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "the_knot";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// // Check if the form is submitted and the eventDate field is set
// if (isset($_POST['eventDate'])) {
//     // Retrieve the eventDate value from the form
//     $eventDate = $_POST['eventDate'];

//     // Perform any necessary data sanitization or validation here

//     // Prepare the SQL statement to insert the data into the database
//     $sql = "INSERT INTO calender (eventDate) VALUES ('$eventDate')";

//     // Execute the SQL statement
//     if ($conn->query($sql) === TRUE) {
//         echo "<div id='bookingStatus'>Booking successful. The date $eventDate has been booked.</div>";
//     } else {
//         echo "<div id='bookingStatus'>Booking failed. Please try again later.</div>";
//     }
// }
if($_SERVER['REQUEST_METHOD']=='POST'){
    $date = $_POST['eventDate'];

    $existsql = "SELECT * FROM `calender` WHERE eventdate = '$date' ";
    $result = mysqli_query($conn, $existsql);
        $numExistRows = mysqli_num_rows($result);
        if($numExistRows > 0){
            $exists = true;        
            $_SESSION['status'] = "Date alread exists.";
            $_SESSION['status_code'] = "error";
            
        } 
        else{
            $exists = false;
           
            $sql = "INSERT INTO `calender` (`eventdate`) VALUES ('$date')";
            $result = mysqli_query($conn , $sql);
            if($result){
                $_SESSION['status'] = "Event was Booked.";
                $_SESSION['status_code'] = "success";			
                // header("location:login.php");			
            }  
        }
       
}


// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Event Booking</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <h1>Event Booking</h1>
  <form action="book.php" method="post" onsubmit="return validateForm()">
    <label for="eventDate">Select Date:</label>
    <input type="date" id="eventDate" name="eventDate" required>
    <!-- Other form fields -->
    <button type="submit">Book Now</button>
  </form>

  <div id="bookingStatus"></div>

  <script>
    function validateForm() {
      const eventDateInput = document.getElementById('eventDate');
      const eventDateValue = eventDateInput.value;

      if (!isValidDate(eventDateValue)) {
        alert('Please select a valid date.');
        return false;
      }

      // Additional validation logic for other form fields if needed

      return true;
    }

    function isValidDate(dateString) {
      // Regular expression pattern to validate YYYY-MM-DD format
      const pattern = /^\d{4}-\d{2}-\d{2}$/;

      if (!pattern.test(dateString)) {
        return false;
      }

      const date = new Date(dateString);
      const year = date.getFullYear();
      const month = date.getMonth() + 1; // January is 0
      const day = date.getDate();

      // Validate if the date is a valid calendar date
      if (year < 1000 || year > 3000 || month === 0 || month > 12) {
        return false;
      }

      // Additional validation logic based on your requirements

      return true;
    }
  </script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
	if(isset($_SESSION['status']) && $_SESSION['status'] != '')
	{
		?>
		<script>
			swal({
				title: "<?php  echo $_SESSION['status'];?>",
				//text: "You clicked the button!",
				icon: "<?php  echo $_SESSION['status_code']; ?>",
				button: "Done!",
				});
		</script>
		<?php
		unset($_SESSION['status']);
	}
?>
</body>
</html>