<html>
<head>
    <title>Shareboard</title>
    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/style.css">
</head>
<body style="padding:70px;">
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Shareboards</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo ROOT_URL ; ?>">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL ."shares"; ?>">Shares</a>
      </li>
    </ul>

    <ul class="navbar-nav mr-auto navbar-right">
    <?php if (isset($_SESSION['isLogged'])) : ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>">Welcome, <?php echo $_SESSION['user_data']['name']; ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Logout </a>
      </li>
<?php else :  ?>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL ."users/login" ?>">Login</a>
      </li>
<?php endif; ?>
    </ul>

  </div>
</nav>

<div class="container">
  <div>
    <?php echo Messages::display(); ?>
  </div>
  <div class="row">
    <?php require($view); ?>
  </div>
</div>

</body>
</html>
