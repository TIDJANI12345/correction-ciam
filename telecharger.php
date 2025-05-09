<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Télécharger votre produit</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      padding: 20px;
      text-align: center;
    }
    .download-button {
      padding: 15px 30px;
      background-color: green;
      color: white;
      text-decoration: none;
      font-size: 18px;
      border-radius: 5px;
      display: inline-block;
      margin-top: 20px;
    }
  </style>
</head>
<body>

  <h1>Merci pour votre achat !</h1>

  <div id="download-section">
    <!-- Vérifie si le paiement a été effectué avec succès -->
    <p id="message"></p>
    <a id="download-link" href="" class="download-button" style="display: none;">Télécharger maintenant</a>
  </div>

  <script>
    // Vérifier si le paiement a été effectué
    if (localStorage.getItem('paymentStatus') === 'success') {
      document.getElementById('message').textContent = 'Votre paiement a été validé avec succès. Vous pouvez maintenant télécharger votre produit.';
      document.getElementById('download-link').style.display = 'inline-block';
      document.getElementById('download-link').href = 'chemin/vers/ton/document.pdf'; // Le chemin vers le fichier à télécharger
    } else {
      document.getElementById('message').textContent = 'Le paiement n\'a pas été effectué. Veuillez recommencer.';
    }
  </script>

</body>
</html>
