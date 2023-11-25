function selectOption(value) {
    const selectElement = document.getElementById('mySelection');
    const options = selectElement.options;

    for (let i = 0; i < options.length; i++) {
        if (options[i].value === value) {
            options[i].selected = true;
            window.location.hash = value;
        } else {
            options[i].selected = false;
        }
    }

    showRelatedFields(value);
}



function showRelatedFields(value) {
    const engagementFields = document.getElementById('EngagementFields');
    const garbaFields = document.getElementById('GarbaFields');
    const weddingFields = document.getElementById('WeddingFields');
    const receptionFields = document.getElementById('ReceptionFields');

    // Hide all option fields
    engagementFields.style.display = 'none';
    garbaFields.style.display = 'none';
    weddingFields.style.display = 'none';
    receptionFields.style.display = 'none';

    // Show fields based on selected option
    if (value === 'Engagement') {
        engagementFields.style.display = 'block';
    }
    else if (value === 'Garba') {
        garbaFields.style.display = 'block';
    }
    else if (value === 'Wedding') {
        weddingFields.style.display = 'block';
    }
    else if (value === 'Reception') {
        receptionFields.style.display = 'block';
    }
    console.log(value);
}

const currentHash = window.location.hash;

if (currentHash) {
    const selectedValue = currentHash.substr(1); // Remove the leading '#'
    selectOption(selectedValue);
} else {
    // If no fragment identifier exists, select the default option
    const selectElement = document.getElementById('mySelection');
    const defaultValue = selectElement.value;
    selectOption(defaultValue);
}






var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {

        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
}

function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
}


function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}

function validateForm() {
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");

    var selectedDate; // Variable to store the selected date
    var eventStartTime, eventFinishTime;

    for (i = 0; i < y.length; i++) {
        if (y[i].value == "") {
            y[i].className += " invalid";
            valid = false;
        } else {
            var fieldName = y[i].name;
            var fieldValue = y[i].value.trim();

            switch (fieldName) {
                case 'bride_phone':
                case 'groom_phone':
                    if (!/^\d{10}$/.test(fieldValue) || fieldValue < 0) {
                        y[i].className += " invalid";
                        valid = false;
                        alert("Please enter current phone number.");
                    }
                    break;
                case 'event_date':
                    selectedDate = new Date(fieldValue); // Store the selected date
                    var currentDate = new Date();

                    if (selectedDate < currentDate) {
                        y[i].className += " invalid";
                        valid = false;
                        alert("Please select a future date.");
                    }else if(selectedDate == currentDate){
                        y[i].className += " invalid";
                        valid = false;
                        alert("Please select future date.");
                    }
                    break;
                case 'event_guest':
                    if (fieldValue < 0) {
                        y[i].className += " invalid";
                        valid = false;
                    }
                    break;

                // case 'event_st':
                //     var eventStartTime = new Date(selectedDate + ' ' + fieldValue); // Use selectedDate
                //     var minTime = new Date(selectedDate + ' 08:00 AM'); // 8:00 AM
                //     var maxTime = new Date(selectedDate + ' 12:00 AM'); // 12:00 AM (midnight)

                //     if (eventStartTime < minTime || eventStartTime > maxTime) {
                //         y[i].className += " invalid";
                //         valid = false;
                //         alert("Event start time should be between 8:00 AM and 12:00 AM (midnight).");
                //     }
                //     break;
                // case 'event_ft':
                //     var eventFinishTime = new Date(selectedDate + ' ' + fieldValue); // Use selectedDate
                //     var minTime = new Date(selectedDate + ' 08:00 AM'); // 8:00 AM
                //     var maxTime = new Date(selectedDate + ' 12:00 AM'); // 12:00 AM (midnight)

                //     if (eventFinishTime < minTime || eventFinishTime > maxTime) {
                //         y[i].className += " invalid";
                //         valid = false;
                //         alert("Event finish time should be between 8:00 AM and 12:00 AM (midnight).");
                //     }
                //     break;

            }
        }
    }

    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }

    return valid;
}