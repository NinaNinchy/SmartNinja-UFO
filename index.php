<?php require_once('header.php'); ?>

<?php 
//povleče iz baze vse vrstice v tabeli videnja
$videnja = $db->get_results("SELECT * FROM videnja"); 
?>

<div class="content blog">
<?php 
    foreach ($videnja as $videnje) {
    echo '<a href="videnje.php?id='.$videnje->id.'">'.$videnje->kdaj.'</a>';
    echo "<p>lokacija: ".$videnje->lokacija."</p>";
    } 
?>
</div>

<?php require_once('footer.php'); ?>
