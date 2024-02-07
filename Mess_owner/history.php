
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

// Start the session

include('../includes/header.php');
include('../includes/topbar.php');
include('../includes/sidebar.php');
// include('db_con.php');



// Assuming you have already established a database connection

// Fetch data from the emp_info table

?>
<!-- <link rel="stylesheet" href="dashboard.css"> -->
<style>
    .container{
        /* align:center; */
        /* background-color: #fff; */
        display: flex;
        flex-direction:column;
  grid-template-columns: repeat(1, 1fr); /* Each row contains 1 card */
  gap: 10px; /* Adjust the gap between cards as needed */
  justify-content: center; /* Center cards horizontally */
  align-items: center; 
    }

   

        .profile-container {
            /* margin-inline-start: 500px; */

            height: 100vh;

            display: inline-block;
            display: flex;
            align-items: center;
            justify-content: center;

            background-color: aquamarine;
        }

        .profile-box {
            display: flex;
            width: 800px;
            height: 400px;
            padding: 10px;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-left 
        
    {
            padding : 30px;

            flex: 1;
            background-color: #ffffff;
            display: flex;
            
            
        }

        .profile-image {
width: 20px;
height: 20px;
background-color: green;
}

        .profile-right {
            flex: 2;
            padding: 10px;
        }

        .profile-details {
            text-align: left;
            padding-left: 10px;
            /* background-color: aquamsarine; */
            padding-bottom: 2px;
            margin-bottom: 10px;
            margin-left: 10px;

        }

        .name {
            font-weight: 700;
            font-size: 24px;
            margin-top: 10px;
        }

        .role {
            font-size: 16px;
            margin-top: -10px;
        }

        .contact-info {
            /* display: flex; */
            margin-bottom: 20px;
            text-align: left;
            margin-left: 10px;
            padding-left: 10px;
            /* background-color: aquamarine; */
        }

        .contact-section {
            flex: 1;
        }

        .contact-section h3 {
            font-size: 16px;
            margin: 0;
        }

        .contact-section p {
            margin: 0;
        }

        .social-icons {
            display: flex;
            /* margin-left: 30px; */
            margin-bottom: 20px;
            text-align: left;
            margin-left: 10px;
            padding: 10px;
            padding-left: 20px;
            /* background-color: aquamarine; */

        }

        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            margin-right: 10px;
            border-radius: 50%;
            color: #ffffff;
        }

        .social-icons a.linkedin {
            background-color: #0077b5;
        }

        .social-icons a.instagram {
            background-color: #e4405f;
        }

        .social-icons a.twitter {
            background-color: #1da1f2;
        }

        .social-icons i {
            font-size: 16px;
        }

        .cardImage{
            width: 300px;
            
        }


    

    


</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">History</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
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


        <!-- <div class="card">
        <div class="card-header">
            Mess Name
        </div>
        <div class="box">
            <div class="left">
                <img src="../Images/be-tension-free-img.png" alt="">
            </div>
    
            <div class="right">
                <h2>Timing: </h2>
                <ul>
                    <li>Type: </li>
                    <li>Rating: </li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div> -->


        <!-- <div class="sc-1s0saks-17 bGrnCu"><div class="sc-1s0saks-7 bckjvf"><div height="13rem" width="13rem" class="sc-s1isp7-1 kmRBaC sc-1s0saks-16 dfjlEy"><div src="" class="sc-s1isp7-3 cVOEqG"></div><img alt="Pyaz Kachori [1 Piece]" src="https://b.zmtcdn.com/data/dish_photos/aa1/96fa45f5be98e4699b6987d8d3288aa1.jpg?fit=around|130:130&amp;crop=130:130;*,*" loading="lazy" class="sc-s1isp7-5 fyZwWD"></div><div type="veg" class="sc-1tx3445-0 kcsImg sc-1s0saks-0 jcidl"><i class="sc-rbbb40-1 iFnyeo" size="13" color="#3AB757"><svg xmlns="http://www.w3.org/2000/svg" fill="#3AB757" width="13" height="13" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 khXxzt"><g clip-path="url(#clip0_835:69868)"><path d="M15 10C15 12.74 12.76 15 10 15C7.24 15 5 12.74 5 10C5 7.26 7.26 5 10 5C12.74 5 15 7.24 15 10ZM20 4V16C20 18.26 18.26 20 16 20H4C1.76 20 0 18.26 0 16V4C0 1.74 1.76 0 4 0H16C18.26 0 20 1.74 20 4V4ZM18.34 4C18.34 2.74 17.26 1.66 16 1.66H4C2.76 1.66 1.66 2.74 1.66 4V16C1.66 17.26 2.76 18.34 4 18.34H16C17.26 18.34 18.34 17.26 18.34 16V4V4Z"></path></g><defs><clipPath id="clip0_835:69868"><rect width="20" height="20"></rect></clipPath></defs></svg></i></div></div><div class="sc-1s0saks-10 cYSFTJ"><div class="sc-1s0saks-11 cYGeYt"><div class="sc-1s0saks-13 kQHKsO"><h4 class="sc-1s0saks-15 iSmBPS">Pyaz Kachori [1 Piece]</h4><div class="sc-z30xqq-2 dnSIjs sc-1s0saks-9 kNjbyv"><div class="sc-z30xqq-3 bewuUV"><i class="sc-rbbb40-1 iFnyeo sc-z30xqq-0 fehnhH" size="14" color="#F3C117"><svg xmlns="http://www.w3.org/2000/svg" fill="#F3C117" width="14" height="14" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 kyPUnV"><title>star-fill</title><path d="M6.76 6.8l-6.38 0.96c-0.22 0.040-0.38 0.22-0.38 0.44 0 0.12 0.040 0.24 0.12 0.32v0l4.64 4.76-1.1 6.66c0 0.020 0 0.040 0 0.080 0 0.24 0.2 0.44 0.44 0.44 0.1 0 0.16-0.020 0.24-0.060v0l5.7-3.12 5.68 3.12c0.060 0.040 0.14 0.060 0.22 0.060 0.24 0 0.44-0.2 0.44-0.44 0-0.040 0-0.060 0-0.080v0l-1.1-6.66 4.64-4.76c0.080-0.080 0.12-0.2 0.12-0.32 0-0.22-0.16-0.4-0.36-0.44h-0.020l-6.38-0.96-2.96-6.18c-0.060-0.12-0.18-0.2-0.32-0.2s-0.26 0.080-0.32 0.2v0z"></path></svg></i><i class="sc-rbbb40-1 iFnyeo sc-z30xqq-0 fehnhH" size="14" color="#F3C117"><svg xmlns="http://www.w3.org/2000/svg" fill="#F3C117" width="14" height="14" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 kyPUnV"><title>star-fill</title><path d="M6.76 6.8l-6.38 0.96c-0.22 0.040-0.38 0.22-0.38 0.44 0 0.12 0.040 0.24 0.12 0.32v0l4.64 4.76-1.1 6.66c0 0.020 0 0.040 0 0.080 0 0.24 0.2 0.44 0.44 0.44 0.1 0 0.16-0.020 0.24-0.060v0l5.7-3.12 5.68 3.12c0.060 0.040 0.14 0.060 0.22 0.060 0.24 0 0.44-0.2 0.44-0.44 0-0.040 0-0.060 0-0.080v0l-1.1-6.66 4.64-4.76c0.080-0.080 0.12-0.2 0.12-0.32 0-0.22-0.16-0.4-0.36-0.44h-0.020l-6.38-0.96-2.96-6.18c-0.060-0.12-0.18-0.2-0.32-0.2s-0.26 0.080-0.32 0.2v0z"></path></svg></i><i class="sc-rbbb40-1 iFnyeo sc-z30xqq-0 fehnhH" size="14" color="#F3C117"><svg xmlns="http://www.w3.org/2000/svg" fill="#F3C117" width="14" height="14" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 kyPUnV"><title>star-fill</title><path d="M6.76 6.8l-6.38 0.96c-0.22 0.040-0.38 0.22-0.38 0.44 0 0.12 0.040 0.24 0.12 0.32v0l4.64 4.76-1.1 6.66c0 0.020 0 0.040 0 0.080 0 0.24 0.2 0.44 0.44 0.44 0.1 0 0.16-0.020 0.24-0.060v0l5.7-3.12 5.68 3.12c0.060 0.040 0.14 0.060 0.22 0.060 0.24 0 0.44-0.2 0.44-0.44 0-0.040 0-0.060 0-0.080v0l-1.1-6.66 4.64-4.76c0.080-0.080 0.12-0.2 0.12-0.32 0-0.22-0.16-0.4-0.36-0.44h-0.020l-6.38-0.96-2.96-6.18c-0.060-0.12-0.18-0.2-0.32-0.2s-0.26 0.080-0.32 0.2v0z"></path></svg></i><i class="sc-rbbb40-1 iFnyeo sc-z30xqq-0 fehnhH" size="14" color="#F3C117"><svg xmlns="http://www.w3.org/2000/svg" fill="#F3C117" width="14" height="14" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 kyPUnV"><title>star-fill</title><path d="M6.76 6.8l-6.38 0.96c-0.22 0.040-0.38 0.22-0.38 0.44 0 0.12 0.040 0.24 0.12 0.32v0l4.64 4.76-1.1 6.66c0 0.020 0 0.040 0 0.080 0 0.24 0.2 0.44 0.44 0.44 0.1 0 0.16-0.020 0.24-0.060v0l5.7-3.12 5.68 3.12c0.060 0.040 0.14 0.060 0.22 0.060 0.24 0 0.44-0.2 0.44-0.44 0-0.040 0-0.060 0-0.080v0l-1.1-6.66 4.64-4.76c0.080-0.080 0.12-0.2 0.12-0.32 0-0.22-0.16-0.4-0.36-0.44h-0.020l-6.38-0.96-2.96-6.18c-0.060-0.12-0.18-0.2-0.32-0.2s-0.26 0.080-0.32 0.2v0z"></path></svg></i><i class="sc-rbbb40-1 iFnyeo sc-z30xqq-1 heKqFw" size="14" color="#F3C117"><svg xmlns="http://www.w3.org/2000/svg" fill="#F3C117" width="14" height="14" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 kyPUnV"><linearGradient id="clojqedzx017o3n74c0e3z95t" x1="0" x2="100%" y1="0" y2="0"><stop offset="0" stop-color="#F3C117"></stop><stop offset="40%" stop-color="#F3C117"></stop><stop offset="41%" stop-color="#E8E8E8"></stop><stop offset="1" stop-color="#E8E8E8"></stop></linearGradient><path d="M6.76 6.8l-6.38 0.96c-0.22 0.040-0.38 0.22-0.38 0.44 0 0.12 0.040 0.24 0.12 0.32v0l4.64 4.76-1.1 6.66c0 0.020 0 0.040 0 0.080 0 0.24 0.2 0.44 0.44 0.44 0.1 0 0.16-0.020 0.24-0.060v0l5.7-3.12 5.68 3.12c0.060 0.040 0.14 0.060 0.22 0.060 0.24 0 0.44-0.2 0.44-0.44 0-0.040 0-0.060 0-0.080v0l-1.1-6.66 4.64-4.76c0.080-0.080 0.12-0.2 0.12-0.32 0-0.22-0.16-0.4-0.36-0.44h-0.020l-6.38-0.96-2.96-6.18c-0.060-0.12-0.18-0.2-0.32-0.2s-0.26 0.080-0.32 0.2v0z" fill="url(#clojqedzx017o3n74c0e3z95t)"></path></svg></i></div><span class="sc-z30xqq-4 hTgtKb">61 votes</span></div><div class="sc-17hyc2s-3 jOoliK sc-1s0saks-8 gYkxGN"><span class="sc-17hyc2s-1 cCiQWA">₹40</span></div></div></div><p class="sc-1s0saks-12 hcROsL">Jodhpuri pyaz kachori served with green/red chutney.</p></div></div>

        <div class="sc-bryTEL hzGUKS"><div><div class="sc-eFiFyf evsQHV"><div class="sc-1s0saks-17 bGrnCu"><div class="sc-1s0saks-7 bckjvf"><div height="13rem" width="13rem" class="sc-s1isp7-1 kmRBaC sc-1s0saks-16 dfjlEy"><div src="" class="sc-s1isp7-3 cVOEqG"></div><img alt="Samosa [1 Piece]" src="https://b.zmtcdn.com/data/dish_photos/a86/d9114e087c7b89c313b56bd3cee38a86.jpg?output-format=webp&amp;fit=around|130:130&amp;crop=130:130;*,*" loading="lazy" class="sc-s1isp7-5 fyZwWD"></div><div type="veg" class="sc-1tx3445-0 kcsImg sc-1s0saks-0 jcidl"><i class="sc-rbbb40-1 iFnyeo" size="13" color="#3AB757"><svg xmlns="http://www.w3.org/2000/svg" fill="#3AB757" width="13" height="13" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 khXxzt"><g clip-path="url(#clip0_835:69868)"><path d="M15 10C15 12.74 12.76 15 10 15C7.24 15 5 12.74 5 10C5 7.26 7.26 5 10 5C12.74 5 15 7.24 15 10ZM20 4V16C20 18.26 18.26 20 16 20H4C1.76 20 0 18.26 0 16V4C0 1.74 1.76 0 4 0H16C18.26 0 20 1.74 20 4V4ZM18.34 4C18.34 2.74 17.26 1.66 16 1.66H4C2.76 1.66 1.66 2.74 1.66 4V16C1.66 17.26 2.76 18.34 4 18.34H16C17.26 18.34 18.34 17.26 18.34 16V4V4Z"></path></g><defs><clipPath id="clip0_835:69868"><rect width="20" height="20"></rect></clipPath></defs></svg></i></div></div><div class="sc-1s0saks-10 cYSFTJ"><div class="sc-1s0saks-11 cYGeYt"><div class="sc-1s0saks-13 kQHKsO"><h4 class="sc-1s0saks-15 iSmBPS">Samosa [1 Piece]</h4><div class="sc-z30xqq-2 dnSIjs sc-1s0saks-9 kNjbyv"><div class="sc-z30xqq-3 bewuUV"><i class="sc-rbbb40-1 iFnyeo sc-z30xqq-0 fehnhH" size="14" color="#F3C117"><svg xmlns="http://www.w3.org/2000/svg" fill="#F3C117" width="14" height="14" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 kyPUnV"><title>star-fill</title><path d="M6.76 6.8l-6.38 0.96c-0.22 0.040-0.38 0.22-0.38 0.44 0 0.12 0.040 0.24 0.12 0.32v0l4.64 4.76-1.1 6.66c0 0.020 0 0.040 0 0.080 0 0.24 0.2 0.44 0.44 0.44 0.1 0 0.16-0.020 0.24-0.060v0l5.7-3.12 5.68 3.12c0.060 0.040 0.14 0.060 0.22 0.060 0.24 0 0.44-0.2 0.44-0.44 0-0.040 0-0.060 0-0.080v0l-1.1-6.66 4.64-4.76c0.080-0.080 0.12-0.2 0.12-0.32 0-0.22-0.16-0.4-0.36-0.44h-0.020l-6.38-0.96-2.96-6.18c-0.060-0.12-0.18-0.2-0.32-0.2s-0.26 0.080-0.32 0.2v0z"></path></svg></i><i class="sc-rbbb40-1 iFnyeo sc-z30xqq-0 fehnhH" size="14" color="#F3C117"><svg xmlns="http://www.w3.org/2000/svg" fill="#F3C117" width="14" height="14" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 kyPUnV"><title>star-fill</title><path d="M6.76 6.8l-6.38 0.96c-0.22 0.040-0.38 0.22-0.38 0.44 0 0.12 0.040 0.24 0.12 0.32v0l4.64 4.76-1.1 6.66c0 0.020 0 0.040 0 0.080 0 0.24 0.2 0.44 0.44 0.44 0.1 0 0.16-0.020 0.24-0.060v0l5.7-3.12 5.68 3.12c0.060 0.040 0.14 0.060 0.22 0.060 0.24 0 0.44-0.2 0.44-0.44 0-0.040 0-0.060 0-0.080v0l-1.1-6.66 4.64-4.76c0.080-0.080 0.12-0.2 0.12-0.32 0-0.22-0.16-0.4-0.36-0.44h-0.020l-6.38-0.96-2.96-6.18c-0.060-0.12-0.18-0.2-0.32-0.2s-0.26 0.080-0.32 0.2v0z"></path></svg></i><i class="sc-rbbb40-1 iFnyeo sc-z30xqq-0 fehnhH" size="14" color="#F3C117"><svg xmlns="http://www.w3.org/2000/svg" fill="#F3C117" width="14" height="14" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 kyPUnV"><title>star-fill</title><path d="M6.76 6.8l-6.38 0.96c-0.22 0.040-0.38 0.22-0.38 0.44 0 0.12 0.040 0.24 0.12 0.32v0l4.64 4.76-1.1 6.66c0 0.020 0 0.040 0 0.080 0 0.24 0.2 0.44 0.44 0.44 0.1 0 0.16-0.020 0.24-0.060v0l5.7-3.12 5.68 3.12c0.060 0.040 0.14 0.060 0.22 0.060 0.24 0 0.44-0.2 0.44-0.44 0-0.040 0-0.060 0-0.080v0l-1.1-6.66 4.64-4.76c0.080-0.080 0.12-0.2 0.12-0.32 0-0.22-0.16-0.4-0.36-0.44h-0.020l-6.38-0.96-2.96-6.18c-0.060-0.12-0.18-0.2-0.32-0.2s-0.26 0.080-0.32 0.2v0z"></path></svg></i><i class="sc-rbbb40-1 iFnyeo sc-z30xqq-0 fehnhH" size="14" color="#F3C117"><svg xmlns="http://www.w3.org/2000/svg" fill="#F3C117" width="14" height="14" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 kyPUnV"><title>star-fill</title><path d="M6.76 6.8l-6.38 0.96c-0.22 0.040-0.38 0.22-0.38 0.44 0 0.12 0.040 0.24 0.12 0.32v0l4.64 4.76-1.1 6.66c0 0.020 0 0.040 0 0.080 0 0.24 0.2 0.44 0.44 0.44 0.1 0 0.16-0.020 0.24-0.060v0l5.7-3.12 5.68 3.12c0.060 0.040 0.14 0.060 0.22 0.060 0.24 0 0.44-0.2 0.44-0.44 0-0.040 0-0.060 0-0.080v0l-1.1-6.66 4.64-4.76c0.080-0.080 0.12-0.2 0.12-0.32 0-0.22-0.16-0.4-0.36-0.44h-0.020l-6.38-0.96-2.96-6.18c-0.060-0.12-0.18-0.2-0.32-0.2s-0.26 0.080-0.32 0.2v0z"></path></svg></i><i class="sc-rbbb40-1 iFnyeo sc-z30xqq-1 heKqFw" size="14" color="#F3C117"><svg xmlns="http://www.w3.org/2000/svg" fill="#F3C117" width="14" height="14" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="sc-rbbb40-0 kyPUnV"><linearGradient id="clojqk4ocbie32jnvg75x7jo4" x1="0" x2="100%" y1="0" y2="0"><stop offset="0" stop-color="#F3C117"></stop><stop offset="38%" stop-color="#F3C117"></stop><stop offset="39%" stop-color="#E8E8E8"></stop><stop offset="1" stop-color="#E8E8E8"></stop></linearGradient><path d="M6.76 6.8l-6.38 0.96c-0.22 0.040-0.38 0.22-0.38 0.44 0 0.12 0.040 0.24 0.12 0.32v0l4.64 4.76-1.1 6.66c0 0.020 0 0.040 0 0.080 0 0.24 0.2 0.44 0.44 0.44 0.1 0 0.16-0.020 0.24-0.060v0l5.7-3.12 5.68 3.12c0.060 0.040 0.14 0.060 0.22 0.060 0.24 0 0.44-0.2 0.44-0.44 0-0.040 0-0.060 0-0.080v0l-1.1-6.66 4.64-4.76c0.080-0.080 0.12-0.2 0.12-0.32 0-0.22-0.16-0.4-0.36-0.44h-0.020l-6.38-0.96-2.96-6.18c-0.060-0.12-0.18-0.2-0.32-0.2s-0.26 0.080-0.32 0.2v0z" fill="url(#clojqk4ocbie32jnvg75x7jo4)"></path></svg></i></div><span class="sc-z30xqq-4 hTgtKb">170 votes</span></div><div class="sc-17hyc2s-3 jOoliK sc-1s0saks-8 gYkxGN"><span class="sc-17hyc2s-1 cCiQWA">₹20</span></div></div></div><p class="sc-1s0saks-12 hcROsL">Served with green chutney and red chutney.</p></div></div></div></div></div>
 -->






        <?php

$host = 'your_database_host';
$user = 'your_database_user';
$password = 'your_database_password';
$database = 'your_database_name';

// Create a connection
// $conn = new mysqli("localhost", "root", "", "foodsurfers");
include 'db_con.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_SESSION["user_id"])) {
    $email = $_SESSION["user_id"];
}
// Query to fetch the last 7 days' values
$query = "SELECT `messmenu`.*,`mess`.* FROM    `messmenu`,`mess`  WHERE `messmenu`.Email = `mess`.Email AND `messmenu`.Email = '$email'";

// Execute the query
$result = $conn->query($query);

// Check for errors
if (!$result) {
    die("Query failed: " . $connection->error);
}

// Assuming you want to display each record in a separate profile box
while ($row = $result->fetch_assoc()) {

?>


            <div class="profile-box">

            <div class="profile-left">
                <img class="cardImage" src="../Images/d2.jpg" alt=""></img>

            </div>
            <div class="profile-right">
                <div class="profile-details">
                    <h2 class="name"><?php echo $row['Mess_name']; ?> </h2>
                    <p class="role"><?php echo $row['Address']; ?> </p>
                    <p class="role">Morning <?php echo $row['morningStartTime']; ?>  To <?php echo $row['morningEndTime']; ?> </p>
                    <p class="role">Evening <?php echo $row['eveningStartTime']; ?>  To <?php echo $row['eveningEndTime']; ?></p>
                </div>
                <hr>
              
                <div class="contact-info">
                    <div class="contact-section">
                        <h3>Date</h3>
                        <p> <p ><?php echo $row['date']; ?>  </p></p>
                    </div>
                    <div class="contact-section">
                       <br>
                       <h3>Type</h3>
                        <p ><?php echo $row['meal_type']; ?>  </p>
                        <br>
                    </div>
                    <div class="contact-section">
                        <h3>Menu</h3>
                        <p> <p ><?php echo $row['menu_item']; ?>  </p></p>
                    </div>
                </div>
                
                
                
            </div>
        </div>
        <br>

        <?php
}

// Close the connection
$conn->close();

?>
            






















    </div>
        
    </div>

</div>

<?php
include('../includes/footer.php');
?>
