<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about us page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
    <!--  bootstrap-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

   <style>
    
    .btn{
        background-color: var(--pink);
        font-size: 20px;
    }
    .container{
        flex-wrap: wrap;
        margin:0 auto;
    }
    .content-1{
        text-transform: capitalize;
        margin-top: 30%;

    }
    .content-1 a{
        font-size: 14px;
    }
    .image img{
        margin-top: 10px;
    }
   </style>
</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">Home</a> / about </p>
</section>


<section class="container">
    <!-- why choose us? -->
    <div class="row">
        <div class="col">
            <div class="image">
                 <img src="images/about1.jpg" class="rounded float-start" alt="Cinque Terre" width="500" height="500"> 
            </div>
        </div>
        <div class="col">
            <div class="text-center">
                <div class="content-1">
                    <h1>why choose us?</h1>
                    <p class="fs-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odit voluptatum alias sed est in magni nihil nisi deleniti nostrum.</p>
                    <a href="shop.php" class="btn">shop now</a>
                </div>            
            </div>
        </div>
    </div>

    <!-- what we provided? -->
    <div class="row">
        <div class="col">
            <div class="text-center">
                <div class="content-1">
                    <h1>what we provided?</h1>
                    <p class="fs-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odit voluptatum alias sed est in magni nihil nisi deleniti nostrum.</p>
                    <a href="contact.php" class="btn">Contact us</a>
                </div>            
            </div>
        </div>
        <div class="col">
            <div class="image">
                <img src="images/about2.jpg" class="rounded float-end" alt="Cinque Terre" width="500" height="500"> 
            </div>
        </div>
    </div>
       
    <!-- who we are -->
    <div class="row">
        <div class="col">
            <div class="image">
                <img src="images/about3.jpg" class="rounded float-start" alt="Cinque Terre" width="500" height="500"> 
            </div>
        </div>
        <div class="col">
            <div class="text-center">
                <div class="content-1">
                    <h1>who we are?</h1>
                    <p class="fs-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odit voluptatum alias sed est in magni nihil nisi deleniti nostrum.</p>
                    <a href="#reviews" class="btn">Clients reviews</a>
                </div>            
            </div>
        </div>
    </div>
</section><br><br>

<!-- client's reviews -->
<div class="text-center">
     <h1>CLIENT'S REVIEWS</h1>
</div><br><br>

<div class="container">
    <div class="row">
        <!-- first person -->
        <div class="col-sm">
            <div class="border border-dark" style="border-radius: 2%;">
                <div class="text-center" style="padding:10px;">
                    <img src="images/hungminh.jpg" alt="" style="border-radius: 100px; width: 200px">
                    <p class="fs-5">I found the shop very friendly, the goods are good, I will definitely buy again.</p>
                    <div class="border border-dark" style="padding:1rem 1.5rem; color:#ffc107">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <h3 class="text-center">Hung Minh</h3>
            </div>
        </div>

        <!-- second -->
        <div class="col-sm">
            <div class="border border-dark" style="border-radius: 2%;">
                <div class="text-center" style="padding:10px;">
                    <img src="images/trihieu.jpg" alt="" style="border-radius: 100px; width: 200px">
                    <p class="fs-5">Nice package, good quality, reasonable price. Shop enthusiastic advice.</p>
                    <div class="border border-dark" style="padding:1rem 1.5rem; color:#ffc107">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <h3 class="text-center">Tri Hieu</h3>
            </div>
        </div>
        <!-- third -->
        <div class="col-sm">
        <div class="border border-dark" style="border-radius: 2%;">
                <div class="text-center" style="padding:10px;">
                    <img src="images/cuongle.jpg" alt="" style="border-radius: 100px; width: 200px;">
                    <p class="fs-5">Good quality, pretty fast delivery. Shop owner is super cute, and friendly.</p>
                    <div class="border border-dark" style="padding:1rem 1.5rem; color:#ffc107">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <h3 class="text-center">Cuong Le</h3>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 5%;">
        <!-- first person -->
        <div class="col-sm">
            <div class="border border-dark" style="border-radius: 2%;">
                <div class="text-center" style="padding:10px;">
                    <img src="images/viet.jpg" alt="" style="border-radius: 100px; width: 200px;">
                    <p class="fs-5">Good quality, pretty fast delivery. Shop owner is super cute, and friendly.</p>
                    <div class="border border-dark" style="padding:1rem 1.5rem; color:#ffc107">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <h3 class="text-center">Viet Dang</h3>
            </div>
        </div>

        <!-- second -->
        <div class="col-sm">
            <div class="border border-dark" style="border-radius: 2%;">
                <div class="text-center" style="padding:10px;">
                    <img src="images/vu.jpg" alt="" style="border-radius: 100px; width: 200px;">
                    <p class="fs-5">Super nice products and many varieties to choose from. 100% shop support</p>
                    <div class="border border-dark" style="padding:1rem 1.5rem; color:#ffc107">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <h3 class="text-center">Vu Truong</h3>
            </div>
        </div>
        <!-- third -->
        <div class="col-sm">
        <div class="border border-dark" style="border-radius: 2%;">
                <div class="text-center" style="padding:10px;">
                    <img src="images/meomeo.jpg" alt="" style="border-radius: 100px; width: 200px;">
                    <p class="fs-5">Super nice products and many varieties to choose from. 100% shop support</p>
                    <div class="border border-dark" style="padding:1rem 1.5rem; color:#ffc107">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <h3 class="text-center">Mèooo</h3>
            </div>
        </div>
    </div>
</div>

<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>