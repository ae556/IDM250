<?php
// There are two ways to get the menu items:
// 1. wp_nav_menu(['theme_location' => 'primary-menu']); @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
// 2. get_theme_menu() which is a custom function I made to get the menu items. It exist in our functions.php file. You can then loop through it and write your own markup
$menu = get_theme_menu('primary-menu');
?>
<!-- Start ./components/header -->

<section class="header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <!-- logo -->
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <a class="navbar-brand" href="<?php echo site_url(); ?>"><img width="30" src="<?php echo get_template_directory_uri(); ?>/dist/images/404.png"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <!-- show the menu items as link elements -->
                    <?php foreach ($menu as $item) {
                        // echo "<a href='{$item->url}' class=''>{$item->title}</a>";
                        echo "<li class='nav-item'><a class='nav-link active' aria-current='page' href='{$item->url}'>{$item->title}</a></li>";
                    }  ?>
                    <li class='nav-item'><a class='nav-link active' aria-current='page' href='/doesnotexist'>404</a></li>

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li> -->
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</section>