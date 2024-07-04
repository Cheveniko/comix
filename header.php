<!doctype html>
<html lang="es">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="La mejor web de Comics">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />

    <?php wp_head(); ?>
</head>

<body class="">
    <header class="fixed z-30 w-full bg-comix-primary">
        <nav class="container flex items-center justify-between py-8">
            <a href="<?php echo get_home_url(); ?>" class="text-white font-bold text-2xl">
                Comix
            </a>
            <div class="flex text-white gap-x-8 justify-center font-semibold items-center">
                <a href="<?php echo get_home_url(); ?>/comics" class="">Comics</a>
                <a href="<?php echo get_home_url(); ?>/categories" class="">Categories</a>
                <a href="<?php echo get_home_url(); ?>/blog" class="">Blog</a>
                <!-- <a href="<?php echo get_home_url(); ?>/subscribe" class="">Subscribe</a> -->
            </div>
            <div class="flex gap-x-4 items-center">
                <!-- <a href="<?php echo get_home_url(); ?>/login" class="bg-white text-comix-primary rounded-lg px-4 py-2">Login</a> -->
                <a href="<?php echo get_home_url(); ?>/cart">
                    <svg viewBox="0 0 40 40" fill="white" xmlns="http://www.w3.org/2000/svg" class=" size-[25px]">
                        <path d="M28.3334 30C29.2175 30 30.0653 30.3512 30.6904 30.9764C31.3156 31.6015 31.6667 32.4493 31.6667 33.3334C31.6667 34.2174 31.3156 35.0653 30.6904 35.6904C30.0653 36.3155 29.2175 36.6667 28.3334 36.6667C27.4494 36.6667 26.6015 36.3155 25.9764 35.6904C25.3513 35.0653 25.0001 34.2174 25.0001 33.3334C25.0001 31.4834 26.4834 30 28.3334 30ZM1.66675 3.33337H7.11675L8.68341 6.66671H33.3334C33.7754 6.66671 34.1994 6.8423 34.5119 7.15486C34.8245 7.46742 35.0001 7.89135 35.0001 8.33337C35.0001 8.61671 34.9167 8.90004 34.8001 9.16671L28.8334 19.95C28.2667 20.9667 27.1667 21.6667 25.9167 21.6667H13.5001L12.0001 24.3834L11.9501 24.5834C11.9501 24.6939 11.994 24.7999 12.0721 24.878C12.1503 24.9561 12.2562 25 12.3667 25H31.6667V28.3334H11.6667C10.7827 28.3334 9.93485 27.9822 9.30973 27.3571C8.6846 26.7319 8.33341 25.8841 8.33341 25C8.33341 24.4167 8.48341 23.8667 8.73341 23.4L11.0001 19.3167L5.00008 6.66671H1.66675V3.33337ZM11.6667 30C12.5508 30 13.3986 30.3512 14.0238 30.9764C14.6489 31.6015 15.0001 32.4493 15.0001 33.3334C15.0001 34.2174 14.6489 35.0653 14.0238 35.6904C13.3986 36.3155 12.5508 36.6667 11.6667 36.6667C10.7827 36.6667 9.93485 36.3155 9.30973 35.6904C8.6846 35.0653 8.33341 34.2174 8.33341 33.3334C8.33341 31.4834 9.81675 30 11.6667 30ZM26.6667 18.3334L31.3001 10H10.2334L14.1667 18.3334H26.6667Z" fill="white" />
                    </svg>
                </a>
            </div>
        </nav>
    </header>
