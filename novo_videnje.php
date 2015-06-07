<?php
	require_once('header.php');
	
	$id = $_GET["id"];
    $videnje = $db->get_row("SELECT * FROM videnja WHERE id = $id");
?>
        
        <div class="content">
            <h1><?php echo $novo_videnje->kdaj; ?></h1>
            <p><?php echo $novo_videnje->lokacija; ?></p>
            <p><?php echo $novo_videnje->izgled; ?></p>
            <p><?php echo $novo_videnje->dogajanje; ?></p>
            <p><?php echo $novo_videnje->ugrabitev; ?></p>
            <p><?php echo $novo_videnje->kontakt; ?></p>
        </div>
		
<?php require_once('footer.php'); ?>