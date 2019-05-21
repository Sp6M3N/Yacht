<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Title</title>
</head>
<body>
  <?php include ('partials/header.php'); ?>

      <div class="newsletter">
          <div class="container container--sm">
              <h1>Welcome on board</h1>
            <h2>I want to be notified</h2>
        
            <div class="margin-top--sm margin-bottom--md">
              <p class="newsletter__description">Get our monthly recap with the latest news, articles and resources.</p>
            </div>
        
            <form class="newsletter__form">
              <input aria-label="Email address" class="form-control" type="email" placeholder="Enter your email address">
              <button class="btn btn--primary">SEND</button>
            </form>
        
            <p role="alert" class="newsletter__feedback newsletter__feedback--is-visible newsletter__feedback--success"><strong>Success!</strong> Please check your inbox for a confirmation email.</p>
        
            <div class="margin-top--xs">
              <small class="newsletter__small">By subscribing you agree to our <a href="#0">privacy policy</a>.</small>
            </div>
            <div>
                <p>or sign-up</p>
              <a href="#0" class="btn btn--secondary">Create an account</a>
            </div>
          </div> <!-- container -->
        </div>


        <?php include ('partials/footer.php'); ?>
        

        
</div>
<script src="assets/js/util.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>