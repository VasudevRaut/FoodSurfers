
<?php


session_start(); 
if(isset($_COOKIE['session_id']) && session_id() === $_COOKIE['session_id'])
{
    // header("Location: Mess_owner/login.php");

}
else
{
    
    
    header("Location: login.php");
    exit();

}
?>


<?php

// session_start(); // Start the session

include('../includes/header.php');
include('../includes/topbar.php');
include('../includes/sidebar.php');
// include('db_con.php');



// Assuming you have already established a database connection

// Fetch data from the emp_info table

?>



<script>



document.addEventListener('DOMContentLoaded', function () {
    var statusSwitch = document.getElementById('statusSwitch');

    // Add an event listener for the 'change' event on the switch
    statusSwitch.addEventListener('change', function () {
        // Get the current value of the switch (true or false)
        var statusValue = statusSwitch.checked;

        // Make an asynchronous request to update the database
        updateDatabaseStatus(statusValue);
    });

    function updateDatabaseStatus(statusValue) {
        // Make an asynchronous request to update the database
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Handle the response if needed
                console.log(xhr.responseText);
            }
        };

        // Replace 'update_status.php' with the actual path to your PHP script
        xhr.open('POST', 'updateMessStatusAPI.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('status=' + statusValue);
    }
});




document.addEventListener('DOMContentLoaded', function () {
            // Fetch the previous status from the server
    
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
               

                if (xhr.readyState === 4 && xhr.status === 200) {
                    // console.log("previousStatus2222");

                    // console.log(xhr.responseText)
                    var response = JSON.parse(xhr.responseText);
                    // console.log(response);
                    var previousStatus = response.previousStatus;

                    console.log(previousStatus);
                    
                    
                    // Set the initial state of the switch based on the fetched status
                    var statusSwitch = document.getElementById('statusSwitch');
                    if(previousStatus=="true")
                    {
                        statusSwitch.checked = 1;
                    }
                    else{
                        statusSwitch.checked = 0;

                    }
                    
                }
            };

            // Replace 'fetch_status.php' with the actual path to your PHP script
            xhr.open('GET', 'fetch_open_close_status_and_showAPI.php', true);
            xhr.send();
        });



</script>
<link rel="shortcut icon" href="Images/Logo.png" type="image/x-icon">

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Update Menu</h1>
                </div><!-- /.col -->
                
                
                <div class="col-sm-6">

                
                <label for="mess-status">Mess Status:</label>
            <!-- Rounded switch -->
                <label class="switch">
                <input type="checkbox" id="statusSwitch" >
                <span class="slider round"></span>
                </label>
        

                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
               <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <form method="post">
                            <button type="submit" name="logout" class="btn btn-outline-danger">Logout</button>
                        </form>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="formbold-form-wrapper container">


        <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="menu.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .menu-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .switch-label {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            font-weight: bold;
            
        }

        .switch-label label {
            flex: 1;
            text-align: left;
        }

        .switch-label input[type="checkbox"] {
            display: none;
            
        }

        .switch-slider {
            position: relative;
            width: 50px;
            height: 24px;
            
            background-color: #ccc;
            border-radius: 12px;
        }

        .switch-slider:before {
            content: 'OFF';
            position: absolute;
            width: 24px;
            height: 24px;
            line-height: 24px;
            text-align: center;
            border-radius: 50%;
            background-color: #fff;
            color: #333;
            transition: transform 0.2s;
            transform: translateX(0);
        }

        input[type="checkbox"]:checked + .switch-slider:before {
            content: 'ON';
            transform: translateX(26px);
        }

        .choice-box {
            margin-bottom: 20px;
        }

        .choice-box label {
            font-weight: bold;
        }

        #meal-choice {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .menu-update {
            margin-bottom: 20px;
        }

        .menu-update label {
            font-weight: bold;
        }

        #menu-text {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #update-button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        #update-button:hover {
            background-color: #0056b3;
        }

        .switch-slider {
        position: relative;
        width: 50px; /* Set a width for the switch slider */
        height: 24px; /* Set a height for the switch slider */
        background-color: #ccc;
        border-radius: 50px;
    }

    #mess-status{
        border radius : 40px;
    }

/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #FF0000;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #00ff00;
}

input:focus + .slider {
  box-shadow: 0 0 1px #00ff00;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
  width : inherit;
}

.slider.round:before {
  border-radius: 50%;
}




    </style>
    <title>Menu Update</title>
</head>
<body>
    <div class="menu-container">
        <h1>Update Menu Items</h1>
        <form action="updateMenuAPI.php" method="post">

        <div class="choice-box">
            <label for="meal-choice">Choose a meal:</label>
            <select id="meal-choice" name="meal-choice">
                <option value="lunch">Lunch</option>
                <option value="dinner">Dinner</option>
            </select>
        </div>
        <div class="menu-update">
            <label for="menu-text">Update Menu:</label>
            <textarea id="menu-text" name="menu-text" rows="5" cols="40" placeholder="Enter your menu here..."></textarea>
        </div>
        <button id="update-button" type="submit">Update Menu</button>
        </form>
    </div>
</body>
</html>

            

    </div>
    </div>

</div>

<?php
include('../includes/footer.php');
?>
