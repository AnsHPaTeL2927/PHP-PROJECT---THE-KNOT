<?php
include 'DBConnect.php';
include 'functions.php';

$username = $_SESSION['username'];
$date = $_SESSION['date'];
$event = $_SESSION['event'];
$event_id = $_SESSION['event_id'];

if($event == 'Engagement'){
  $vanue_price = '100000';
}
else if($event == 'Garba'){
  $vanue_price = '75000';
}
else if($event == 'Wedding'){
  $vanue_price = '150000';
}
else if($event == 'Reception'){
  $vanue_price = '75000';
}
else{
  $vanue_price = '';
}

$sql = "SELECT `food`, `entertainment`, `photography` , `theme`, `sub_total`  FROM `bill` WHERE `event_id` = '$event_id'";
$result = mysqli_query($conn , $sql);
if($result)
{
  $row = mysqli_fetch_assoc($result);
  $event_total = $row['sub_total'];
  $total = $vanue_price + $event_total;
}

$sql2 = "UPDATE `bill` SET `total`='$total' WHERE `event_id` = '$event_id';";
$result2 = mysqli_query($conn, $sql2);

  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    $username = $_SESSION['username'];
    $cardname = $_POST['cardname'];
    $cardnumber = $_POST['cardnumber'];
    $expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];
    $transaction_id = random_num_transaction(7);
    $_SESSION['transaction_id'] = $transaction_id;
    $hash = password_hash($cvv, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO `payment_details` (`event_id`, `transaction_id`, `username`, `cardname`, `cardnumber`,`expmonth` , `expyear`, `cvv` , `datetime`) VALUES ('$event_id','$transaction_id','$username', '$cardname', '$cardnumber', '$expmonth', '$expyear', '$hash', current_timestamp())";
    $sql2 = "UPDATE `bill` SET `transaction_id` = '$transaction_id' WHERE `event_id` = '$event_id';";
    $result1 = mysqli_query($conn , $sql);
    $result2 = mysqli_query($conn , $sql2);

  }
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="bill.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="assets\css\main.css">

  <title>THE Knot. Billing</title>
</head>

<body>
  <?php include 'nav.php'; ?>
  <div class="row">
    <div class="col-50 hide">
      <div class="container1">
        <form action="bill.php" method="post">
          <div class="row">
            <div class="col-75">
              <h3>Payment</h3>
              <label for="fname">Accepted Cards</label>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
              <label for="cname">Name on Card</label>
              <input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
              <label for="ccnum">Credit card number</label>
              <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
              <label for="expmonth">Exp Month</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="September" required>
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Exp Year</label>
                  <input type="text" id="expyear" name="expyear" placeholder="2018" required>
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="352" required>
                </div>
              </div>
            </div>
          </div>
          <label>
            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
          </label>
          <button input type="submit" name="submit" class="btn">Continue to checkout</button>
        </form>
      </div>
    </div>

    <div class="col-50">
      <div class="container1 col-25">
        <h4>Bill<span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
        <p><a href="#">Vanue Charges</a> <span class="price">
            <?php echo $vanue_price; ?>
          </span></p>
        <p><a href="#">Food Charges</a> <span class="price">
            <?php echo $row['food']; ?>
          </span></p>
        <p><a href="#">Entertainment Charges</a> <span class="price">
            <?php echo $row['entertainment']; ?>

          </span></p>
        <p><a href="#">Photography Charges</a> <span class="price">
            <?php echo $row['photography']; ?>
          </span></p>
        <p><a href="#">Decoration Charges</a> <span class="price">
            <?php echo $row['theme']; ?>
          </span></p>
        <hr>
        <p>Total <span class="price" style="color:black"><b>
              <?php echo $total;  ?>
            </b></span></p>

        <div class="container2">
          <a href="view_pdf.php">
            <button type="submit" action="" class="btn btn-success">
              View Bill
            </button>
          </a>
        </div>
        <div class="btn-display">

          <input onclick="document.getElementById('id01').style.display='block'" type="submit" value="Payment Method"
            class=" btn btn-show btn-hide btn1">
          <input type="submit" value="Continue to checkout" class="btn btn-show btn-hide btn2">
        </div>
      </div>
    </div>
    <form action="bill.php" method="post">
      <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-animate-top w3-card-3">
          <header class="w3-container w3-teal">
            <span onclick="document.getElementById('id01').style.display='none'"
              class="w3-button w3-display-topright">&times;</span>
            <h2>Payment Method</h2>
          </header>
          <div class="w3-container">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
              </div>
            </div>
          </div>
          <button input type="submit" name="submit" class="btn btn2">Continue to checkout</button>
        </div>
      </div>
    </form>
  </div>
  <?php include 'footer.php'; ?>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>