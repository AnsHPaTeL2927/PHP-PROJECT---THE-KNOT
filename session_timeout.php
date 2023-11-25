<?php
// if(isset($_SESSION["username"]))
// {
//     if(time()-$_SESSION["login_time_stamp"] >10) 
//     {
//         session_unset();
//         session_destroy();

//         header("Location:login.php");
//     }
// }
// else
// {
//     header("Location:login.php");
// }
function checkSessionExpiration() {
    // Check if session is active
    if (session_status() === PHP_SESSION_ACTIVE) {
        // Get the last activity time from the session or set it to the current time if not available
        $lastActivity = isset($_SESSION['last_activity']) ? $_SESSION['last_activity'] : time();

        // Calculate the time difference between current time and last activity time
        $timeoutDuration = ini_get('session.gc_maxlifetime');
        $currentTime = time();
        $timeDifference = $currentTime - $lastActivity;

        // Check if session has expired
        if ($timeDifference > $timeoutDuration) {
            // Perform actions for session expiration (e.g., logout, redirect, display message)
            session_destroy(); // Optional: Destroy the session if needed
            header('Location: login.php'); // Redirect to login page
            exit(); // Stop further execution of the script
        }

        // Update last activity time with the current time to extend the session
        $_SESSION['last_activity'] = $currentTime;
    }
}

checkSessionExpiration(); 
?>