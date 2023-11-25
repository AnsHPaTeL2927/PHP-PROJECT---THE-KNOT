<?php

include 'eventDB.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>THE Knot. Event</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="multiform.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php include 'nav.php';?>
    <div class="container">
        <form id="regForm" method="post" action="events.php">
            <h1>Event</h1>
            <!-- One "tab" for each step in the form: -->
            <div class="tab">
                <h3>Bride Info</h3>
                <p><input type="text" placeholder="First name..." oninput="this.className = ''" name="bride_fname"
                        required></p>
                <p><input type="text" placeholder="Middle name..." oninput="this.className = ''" name="bride_mname"></p>
                <p><input type="text" placeholder="Last name..." oninput="this.className = ''" name="bride_lname"></p>
                <p><input type="email" placeholder="E-mail..." oninput="this.className = ''" name="bride_email"
                        required></p>
                <p><input placeholder="Phone..." oninput="this.className = ''" name="bride_phone"></p>
            </div>
            <div class="tab">
                <h3>Groom Info:</h3>
                <p><input type="text" placeholder="First name..." oninput="this.className = ''" name="groom_fname"></p>
                <p><input type="text" placeholder="Middle name..." oninput="this.className = ''" name="groom_mname"></p>
                <p><input type="text" placeholder="Last name..." oninput="this.className = ''" name="groom_lname"></p>
                <p><input type="email" placeholder="E-mail..." oninput="this.className = ''" name="groom_email"></p>
                <p><input placeholder="Phone..." oninput="this.className = ''" name="groom_phone"></p>

            </div>
            <div class="tab">
                <h3>Duration</h3>
                <label>Date</label>
                <p><input type="date" oninput="this.className = ''" name="event_date"></p>
                <div class="time">
                    <div class="time-item">
                        <label>Event Start Time</label>
                        <p><input type="time" oninput="this.className = ''" name="event_st"></p>
                    </div>
                    <div class="time-item">
                        <label>Event Finish Time</label>
                        <p><input type="time" oninput="this.className = ''" name="event_ft"></p>
                    </div>
                </div>
                <label>Guests</label>
                <p><input type="number" oninput="this.className = ''" placeholder="Enter No. of Guest" min="1"
                        name="event_guest"></p>
            </div>
            <div class="tab ">
                <label for="mySelection" style="display:none;">Select an option:</label>
                <select id="mySelection" style="display:none;" name="event_type">
                    <option value="default" selected>-- Select --</option>
                    <option value="Engagement">Engagement</option>
                    <option value="Garba">Garba</option>
                    <option value="Wedding">Wedding</option>
                    <option value="Reception">Reception</option>
                </select>
                <div id="EngagementFields" class="hidden">
                    <div class="">
                        <p><label for="food">Food</label><br>
                            <select id="food" class="drop" name="food1">
                                <option>Select Food packages</option>
                                <option value="Food_package_1">Food package-1</option>
                                <option value="Food_package_2">Food package-2</option>
                                <option value="Food_package_3">Food package-3</option>
                                <option value="Food_package_4">Food package-4</option>
                                <option value="Food_package_5">Food package-5</option>
                                <option value="Food_package_6">Food package-6</option>
                            </select>
                        </p>
                        <p><label for="entertainment" class="text-">Entertainment</label><br>
                            <select id="entertainment" class="drop" name="entertainment1">
                                <option>Select Entertainment packages</option>
                                <option value="Entertainment_1">Entertainment-1</option>
                                <option value="Entertainment_2">Entertainment-2</option>
                                <option value="Entertainment_3">Entertainment-3</option>
                                <option value="Entertainment_4">Entertainment-4</option>
                            </select>
                        </p>
                        <p><label for="photography">Photography</label><br>
                            <select id="photography" class="drop" name="photography1">
                                <option>Select Photography packages</option>
                                <option value="Photography_1">Photography-1</option>
                                <option value="Photography_2">Photography-2</option>
                                <option value="Photography_3">Photography-3</option>
                                <option value="Photography_4">Photography-4</option>
                            </select>
                        </p>
                        <p><label for="theme">Theme</label><br>
                            <select id="theme" class="drop" name="theme1">
                                <option>Select Themes</option>
                                <option value="Floral">Floral</option>
                                <option value="Fairy Tale">Fairy tale</option>
                                <option value="Rustic">Rustic</option>
                            </select>
                        </p>
                        <p><label for="layout">Layout</label><br>
                            <select id="country" class="drop" name="layout1">
                                <option>Select Layouts</option>
                                <option value="layout_1">Layout-1</option>
                                <option value="layout_2">Layout-2</option>
                                <option value="layout_3">Layout-3</option>
                            </select>
                        </p>
                    </div>
                </div>

                <div id="GarbaFields" class="hidden">
                    <div class="">
                        <p> <label for="food">Food</label><br>
                            <select id="food" class="drop" name="food2">
                                <option>Food packages</option>
                                <option value="Food_package_1">Food package-1</option>
                                <option value="Food_package_2">Food package-2</option>
                                <option value="Food_package_3">Food package-3</option>
                                <option value="Food_package_4">Food package-4</option>
                                <option value="Food_package_5">Food package-5</option>
                                <option value="Food_package_6">Food package-6</option>
                            </select>
                        </p>
                        <p> <label for="entertainment" class="text-">Entertainment</label><br>
                            <select id="entertainment" class="drop" name="entertainment2">
                                <option>Entertainment packages</option>
                                <option value="Entertainment_1">Entertainment-1</option>
                                <option value="Entertainment_2">Entertainment-2</option>
                                <option value="Entertainment_3">Entertainment-3</option>
                                <option value="Entertainment_4">Entertainment-4</option>
                            </select>
                        </p>
                        <p><label for="photography">Photography</label><br>
                            <select id="photography" class="drop" name="photography2">
                                <option>Photography packages</option>
                                <option value="Photography_1">Photography-1</option>
                                <option value="Photography_2">Photography-2</option>
                                <option value="Photography_3">Photography-3</option>
                                <option value="Photography_4">Photography-4</option>
                            </select>
                        </p>
                        <p>
                            <label for="theme">Theme</label><br>
                            <select id="theme" class="drop" name="theme2">
                                <option>Themes</option>
                                <option value="Bollywood">Bollywood</option>
                                <option value="Indian">Indian</option>
                                <option value="Dancing For decades">Dancing For Decades</option>
                            </select>
                        </p>
                        <p>
                            <label for="layout">Layout</label><br>
                            <select id="country" class="drop" name="layout2">
                                <option>Layouts</option>
                                <option value="layout_1">Layout-1</option>
                                <option value="layout_2">Layout-2</option>
                                <option value="layout_3">Layout-3</option>
                            </select>
                        </p>
                    </div>
                </div>

                <div id="WeddingFields" class="hidden">
                    <div class="">
                        <p> <label for="food">Food</label><br>
                            <select id="food" class="drop" name="food3">
                                <option>Food packages</option>
                                <option value="Food_package_1">Food package-1</option>
                                <option value="Food_package_2">Food package-2</option>
                                <option value="Food_package_3">Food package-3</option>
                                <option value="Food_package_4">Food package-4</option>
                                <option value="Food_package_5">Food package-5</option>
                                <option value="Food_package_6">Food package-6</option>
                            </select>
                        </p>
                        <p> <label for="entertainment" class="text-">Entertainment</label><br>
                            <select id="entertainment" class="drop" name="entertainment3">
                                <option>Entertainment packages</option>
                                <option value="Entertainment_1">Entertainment-1</option>
                                <option value="Entertainment_2">Entertainment-2</option>
                                <option value="Entertainment_3">Entertainment-3</option>
                                <option value="Entertainment_4">Entertainment-4</option>
                            </select>
                        </p>
                        <p><label for="photography">Photography</label><br>
                            <select id="photography" class="drop" name="photography3">
                                <option>Photography packages</option>
                                <option value="Photography_1">Photography-1</option>
                                <option value="Photography_2">Photography-2</option>
                                <option value="Photography_3">Photography-3</option>
                                <option value="Photography_4">Photography-4</option>
                            </select>
                        </p>
                        <p>
                            <label for="theme">Theme</label><br>
                            <select id="theme" class="drop" name="theme3">
                                <option>Themes</option>
                                <option value="Bohemian">Bohemian</option>
                                <option value="Garden">Garden</option>
                                <option value="Modern">Modern</option>
                                <option value="Traditional">Traditional</option>
                                <option value="Tropical">Tropical</option>
                                <option value="Royal">Royal</option>
                            </select>
                        </p>
                        <p>
                            <label for="layout">Layout</label><br>
                            <select id="country" class="drop" name="layout3">
                                <option>Layouts</option>
                                <option value="layout_1">Layout-1</option>
                                <option value="layout_2">Layout-2</option>
                                <option value="layout_3">Layout-3</option>
                            </select>
                        </p>
                    </div>
                </div>

                <div id="ReceptionFields" class="hidden">
                    <div class="">
                        <p> <label for="food">Food</label><br>
                            <select id="food" class="drop" name="food4">
                                <option>Food packages</option>
                                <option value="Food_package_1">Food package-1</option>
                                <option value="Food_package_2">Food package-2</option>
                                <option value="Food_package_3">Food package-3</option>
                                <option value="Food_package_4">Food package-4</option>
                                <option value="Food_package_5">Food package-5</option>
                                <option value="Food_package_6">Food package-6</option>
                            </select>
                        </p>
                        <p> <label for="entertainment" class="text-">Entertainment</label><br>
                            <select id="entertainment" class="drop" name="entertainment4">
                                <option>Entertainment packages</option>
                                <option value="Entertainment_1">Entertainment-1</option>
                                <option value="Entertainment_2">Entertainment-2</option>
                                <option value="Entertainment_3">Entertainment-3</option>
                                <option value="Entertainment_4">Entertainment-4</option>
                            </select>
                        </p>
                        <p><label for="photography">Photography</label><br>
                            <select id="photography" class="drop" name="photography4">
                                <option>Photography packages</option>
                                <option value="Photography_1">Photography-1</option>
                                <option value="Photography_2">Photography-2</option>
                                <option value="Photography_3">Photography-3</option>
                                <option value="Photography_4">Photography-4</option>
                            </select>
                        </p>
                        <p>
                            <label for="theme">Theme</label><br>
                            <select id="theme" class="drop" name="theme4">
                                <option>Themes</option>
                                <option value="Classy">Classy</option>
                                <option value="Filmy">Filmy</option>
                                <option value="Nawabi">Nawabi</option>
                            </select>
                        </p>
                        <p>
                            <label for="layout">Layout</label><br>
                            <select id="layout" class="drop" name="layout4">
                                <option>Layouts</option>
                                <option value="layout_1">Layout-1</option>
                                <option value="layout_2">Layout-2</option>
                                <option value="layout_3">Layout-3</option>
                            </select>
                        </p>
                    </div>
                </div>
            </div>
            <div style="overflow:auto;">
                <div>
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)" style="float:left;">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)" style="float:right;">Next</button>
                </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
        </form>
    </div>
    <?php include 'footer.php'; ?>

</body>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="event.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
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

</html>