<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Connexion</title>
  <!-- Bootstrap 3 CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f5f5f5;
      min-height: 100vh;
      display: flex;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
    }

    .form-signin {
      max-width: 330px;
      padding: 30px 20px;
      margin: auto;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .form-signin .form-control {
      position: relative;
      height: auto;
      padding: 10px;
      font-size: 16px;
    }

    .form-signin .form-control:focus {
      z-index: 2;
    }

    .social-btn {
      margin-bottom: 10px;
      text-align: center;
    }

    .social-btn .btn {
      width: 100%;
      padding: 6px 12px;
      font-size: 14px;
      line-height: 1.42857143;
      border-radius: 4px;
    }

    .divider {
      margin: 20px 0;
      text-align: center;
      position: relative;
      height: 1px;
      background: #e0e0e0;
    }

    .divider span {
      background: #f5f5f5;
      padding: 0 10px;
      color: #999;
      font-size: 12px;
      position: relative;
      top: -8px;
    }

    .forgot-password {
      font-size: 13px;
    }

    .card-footer {
      margin-top: 20px;
      padding-top: 15px;
      border-top: 1px solid #eee;
      text-align: center;
      font-size: 13px;
    }

    .card-footer a {
      color: #337ab7;
      text-decoration: none;
    }

    .card-footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="form-signin">
      <h1 class="text-center" style="font-size: 20px; font-weight: 600; margin-bottom: 5px;">Connectez-vous-a-votre compte</h1>
      <p class="text-center text-muted" style="margin-bottom: 25px;">Bienvenue! connectez-vous-pour-continue</p>

      <!-- Boutons sociaux -->
      <div class="row">
        <div class="col-xs-6 social-btn">
          <button type="button" class="btn btn-default">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 262" style="margin-right: 6px; vertical-align: -3px;">
              <path fill="#4285f4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622l38.755 30.023l2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path>
              <path fill="#34a853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055c-34.523 0-63.824-22.773-74.269-54.25l-1.531.13l-40.298 31.187l-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path>
              <path fill="#fbbc05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82c0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602z"></path>
              <path fill="#eb4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0C79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path>
            </svg>
            Google
          </button>
        </div>
        <div class="col-xs-6 social-btn">
          <button type="button" class="btn btn-default">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256" style="margin-right: 6px; vertical-align: -3px;">
              <path fill="#1877f2" d="M256 128C256 57.3 198.7 0 128 0S0 57.3 0 128c0 63.9 46.8 116.7 108 126.4V160H76V128h32V104c0-31.3 18.7-48 48-48h32v32h-20c-5.5 0-8 2.5-8 8v24h32l-4 32h-28v94.4C209.2 244.7 256 191.9 256 128z" />
            </svg>
            Facebook
          </button>
        </div>
      </div>

      <!-- Séparateur -->
      <div class="divider">
        <span>ou</span>
      </div>

      <!-- Formulaire -->
      <form action="action/action-conx.php" method="POST">
        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Votre adresse e-mail" required>
        </div>
        <div class="form-group">
          <div class="clearfix">
            <label for="password" class="pull-left">Password</label>
            <a href="#" class="pull-right forgot-password">Mot-de-pas-oublié</a>
          </div>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Se-connecter</button>
      </form>

      <!-- Pied de carte -->
      <div class="card-footer">
        Vous-n'avez-pas-de-compte?
        <a href="http://localhost/parrainages/inscription.php#">Creez-un-compte</a>
      </div>
    </div>
    <!-- footer -->
  <?php include "include/footer.php"; ?>

  </div>

</body>

</html>