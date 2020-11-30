<?= $this->extend('template/front') ?>

<?= $this->section('content') ?>

<div class="kosong col-md-12" style="padding-top: 200px;padding-bottom: 200px; text-align:center;">
  <div class="container1" id="container">
    <div class="form-container sign-up-container">
      <form method="post" action="<?= base_url('authregister') ?>">
        <h1 style="padding-top: 50px;font-weight: bold;margin: 0;">Create Account</h1>

        <input type="text" name="pelanggan"required placeholder="Name" />
        <input type="text" name="alamat"required placeholder="Alamat" />
        <input type="text" name="telp" required placeholder="No Telp" />
        <input type="email" name="email" required placeholder="Email" />
        <input type="password" name="password" required placeholder="Password" />
        <button type="submit" name="register">Sign Up</button>
      </form>
    </div>
    <div class="form-container sign-in-container">
      <form  method="post" action="<?= base_url('/authlogin') ?>">
        <?php if (session()->getFlashdata('message') != null) : ?>
          <center>
            <div class="alert alert-success" role="alert"><?= session()->getFlashdata('message') ?></div>
          </center>
        <?php endif ?>
        <?php if (session()->getFlashdata('error') != null) : ?>
          <center>
            <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('error') ?></div>
          </center>
        <?php endif ?>
        <h1>Login</h1>

        <input type="email" name="email" placeholder="Email" />
        <input type="password" name="password" placeholder="Password" />

        <button type="submit" name="login">Login</button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1 class="text-white">Welcome Back!</h1>

          <button class="ghost" id="signIn">Sign In</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1 class="text-white">Hello, Friend!</h1>

          <button class="ghost" id="signUp">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const signUpButton = document.getElementById('signUp');
  const signInButton = document.getElementById('signIn');
  const container = document.getElementById('container');

  signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
  });

  signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
  });
</script>

<?= $this->endSection() ?>