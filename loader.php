<?php
if(isset($_GET['page'])) {
$page = $_GET['page'];
    if($page=='home') {
        include 'home.php';
    } elseif($page == 'services') {
        include 'services.php';
    } elseif($page == 'book-repair') {
        include 'booking.php';
    } elseif($page=='track') {
        include 'track.php';
    } elseif($page == 'blog') {
        include 'blog.php';
    } elseif($page == 'contact') {
        include 'contact.php';
} else {
        echo "404 - Halaman tidak ditemukan";
    }
}
?>
