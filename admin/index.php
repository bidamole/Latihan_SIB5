<?php
include_once 'top.php';
include_once 'menu.php';
?>
<div>
    <div class="container-fluid px-4">
        <!--<h1>Selamat Datang di Halaman Admin</h1> -->
        <?php
        //error_reporting(0);
        //membuat logika sederhana untuk mengarahkan url ke file
        //yang mempunyai extension .php
        //rooting->file yang mengarahkan url
        $url = !isset($_GET['url']) ? 'dashboard' : $_GET['url'];
        if($url == 'dashboard'){
            include_once 'dashboard.php';
        } else if($url == 'about') {
            include_once 'about.php';
        } else if($url == 'contact'){
            include_once 'contact.php';
        } else if($url == 'data'){
            include_once 'data.php';
        } else if(!empty($url)){
            include_once ''.$url.'.php';
        } else {
          include_once 'dashboard.php';
        }
        ?>
    </div>
</div>
<?php
include_once 'bottom.php';
?>