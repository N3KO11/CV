<?php
require_once 'config.php';

// Pobieranie danych z bazy
$cv = getCVData();

// Jeśli brak danych, wyświetl błąd
if (!$cv) {
    die("Błąd: Nie znaleziono danych CV w bazie.");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="CV.css" />
  </head>
  <body>
    <div class="calosc">
      <div class="kartka"></div>
      <div class="tekst">CV</div>
      <img class="zdjecie" src="<?php echo htmlspecialchars($cv['zdjecie']); ?>" alt="Zdjęcie <?php echo htmlspecialchars($cv['imie_nazwisko']); ?>"/>
      <div class="imie"><?php echo nl2br(htmlspecialchars($cv['imie_nazwisko'])); ?></div>
      <div class="mail">
        📧 <?php echo htmlspecialchars($cv['email']); ?><br /><br />
        📞&nbsp;&nbsp;<?php echo htmlspecialchars($cv['telefon']); ?><br /><br />
        🧁&nbsp;&nbsp;<?php echo htmlspecialchars($cv['data_urodzenia']); ?>
      </div>
      <p class="akapit">
        <?php echo htmlspecialchars($cv['o_mnie']); ?>
      </p>
      <p class="akapit2">
        <span class="span">Wykształcenie:<br /></span>
        <span class="tekst2"></span>
        <span class="tekst3">
            <?php echo htmlspecialchars($cv['wyksztalcenie']); ?>
        </span>
      </p>
      <p class="zainteresowania">
        <span class="span">Zainteresowania:<br /></span>
        <span class="tekst3"><?php echo htmlspecialchars($cv['zainteresowania']); ?></span>
      </p>
      <p class="umiejetnosci">
        <span class="span">Umiejętności:<br /></span>
        <span class="tekst3">
          <?php echo htmlspecialchars($cv['umiejetnosci']); ?>
        </span>
      </p>
    </div>
  </body>
</html>