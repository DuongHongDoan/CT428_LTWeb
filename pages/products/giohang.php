<!-- <p>gio hang</p> -->
<?php
    session_start();
    if(isset($_SESSION['cart'])) {
        print_r($_SESSION['cart']);
    }

?>

<h1>Gio hang</h1>

<?php
    if(isset($_SESSION['cart'])) {
        print_r($_SESSION['cart']);
    }
?>