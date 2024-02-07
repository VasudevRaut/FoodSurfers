<?php


session_start();

if(isset($_COOKIE['session_id_user']) && session_id() === $_COOKIE['session_id_user'])
{
    // header("Location: dashboard.php");
    // exit();
    // $email = base64_decode($_COOKIE['session_id']);


             if (isset($_SESSION["user_id_email"])) {
        $email = $_SESSION["user_id_email"];
        // echo "User Email1111: " . $email;
             }
            //  echo "Vasssssssssssssssssssss";

   
}
else
{
    
    
    header("Location: messuser/login.php");
    // exit();


}
?>


<?php  

// session_start();
$received_data = $_SESSION['location'];



?>

<style>
#dashimg1{
width : 100px;
 /*height : 10rem; */



}

.messAddress{

display: flex;
width: 500px;


}

#searchContainer {
            position: relative;
            display: inline-block;
        }

        #searchInput {
            width: 200px;
            padding: 5px;
        }

        #searchDropdown {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1;
            width: 200px;
            border: 1px solid #ccc;
            /* max-height: 150px; */
            height: auto;
            overflow-y: auto;
            display: none;
        }

        #searchDropdown option {
            padding: 8px;
        }
.address{
    display: flex;
    margin-left: 20px !important;
    /* width:50%; */
    /* justify-content: center; */
    margin-top:20px;
    gap:5px;
    flex-direction: column;
    
}

.address p{
    margin : 5px 0px 0px 0px;
}

.rating{
            width: fit-content;
            height: fit-content;
            padding: 8px;
            padding-block-start: 10dp;
            color: #fff;
            font-size: 1.3rem;
            background-color: rgb(8, 126, 8);
            border-radius: 5px;
            align-self: auto;
            align-items: end;
        }









        .rating1 {
            display: flex;
            unicode-bidi: bidi-override;
            direction: rtl;
            text-align: center;
        }

        .rating1 input {
            display: none;
        }

        .rating1 label {
            font-size: 40px;
            color: #ccc;
            cursor: pointer;
            display: inline-block;
            padding: 5px;
        }
        
        .rating1 label:hover,
        .rating1 label:hover ~ label,
        .rating1 input:checked ~ label {
            color: #ffcc00;
        }





</style>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard with Navbar</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="shortcut icon" href="Images/Logo.png" type="image/x-icon">
</head>
<body>
    <div class="navbar">
    <div id="searchContainer">
    <!-- Add an input for searching -->
    <input type="text" id="searchInput" placeholder="Search locations">

    <!-- Add a select element with options (initially hidden) -->
    <select id="searchDropdown" size="4" multiple>

    <?php
 include 'db_con.php';
// $conn = new mysqli("localhost", "root", "", "foodsurfers");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch the last 7 days' values
$query = "SELECT * FROM `mess`";

// Execute the query
$result = $conn->query($query);

// Check for errors
if (!$result) {
    die("Query failed: " . $connection->error);
}

// Assuming you want to display each record in a separate profile box
while ($row = $result->fetch_assoc()) {
    // $menuItems = explode(',', $row['menu_item']);
   

?>


    
        <option value="location1"><?php echo $row['Address']?></option>
       
    



    <?php
}

// Close the connection
$conn->close();

?>
 
</select>

</div>
<a href="messuser/dashboard.php">
    <img src="Images/fav.png" alt="Clickable Image" width="50px" height="50px">
</a>
        <input type="text" placeholder="Search...">
</div>

    <div class="container">
        <div class="picture">
            <img src="Images/d2.jpg" alt="Description Image">
        </div>
        <div class="description">
            <h1 id ="descriptionContainer" >Description Title</h1>

        

            <?php



// Create a connection
// $conn = new mysqli("localhost", "root", "", "foodsurfers");
include 'db_con.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $addresss = $row['Address'];

// Query to fetch the last 7 days' values
date_default_timezone_set('Asia/Kolkata');

$currentHour = date('H');
$currentDate = date('Y-m-d');
// Set the meal_type based on the current hour
if ($currentHour >= 0 && $currentHour < 18) {
    $mealType = 'lunch';
} elseif ($currentHour >= 18 && $currentHour <= 23) {
    $mealType = 'dinner';
}
// echo $mealType;
// $mealType = 'lunch';
$query = "SELECT `messmenu`.*,`mess`.* FROM    `messmenu`,`mess`  WHERE `messmenu`.Email = `mess`.Email AND `messmenu`.meal_type = '$mealType' AND `mess`.Address like '%$received_data%' AND open_closed_status='true' AND date='$currentDate'";

// Execute the query
$result = $conn->query($query);

// Check for errors
if (!$result) {
    die("Query failed: " . $connection->error);
}

// Assuming you want to display each record in a separate profile box

while ($row = $result->fetch_assoc()) {
    $menuItems = explode(',', $row['menu_item']);
   

    // echo $received_data;
    

?>

            
            <div class="card">
                <div class="inBox">
                    <div class="desc">

                        <div class="messAddress">
                        <img id="dashimg1"  src="Images/veg-thali.png" alt="">
                        <div class="address">
                        <p>Lunch Type : <?php echo $row['meal_type']; ?></p>
                            <p>Address : <?php echo $row['Address']; ?></p>
                            <p>Morning Time : <?php echo $row['morningStartTime'];echo " To "; echo $row['morningEndTime'];  ?></p>
                            <p>Evening Time : <?php echo $row['eveningStartTime'];echo " To "; echo $row['eveningEndTime'];  ?></p>
                        </div>

                            </div>
                        <h2><?php echo $row['Mess_name']; ?></h2>
                        <p>Mess Menu</p>
                        <ul>
                            <?php foreach ($menuItems as $menuItem): ?>
                                <li><?php echo trim($menuItem); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="address">
                    <div class="rating">
                        4.3
                    </div>   
                    <!-- <a href="additeminFavraite.php"> -->
                    <img  class="favorite-icon" src="Images/fw.png" width = "50px" id="fav <?php echo $row['Email']; ?>" height="50px" alt="Favorite" onclick="toggleFavorite('<?php echo $row['Email']; ?>')  "> 
                            <!-- </a> -->

                            <div class="rating1" data-email="<?php echo $row['Email']; ?>">
                            <input type="radio" id="star5 <?php echo $row['Email']; ?>" name="rating" value="5">
                            <label for="star5" onclick="toggleFavorite5('<?php echo $row['Email']; ?>')  " id="l5 <?php echo $row['Email']; ?>">* </label>
                            <input type="radio" id="star4 <?php echo $row['Email']; ?>" name="rating" value="4">
                            <label for="star4" onclick="toggleFavorite4('<?php echo $row['Email']; ?>')  " id="l4 <?php echo $row['Email']; ?>">* </label>
                            <input type="radio" id="star3 <?php echo $row['Email']; ?>" name="rating" value="3">
                            <label for="star3" onclick="toggleFavorite3('<?php echo $row['Email']; ?>')  " id="l3 <?php echo $row['Email']; ?>">* </label>
                            <input type="radio" id="star2 <?php echo $row['Email']; ?>" name="rating" value="2">
                            <label for="star2" onclick="toggleFavorite2('<?php echo $row['Email']; ?>')  " id="l2 <?php echo $row['Email']; ?>">* </label>
                            <input type="radio" id="star1 <?php echo $row['Email']; ?>" name="rating" value="1" >
                            <label for="star1" onclick="toggleFavorite1('<?php echo $row['Email']; ?>')  " id="l1 <?php echo $row['Email']; ?>">* </label>
                            </div>
                    </div>

                </div>
            </div>


            <?php
}

// Close the connection
$conn->close();

?>

            
         </div>


        



    </div>
    </div>

</body>
</html>

<script>
    // Get the input and select elements
    var input = document.getElementById('searchInput');
    var dropdown = document.getElementById('searchDropdown');

    // Add event listener for input changes
    input.addEventListener('input', function () {
        var filter = input.value.toUpperCase(); // Convert input value to uppercase for case-insensitive search

        // Loop through each option in the dropdown
        for (var i = 0; i < dropdown.options.length; i++) {
            var option = dropdown.options[i];
            var txtValue = option.text.toUpperCase();

            // Check if the option's text contains the filter text
            if (txtValue.includes(filter)) {
                option.style.display = ''; // Show the option
            } else {
                option.style.display = 'none'; // Hide the option
            }
        }

        // Show or hide the dropdown based on the filter
        dropdown.style.display = filter ? 'block' : 'none';
       
    });

    // Add event listener for option clicks
    dropdown.addEventListener('click', function (event) {
        var selectedOption = event.target;

        // Update the input field with the selected option's text
        input.value = selectedOption.text;


        //    console.log(selectedOption.text);
        // Hide the dropdown after selection
        dropdown.style.display = 'none';

    //     session_start();
    // $_SESSION['location'] = selectedOption.text;
    // header("Location: dashboard.php");
    // exit();


        updateContent(selectedOption.text);
    });

    
    input.addEventListener('click', function () {
        input.select();
    });



    function updateContent(selectedLocation) {
        var xhr = new XMLHttpRequest();


        // console.log(selectedLocation)

// Define the request URL, including any parameters you need to send to the server
var url = 'fetch_the_data_based_on_location.php?location=' + encodeURIComponent(selectedLocation);

xhr.open('GET', url, true);

// Set up a callback function to handle the response
xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
        var response = xhr.responseText;
        console.log("Vasudev")
        console.log(response)

        window.location.href = 'dashboard.php';
        
    }
};


xhr.send();
}



        // }






</script>
<script>
    var imagePaths = ["Images/fav.png","Images/fav.png"];
    // Variable to keep track of the current image index
    var currentImageIndex = 0;
    function toggleFavorite(cardNumber) {
        // var favoriteIcon = document.querySelector('.favorite-icon');
        // Add/remove a class to change the appearance of the icon on click
        // favoriteIcon.classList.toggle('favorited');

        
        console.log("Vasudev");

        var image = document.getElementById("fav "+cardNumber);
        console.log(image)

        // Toggle the image source
        currentImageIndex = (currentImageIndex + 1) % imagePaths.length;
        image.src = imagePaths[currentImageIndex];
    // Function to toggle between images




                    var xhr = new XMLHttpRequest();


                // console.log(selectedLocation)

                // Define the request URL, including any parameters you need to send to the server
                var url = 'additeminFavraite.php?location=' + encodeURIComponent(cardNumber);

                xhr.open('GET', url, true);

                // Set up a callback function to handle the response
                xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                var response = xhr.responseText;
                console.log("Vasudev")
                console.log(response)

                // window.location.href = 'dashboard.php';

                }
                };


                xhr.send();



    


    }
</script>



<script>
    // JavaScript to dynamically handle hover and checked states
    // Place this script at the end of your HTML body or after the HTML content is loaded
document.addEventListener('DOMContentLoaded', function () {
    // Add event listeners to all rating divs
    const ratingDivs = document.querySelectorAll('.rating1');
    
    ratingDivs.forEach(function (ratingDiv) {
        ratingDiv.addEventListener('click', function (event) {
            if (event.target.tagName === 'LABEL') {
                const email = ratingDiv.getAttribute('data-email');
                const ratingValue = event.target.getAttribute('for').replace('star', '');
                // You can send the email and ratingValue to the server using AJAX or perform any other desired action
                console.log('Rating for ' + email + ' is ' + ratingValue);




                var xhr = new XMLHttpRequest();


                // console.log(selectedLocation)

                // Define the request URL, including any parameters you need to send to the server
                var url = 'updateRating.php?location=' + encodeURIComponent(email) + '&rating=' + encodeURIComponent(ratingValue);

                xhr.open('GET', url, true);

                // Set up a callback function to handle the response
                xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                var response = xhr.responseText;
                console.log("Vasudev")
                console.log(response)

                // window.location.href = 'dashboard.php';

}
};


xhr.send();






            }
        });
    });
});



function toggleFavorite1(cardNumber) {
    // console.log(cardNumber);
    // console.log("Vasudev");
    var radioButton = document.getElementById("star1 "+cardNumber);

radioButton.checked = true;
var myLabel = document.getElementById("l1 "+cardNumber);
myLabel.style.color = "red";
var myLabel = document.getElementById("l2 "+cardNumber);
        myLabel.style.color = "lightgray";
        var myLabel = document.getElementById("l3 "+cardNumber);
        myLabel.style.color = "lightgray";
        var myLabel = document.getElementById("l4 "+cardNumber);
        myLabel.style.color = "lightgray";
        var myLabel = document.getElementById("l5 "+cardNumber);
        myLabel.style.color = "lightgray";
    }



    
    function toggleFavorite2(cardNumber) {
    
        var radioButton = document.getElementById("star1 "+cardNumber);
        radioButton.checked = true;
        var radioButton = document.getElementById("star2 "+cardNumber);
        radioButton.checked = true;
        var myLabel = document.getElementById("l1 "+cardNumber);
        myLabel.style.color = "red";
        var myLabel = document.getElementById("l2 "+cardNumber);
        myLabel.style.color = "red";
        var myLabel = document.getElementById("l3 "+cardNumber);
        myLabel.style.color = "lightgray";
        var myLabel = document.getElementById("l4 "+cardNumber);
        myLabel.style.color = "lightgray";
        var myLabel = document.getElementById("l5 "+cardNumber);
        myLabel.style.color = "lightgray";
    }

    function toggleFavorite3(cardNumber) {
        var radioButton = document.getElementById("star1 "+cardNumber);
        radioButton.checked = true;
        var radioButton = document.getElementById("star2 "+cardNumber);
        radioButton.checked = true;
        var radioButton = document.getElementById("star3 "+cardNumber);

        radioButton.checked = true;
        var myLabel = document.getElementById("l1 "+cardNumber);
        myLabel.style.color = "red";
        var myLabel = document.getElementById("l2 "+cardNumber);
        myLabel.style.color = "red";
        var myLabel = document.getElementById("l3 "+cardNumber);
        myLabel.style.color = "red";
        var myLabel = document.getElementById("l4 "+cardNumber);
        myLabel.style.color = "lightgray";
        var myLabel = document.getElementById("l5 "+cardNumber);
        myLabel.style.color = "lightgray";
    }

    function toggleFavorite4(cardNumber) {
        var radioButton = document.getElementById("star1 "+cardNumber);
        radioButton.checked = true;
        var radioButton = document.getElementById("star2 "+cardNumber);
        radioButton.checked = true;
        var radioButton = document.getElementById("star3 "+cardNumber);
        radioButton.checked = true;
        var radioButton = document.getElementById("star4 "+cardNumber);
        radioButton.checked = true;
        var radioButton = document.getElementById("star5 "+cardNumber);
        radioButton.checked = false;
        var myLabel = document.getElementById("l1 "+cardNumber);
        myLabel.style.color = "red";
        var myLabel = document.getElementById("l2 "+cardNumber);
        myLabel.style.color = "red";
        var myLabel = document.getElementById("l3 "+cardNumber);
        myLabel.style.color = "red";
        var myLabel = document.getElementById("l4 "+cardNumber);
        myLabel.style.color = "red";
        var myLabel = document.getElementById("l5 "+cardNumber);
        myLabel.style.color = "lightgray";
    }

    function toggleFavorite5(cardNumber) {
        var radioButton = document.getElementById("star1 "+cardNumber);
        radioButton.checked = true;
        var radioButton = document.getElementById("star2 "+cardNumber);
        radioButton.checked = true;
        var radioButton = document.getElementById("star3 "+cardNumber);
        radioButton.checked = true;
        var radioButton = document.getElementById("star4 "+cardNumber);
        radioButton.checked = true;
        var radioButton = document.getElementById("star5 "+cardNumber);
        radioButton.checked = true;
        var myLabel = document.getElementById("l1 "+cardNumber);
        myLabel.style.color = "red";
        var myLabel = document.getElementById("l2 "+cardNumber);
        myLabel.style.color = "red";
        var myLabel = document.getElementById("l3 "+cardNumber);
        myLabel.style.color = "red";
        var myLabel = document.getElementById("l4 "+cardNumber);
        myLabel.style.color = "red";
        var myLabel = document.getElementById("l5 "+cardNumber);
        myLabel.style.color = "red";
        
    }





// document.addEventListener('DOMContentLoaded', function () {
//     // Add event listeners to all rating divs
//     const ratingDivs = document.querySelectorAll('.rating1');

//     ratingDivs.forEach(function (ratingDiv) {
//         ratingDiv.addEventListener('click', function (event) {
//             if (event.target.tagName === 'LABEL') {
//                 const email = ratingDiv.getAttribute('data-email');
//                 const ratingValue = event.target.getAttribute('for').replace('star', '');

//                 // Set the corresponding radio button to be checked within the clicked card
//                 const radioInput = ratingDiv.querySelector('input[value="' + ratingValue + '"]');
//                 if (radioInput) {
//                     radioInput.checked = true;
//                 }

//                 // You can send the email and ratingValue to the server using AJAX or perform any other desired action
//                 console.log('Rating for ' + email + ' is ' + ratingValue);
//             }
//         });
//     });
// });





</script>