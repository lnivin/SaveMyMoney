<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Save My Money</title>
</head>
<body>
  <div>
    <h1>Save My Money!</h1>
    <span>Save money from your friends and do something with that.</span>

    <form action="create.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name">
      <br/>
      <label for="score">Score:</label>
      <input type="number" id="score" name="score">
      <br/>
      <button type="submit">Add</button>
    </form>

    <table class="table">
      <tbody>
        <?php include 'read.php'; ?>
      </tbody>
    </table>

  </div>
  </script>
</body>
</html>