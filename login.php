<?php
   session_start();

   if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      // Verificar las credenciales
      if ($username == 'joseDavid' && $password == '1234') {
         $_SESSION['username'] = $username;
         header('Location: index.php'); // Redirigir a la página de dashboard o inicio
         exit();
      } else {
         $error = "Credenciales incorrectas. Inténtalo de nuevo.";
      }
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Iniciar sesión</title>
</head>

<body>
   <h2>Iniciar sesión</h2>

   <?php if (isset($error)) : ?>
      <p><?php echo $error; ?></p>
   <?php endif; ?>

   <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      <label for="username">Usuario:</label>
      <input type="text" id="username" name="username" required><br>

      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required><br>

      <input type="submit" name="login" value="Iniciar sesión">
   </form>
</body>

</html>
