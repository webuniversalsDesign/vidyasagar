<?php @include('layouts/topbar.php') ?>

<nav class="d-flex gap-5 ">
<a href="index.php" class="logo">
    <img src="assets/img/logo/logo.jpg" alt="logo" />
</a>

<ul class="nav_links" id="menubar">
<li class="t-sm py-md-1 py-3 font-w-500"><a href="index.php">Home</a></li>
<li class="t-sm py-md-1 py-3 font-w-500"><a href="about.php">About us</a></li>
<li class="t-sm py-md-1 py-3 font-w-500"><a href="#">Our Campuses</a></li>
<li class="t-sm py-md-1 py-3 font-w-500"><a href="curriculum.php">Curriculum</a></li>
<li class="t-sm py-md-1 py-3 font-w-500"><a href="#">Gallery</a></li>
<li class="t-sm py-md-1 py-3 font-w-500"><a href="#">Accolades</a></li>
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
</script>