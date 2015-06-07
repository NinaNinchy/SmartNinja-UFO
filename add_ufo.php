<?php
	require_once('header.php');

    $napaka = array();
	
    // Dobi podatke iz forme
    if(isset($_POST['kdaj'])) {
        if($_POST['kdaj'] == "") {
            array_push($napaka, "prosimo vnesite čas videnja");
        } else {
            $naslov = $_POST['kdaj'];
        }

        if($_POST['lokacija'] == "") {
            array_push($napaka, "prosimo dodajte lokacijo");
        } else {
            $vsebina = $_POST['lokacija'];
        }

        if($_POST['izgled'] == "") {
            array_push($napaka, "prosimo opišite izgled vesoljca");
        } else {
            $vsebina = $_POST['izgled'];
        }

        if($_POST['dogajanje'] == "") {
            array_push($napaka, "prosimo opišite dogajanje");
        } else {
            $vsebina = $_POST['dogajanje'];
        }

        if($_POST['ugrabitev'] == "") {
            array_push($napaka, "prosimo navedite ali je prišlo do ugrabitve");
        } else {
            $vsebina = $_POST['ugrabitev'];
        }

        if($_POST['kontakt'] == "") {
            array_push($napaka, "prosimo dodajte vaš kontakt");
        } else {
            $vsebina = $_POST['kontakt'];
        }



        // Vpis v bazo
        if(!$napaka) {
            $db->query("INSERT INTO videnja (kdaj, lokacija, izgled, dogajanje, ugrabitev, kontakt) VALUES ('$kdaj', '$lokacija', '$izgled', '$dogajanje', '$ugrabitev', '$kontakt')");
        }
    }
?>

<?php
    if($napaka) {
        foreach ($napaka as $sporocilo) {
            echo '<div style="color: red;">'.$sporocilo.'</div>';
        }
    }
?>
<form action="add_ufo.php" method="POST">
    Naslov videnja:<br>
    <input type="text" name="lokacija"><br>
    
    Vsebina:<br>
    <textarea name="dogajanje" cols="30" rows="10"></textarea><br>

    <input type="submit" value="Dodaj videnje" style="margin-bottom: 40px;">

</form>
		
<?php require_once('footer.php'); ?>