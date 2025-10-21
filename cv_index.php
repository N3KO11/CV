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
      <img class="zdjecie" id="zdjecie" src="" alt="Zdjęcie"/>
      <div class="imie" id="imie"></div>
      <div class="mail" id="kontakt"></div>
      <p class="akapit" id="o_mnie"></p>
      <p class="akapit2">
        <span class="span">Wykształcenie:<br /></span>
        <span class="tekst2"></span>
        <span class="tekst3" id="wyksztalcenie"></span>
      </p>
      <p class="zainteresowania">
        <span class="span">Zainteresowania:<br /></span>
        <span class="tekst3" id="zainteresowania"></span>
      </p>
      <p class="umiejetnosci">
        <span class="span">Umiejętności:<br /></span>
        <span class="tekst3" id="umiejetnosci"></span>
      </p>
    </div>

    <script>
      fetch('api.php')
        .then(response => {
          if (!response.ok) {
            throw new Error('Błąd pobierania danych z API');
          }
          return response.json();
        })
        .then(data => {
          document.getElementById('zdjecie').src = data.zdjecie;
          document.getElementById('zdjecie').alt = 'Zdjęcie ' + data.imie_nazwisko;
          document.getElementById('imie').innerHTML = data.imie_nazwisko.replace('\n', '<br/>');
          document.getElementById('kontakt').innerHTML = 
            '📧 ' + data.email + '<br /><br />' +
            '📞&nbsp;&nbsp;' + data.telefon + '<br /><br />' +
            '🧁&nbsp;&nbsp;' + data.data_urodzenia;
          document.getElementById('o_mnie').textContent = data.o_mnie;
          document.getElementById('wyksztalcenie').textContent = data.wyksztalcenie;
          document.getElementById('zainteresowania').textContent = data.zainteresowania;
          document.getElementById('umiejetnosci').textContent = data.umiejetnosci;
        })
        .catch(error => {
          console.error('Błąd:', error);
          alert('Nie udało się załadować danych CV. Sprawdź konsolę przeglądarki.');
        });
    </script>
  </body>
</html>