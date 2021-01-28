<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Save My Money</title>
</head>
<body>
  <div>
    <h1>Save My Money</h1>
    <span>Save money from your friends!</span>
    <hr>
    <form action="create.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name">
      <br/>
      <label for="score">Amount:</label>
      <input type="number" id="score" name="score">
      <br/>
      <button type="submit">Add</button>
    </form>
    <table class="table">
      <tbody>
        <?php include 'read.php'; ?>
      </tbody>
    </table>
    <button onclick="showSavedMoney()">Show saved money</button>
    <p id="msg"></p>
  </div>
  <script type="text/javascript">
    var names = <?php echo json_encode($names); ?>;
    var scores = <?php echo json_encode($scores); ?>;

    function showSavedMoney() {
      let savedMoney = scores && scores.length ? scores.reduce((a, b) => parseInt(a) + parseInt(b), 0) : 0;
      let contributors = names && names.length > 1 ? names.slice(0, -1).join(', ') + ' and ' + names.slice(-1) : names && names.length === 1 ? names[0] : null;
      let message = savedMoney && contributors ? `At the moment you have collected ${savedMoney} m.u. from ${contributors}` : 'You have no collected money yet!';
      document.getElementById('msg').innerHTML = message;
    } 
  </script>
</body>
</html>