<?php
session_start();
$_SESSION['location'] = "sainagar";

// header("Location: Mess_owner/login.php");


?>


<!DOCTYPE html>
<html lang="eng">
  <head>
    <title>Food-Surfers</title>
<link rel="shortcut icon" href="Images/Logo.png" type="image/x-icon">    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
    <link rel="stylesheet" href="./style.css" />
    <style>
      .space{
  margin-left: 10px;
  }
    </style>
  </head>
  <body>
    <section class="main-section">
      <div class="container-fluid main-header">
        <nav class="py-2 navbar navbar-expand-lg auto-hiding-navbar">
          <div class="container">
            <a class="navbar-brand" href="./index.html">
              <img class="logo" src="./Images/Logo.png" />
            </a>

            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fa-solid fa-bars"></i>
            </button>
            <div
              class="collapse navbar-collapse justify-content-end home-nav"
              id="navbarSupportedContent"
            >
              <ul class="navbar-nav ml-auto nav-gap">


              <li class="nav-item">
                  <a class="nav-link" href="dashboard.php ">Go To Menu</a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    aria-current="page"
                    href="#"
                    >Home</a
                  >
                </li>

                
                <li class="nav-item">
                  <a class="nav-link" href="#about">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#Food-Cat">Categories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#features">Features</a>
                </li>
                <li class="nav-item call-us-nav-item">
                  <a href="messuser/login.php" class="download-button"
                    ></i>Sign In User</a
                  >
                </li>

                <li class="nav-item call-us-nav-item space">
                  <a href="Mess_owner/login.php" class="download-button"
                    ></i>Sign in Mess</a
                  >
                </li>

              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
        <div class="container banner-content">
          <div class="row">
            <div class="col-lg-5 banner-text d-lg-block">
              <h4 class="banner-text-sub">Enjoy your</h4>
              <h3 class="banner-text-main">Delicious Food</h3>
              <h3 class="banner-text-main-head">Food Surfers</h3>
            </div>
            <div class="col-lg-5 left-row">
              <img src="Images/veg-thali.png" alt="">
            </div>
          </div>
        </div>  

      <section class="aboutus">
        <div class="container about-us">
          <div class="row">
            <div class="col-lg-6">
              <img src="Images/Delivery-boy.png" />
            </div>
            <div class="col-lg-6">
              <div class="about-us-text" id="about">
                <h3 class="about-us-head">About</h3>
                <h3 class="about-us-sub-head">Food Surfers</h3>
                <p class="about-us-content-1">
                  Food Surfers is an online food exploring app which provides details of various meal and menu option available like breakfast, Lunch and Dinner to
                  customers daily.
                </p>
                <p class="about-us-content-2">
                  Food Surfers provides the overview of options present in that location for daily meals by categorizing them into Veg and Non-Veg Categories.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
 
      <section class="foodcategories" id="Food-Cat">
        <div class="container food-categories">
          <div class="food-categories-text">
            <h3 class="about-us-sub-head">
              <span class="about-us-head">Food</span> Categories
            </h3>
          </div>
          <div class="food-categories-content">
            <div class="row justify-content-center">

              <div class="col-md-6 col-lg-4">
                <div class="food-category">
                  <div class="food-category-name">
                    Veg<i
                      class="fa-regular fa-circle-right category-icon"
                    ></i>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="food-category">
                  <div class="food-category-name">
                    Non-Veg<i
                      class="fa-regular fa-circle-right category-icon"
                    ></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="whychooseus" id="features">
        <div class="container why-choose-us">
          <div class="why-choose-us-text">
            <h3>
              <span class="why-choose-us-head">Food-Surfers</span>
              <span class="why-choose-us-head-bold">Features</span>
            </h3>
            <h6 class="why-choose-us-sub-head">
              The best food for you at affordable prices
            </h6>
          </div>
          <div class="why-choose-us-content">
            <div class="row why-choose-us-content-row-1">
              <div class="col-lg-4">
                <img src="Images/feature-img-1.png" />
                <h3 class="why-choose-item-name">User Specific</h3>
                <p class="why-choose-item-desc">
                  With our wide Menu and Affordable prices, you can choose your own meal.
                </p>
              </div>
              <div class="col-lg-4">
                <img src="Images/feature-img-2.png" />
                <h3 class="why-choose-item-name">Free and Anytime</h3>
                <p class="why-choose-item-desc">
                  You can explore your food journey at any time and its all for free.
                </p>
              </div>
              <div class="col-lg-4">
                <img src="Images/feature-img-3.png" />
                <h3 class="why-choose-item-name">
                  Hygienic and Safe
                </h3>
                <p class="why-choose-item-desc">
                  Every food option is certified by the food Standard and saftey Authority of India.
                </p>
              </div>
            </div>
            <div class="row why-choose-us-content-row-2">
              <div class="col-lg-4">
                <img src="Images/feature-img-4.png" />
                <h3 class="why-choose-item-name">Add Favroites</h3>
                <p class="why-choose-item-desc">
                  You can add Favroite lunch places you want.
                </p>
              </div>
              <div class="col-lg-4">
                <img src="Images/feature-img-5.png" />
                <h3 class="why-choose-item-name">Meals for the Day</h3>
                <p class="why-choose-item-desc">
                  A Multiple options for your daily food requirements.
                </p>
              </div>
              <div class="col-lg-4">
                <img src="Images/feature-img-6.png" />
                <h3 class="why-choose-item-name">Easy Access</h3>
                <p class="why-choose-item-desc">
                  View the menu at any time and from any location.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
</head>
<body>
<footer>
<div class="footer">
<div class="row">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-instagram"></i></a>
<a href="#"><i class="fa fa-youtube"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
</div>

<div class="row">
<ul>
<li><a href="#">Contact us</a></li>
<li><a href="#">Our Services</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Terms & Conditions</a></li>
<li><a href="#">Career</a></li>
</ul>
</div>

<div class="row">
FoodSurfers Copyright © 2023 Foodsurfers - All rights reserved || Viit, Pune 
</div>
</div>
</footer>

    </section>
  </body>
</html>