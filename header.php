<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sip Spot</title>
  <?php wp_head() ?>
</head>
<!-- <body>
    <header class="border-2 w-auto">
    <div id="logo">Sip Spot</div>
    <nav>
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#services">Services</a>
      <a href="#contact">Contact</a>
    </nav>
  </header> -->

<body>
  <header">
    <div class="flex justify-between p-10 bg-[#111844]">
      <div class="text-white text-2xl font-bold">Sip Spot</div>
      <!-- <nav class="flex gap-10 text-white text-2xl font-bold " >
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
      </nav> -->
      <?php 
      wp_nav_menu([
        'theme_location' => 'primary' ,
        'container' => false,
        'menu_class' => 'flex gap-10 text-white text-2xl font-bold '
      ])
      
      ?>



    </div>
  </header>