<?php

/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 */
?>

<?php $view->component('start'); ?>
<h1>Login page</h1>

<form action="/login" method="post">

  <?php if ($session->has('error')) { ?>
    <p style="color: red"><?php echo $session->getFlash('error') ?></p>
  <?php } ?>

  <p>Email</p>
  <input type="text" name="email">
  <p>Password</p>
  <input type="text" name="password">
  <button>Login</button>
</form>
<?php $view->component('end'); ?>