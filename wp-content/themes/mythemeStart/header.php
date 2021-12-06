<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php echo bloginfo("charset");?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?php echo bloginfo("title");?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <!-- Core theme CSS (includes Bootstrap)-->


    <?php wp_head();?>

</head>
<body <?php body_class();?>>
<body class="container mt-5">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light text-center">
    <div class="container px-4 px-lg-5 text-center" style="margin-left: 200px;">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse center" id="navbarSupportedContent" style="margin-left: 40px;">

            <?php wp_nav_menu(array(
                    "theme_location" => "ms_primary_menu_id",
                    "container" => false,
                    "items_wrap" => '<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">%3$s</ul>'



                )
            );?>


            <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">All Products</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                        <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                    </ul>
                </li>
            </ul>
            -->
            <form class="d-flex" style="margin-right: 47%">
                <button class="btn btn-outline-dark" type="submit">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                </button>
            </form>


        </div>
    </div>

</nav>

