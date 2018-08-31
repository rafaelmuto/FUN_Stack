<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Forms and Requests</title>
    <style media="screen">

      :root{
        --color: #555;
      }

      *{
          font-family: monospace;
      }

      fieldset{
        width: 70%;
        margin: 0 auto;
      }

      input{
        border: 0;
        border-bottom: 1px solid #777;
        margin-bottom: .5em;
      }

      .line{
        width: 100%;
      }

      .btn {
        padding: 2rem 4rem;
        border: 1px solid var(--color, black);
        background: transparent;
        font-size: 0.9em;
        border-radius: 2px;
      }

      .btn:hover {
        cursor: pointer;
        background: var(--color, black);
        color: white;
      }

    </style>
  </head>
  <body>
    <h1>Forms & Requests</h1>
    <hr>
    <fieldset>
      <legend><strong>$_POST form: </strong></legend>
      <form action="#" method="post">

        <strong>Name:</strong>
        <input class="line" type="text" name="name" placeholder=" your name goes here!" value="<?php echo isset($_POST['name'])?$_POST['name']:''; ?>"/>
        <br>
        <strong>Last Name:</strong>
        <input class="line" type="text" name="lname" placeholder=" last name here..." value="<?php echo isset($_POST['sname'])?$_POST['sname']:''; ?>"/>
        <br>
        <strong>E-Mail:</strong>
        <input class="line" type="email" name="email" placeholder=" type your email here!" value="<?php echo isset($_POST['email'])?$_POST['email']:''; ?>"/>
        <br>
        <strong>Password: </strong>
        <input class="line" type='password' name='password1' placeholder=" type your password here!"/>
        <br>
        <strong>Confirm Password: </strong>
        <input class="line" type='password' name='password2' placeholder=" type your password again!"/>
        <br><br>
        <strong>Radio Buttons: </strong>
        <input type="radio" name="radio" value="rdo_1"> radio 1
        <input type="radio" name="radio" value="rdo_2"> radio 2
        <input type="radio" name="radio" value="rdo_3"> radio 3
        <input type="radio" name="radio" value="rdo_4"> radio 4
        <input type="radio" name="radio" value="rdo_5"> radio 5
        <br>
        <strong>Checkboxes: </strong>
        <input type="checkbox" name="checkb[]" value="opt_1"> checkB_1
        <input type="checkbox" name="checkb[]" value="opt_2"> checkB_2
        <input type="checkbox" name="checkb[]" value="opt_3"> checkB_3
        <input type="checkbox" name="checkb[]" value="opt_4"> checkB_4
        <input type="checkbox" name="checkb[]" value="opt_5"> checkB_5
        <br>
        <strong>Select Menu:</strong>
        <select name="slt">
          <option value="opt_1">select menu opt_1</option>
          <option value="opt_2">select menu opt_2</option>
          <option value="opt_3">select menu opt_3</option>
          <option value="opt_4">select menu opt_4</option>
          <option value="opt_5">select menu opt_5</option>
        </select>
        <br><br>
        <strong>Text:</strong>
        <textarea name="text" rows="8" cols="80" placeholder=" text here... " value="<?php echo isset($_POST['text'])?$_POST['text']:''; ?>"></textarea>
        <br>


        <br>
        <input class="btn" type="submit" >
        <input class="btn" type="reset" >

      </form>
    </fieldset>
    <br><br>
    <fieldset>
      <legend> <strong>$_POST var_dump: </strong></legend>
      <pre>
      <?php var_dump($_POST) ?>
      </pre>
    </fieldset>

  </body>
</html>
