<?php session_start() ?>
<!DOCTYPE HTML>
<html>
  <head>
  </head>
  <body>
    <form method="POST" action="catController.php?action=create">
      <label for="name">Nom:</label>
      <input type="text" name="name" id="name"/><br>
      <?php if(array_key_exists("errors", $_SESSION) && array_key_exists("name", $_SESSION["errors"])){ ?>
        <p style="color: red"> <?php echo $_SESSION['errors']['name'] ?></p>
      <?php } ?>

      <label for="weight">Poids:</label>
      <input type="number" name="weight" id="weight" step="any"/><br>
      <?php if(array_key_exists("errors", $_SESSION) && array_key_exists("poids", $_SESSION["errors"])){ ?>
        <p style="color: red"> <?php echo $_SESSION['errors']['poids'] ?></p>
      <?php } ?>

      <label for="age">Age: </label>
      <input type="number" name="age" id="age"/><br>

      <?php if(array_key_exists("errors", $_SESSION) && array_key_exists("age", $_SESSION["errors"])){ ?>
        <p style="color: red"> <?php echo $_SESSION['errors']['age'] ?></p>
      <?php } ?>

      <input type="submit"/>
    </form>
  </body>
</html>
