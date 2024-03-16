<?php
$owoce = array("jablko", "banan", "pomarancza");


foreach ($owoce as $owoc) {
    $zaczynaSieP = ($owoc[0] == 'p' || $owoc[0] == 'P') ? "Tak" : "Nie";

    $owocOdTylu = "";
    for ($i = strlen($owoc) - 1; $i >= 0; $i--) {
        $owocOdTylu .= $owoc[$i];
    }

      echo $owocOdTylu . " (Czy zaczyna się od 'p'?) - " . $zaczynaSieP . "<br>";
}
?>
