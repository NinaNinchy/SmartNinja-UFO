<?php
	require_once('header.php');
	
    //oštevilčenje posameznega vnosa (z id)
	$id = $_GET["id"];
    //vnos novega videnja v bazo (tu se definira spremeniljivka $videnje)
    $videnje = $db->get_row("SELECT * FROM videnja WHERE id = $id");
?>
        
        <div class="content">
            <h1>Videnje št.: </h1><?php echo $id = $_GET["id"]; ?>
            <p>Kdaj: </p><?php echo $videnje->kdaj; ?>
            <p>Lokacija: </p><?php echo $videnje->lokacija; ?>
            <p>Izgled: </p><?php echo $videnje->izgled; ?>
            <p>Dogajanje: </p><?php echo $videnje->dogajanje; ?>
            <p>Ugrabitev: </p><?php echo $videnje->ugrabitev; ?>
            <p>Kontakt: </p><?php echo $videnje->kontakt; ?>
        </div>
		
<?php require_once('footer.php'); ?>