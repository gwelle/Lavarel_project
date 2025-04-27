<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Email de contact">
    <meta charset="utf-8">
    <title>Prise de contact</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 20px;
        background-color: #f4f4f4;
      }
      h2 {
        color: #333;
      }
      ul {
        list-style-type: none;
        padding: 0;
      }
      li {
        margin-bottom: 10px;
      }
      strong {
        color: #555;
      }
      @media (max-width: 600px) {
        body {
          padding: 10px;
        }
        h2 {
          font-size: 1.5em;
        }
      }
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arial:400,700">
  </head>
  <body>
    <h2>Inscription confirmée</h2>
    <p>Récapitulatif :</p>
    <ul>
      <li><strong>Nom</strong> : {{ $user->name }}</li>
      <li><strong>Email</strong> : {{ $user->email }}</li>
    </ul>
  </body>
</html>
