<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez - Nous</title>
</head>
<body>
<div class="form-container">
        <div class="image-container"><img src="logo.webp" alt="assainissement-paris">
        </div>
        <form action="traitement.php" method="post">

            <label for="departure">Nom :</label>
            <input type="text" id="name" name="nom" required>

            <label for="departure">E-mail :</label>
            <input type="text" id="departure" name="e-mail" required>

            <label for="departure">Téléphone :</label>
            <input type="text" id="tel" name="telephone" required>

            <label for="passengers">Prestations :</label>
            <select id="passengers" name="services" required>
                <option value="DÉGORGEMENT">DÉGORGEMENT</option>
                <option value="CURAGE">CURAGE</option>
                <option value="INSPECTION CAMÉRA">INSPECTION CAMÉRA</option>
                <option value="POMPAGE">POMPAGE</option>
                <option value="POMPE DE RELEVAGE">POMPE DE RELEVAGE</option>
                <option value="URGENCE">URGENCE</option>
            </select>
            <button type="submit">ENVOYER</button>
        </form>
    </div>
</body>
</html>