<html>
  <head>
    <title>Validasi</title>
  </head>
  <body>
    <h2>PHP Form Validation</h2>
    <form action="validasiproses.php" method="POST" name="form">
      <label for="nama">Name:</label>
      <input type="text" name="nama" required><br><br>
      <label for="email">E-mail:</label>
      <input type="text" name="email" required><br><br>
      <label for="website">Website:</label>
      <input type="text" name="website"><br><br>
      <h>Comment:</h>
      <textarea name="comment" cols="40" rows="5"></textarea><br><br>
      <h>Gender:</h>
      <label for="gender-female">Female:</label>
      <input type="radio" name="gender" value="female" id="gender-female" required>
      <label for="gender-male">Male:</label>
      <input type="radio" name="gender" value="male" id="gender-male" required><br><br>
      <input type="submit" name="Submit" value="Submit">
    </form>
    <?php
      if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $comment = $_POST['comment'];
        $gender = $_POST['gender'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
          echo "Data yang diisi: <br>";
          echo "Name: $nama <br>";
          echo "E-mail: $email <br>";
          echo "Website: $website <br>";
          echo "Comment: $comment <br>";
          echo "Gender: $gender <br>";
        } else {
          echo "Format email tidak valid";
        }
      }
    ?>
  </body>
</html>
