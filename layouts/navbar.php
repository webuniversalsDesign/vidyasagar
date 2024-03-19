<?php @include('layouts/topbar.php') ?>

<nav class="d-flex gap-5 ">
<a href="index.php" class="logo">
    <img src="assets/img/logo/logo.jpg" alt="logo" />
</a>

<ul class="nav_links" id="menubar">
<li class="t-sm py-md-1 py-3 font-w-500"><a href="index.php">Home</a></li>
<li class="t-sm py-md-1 py-3 font-w-500"><a href="about.php">About us</a></li>
<li class="t-sm py-md-1 py-3 font-w-500"><a href="our-campuses.php">Our Campuses</a></li>
<li class="t-sm py-md-1 py-3 font-w-500"><a href="curriculum.php">Curriculum</a></li>

<li class="t-sm py-md-1 py-3 font-w-500 cus-dropdown">
    <a href="#" onclick="togglesubmenu()">Gallery &nbsp; &nbsp; <i class="fa-solid fa-chevron-right menu-arrow"></i></a>
<ul class="drop-list" id="droplist">
    <li class="drop-links"><a href="gallery-habbel.php">Habbel Bhoopasandra</a> </li>
    <li class="drop-links"><a href="gallery-jpnagar.php">JP Nagar</a></li>
</ul>
</li>


<li class="t-sm py-md-1 py-3 font-w-500 cus-dropdown">
    <a href="#" onclick="togglesubmenu2()">Accolades &nbsp; &nbsp; <i class="fa-solid fa-chevron-right menu-arrow"></i></a>
<ul class="drop-list" id="droplist2">
    <li class="drop-links"><a href="#">Our Testimonial</a> </li>
    <li class="drop-links"><a href="#">Awards</a></li>
</ul>
</li>


<li class="t-sm py-md-1 py-3 font-w-500"><a href="#">New Corner</a></li>
<li class="t-sm py-md-1 py-3 font-w-500"><a href="#">Admission</a></li>
</ul>

<div class="menubar desktop-none" onclick='togglemenu()'>
<i class="fa-solid fa-bars t-xlg t-color-theme-red"></i>
</div>
</nav>


<script>
    function togglemenu(){
const menubar= document.getElementById('menubar');
menubar.classList.toggle('openmenu')
    }

    function togglesubmenu(){
const droplist = document.getElementById('droplist');
droplist.classList.toggle('opensubmenu')

    }

    function togglesubmenu2(){
const droplist = document.getElementById('droplist2');
droplist.classList.toggle('opensubmenu')

    }
</script>