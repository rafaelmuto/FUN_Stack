<fieldset>
  <legend><strong>Cadastro: </strong></legend>
  <form action="acao.php" method="post">

    <strong>login:</strong>
    <input class="line" type="text" name="login" placeholder=" your user name goes here!" value="<?php echo isset($_POST['user'])?$_POST['user']:''; ?>"/>
    <br>
    <strong>E-Mail:</strong>
    <input class="line" type="email" name="email" placeholder=" type your email here!" value="<?php echo isset($_POST['email'])?$_POST['email']:''; ?>"/>
    <br>
    <strong>Password: </strong>
    <input class="line" type='password' name='pw1' placeholder=" type your password here!"/>
    <br>
    <strong>Confirm Password: </strong>
    <input class="line" type='password' name='pw2' placeholder=" type your password again!"/>
    <br>
    <br>
    <input class="btn" type="submit" name="acao" value="cadastro">
    <input class="btn" type="reset">

  </form>
</fieldset>
