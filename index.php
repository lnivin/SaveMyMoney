<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-NCVS4D36R6"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-NCVS4D36R6');
  </script>
  <script data-ad-client="ca-pub-8474835453138451" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Save My Money</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wave-container">
    <h1><i>Save My Money!</i></h1>
    <p>The place where you can collect money from your friends.</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319"><path fill="#e7e7de" fill-opacity="1" d="M0,64L40,80C80,96,160,128,240,149.3C320,171,400,181,480,165.3C560,149,640,107,720,101.3C800,96,880,128,960,154.7C1040,181,1120,203,1200,202.7C1280,203,1360,181,1400,170.7L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
  </div>
  <div class="form-container">
    <form action="create.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name">
      <br/>
      <label for="score">Amount:</label>
      <input type="number" id="score" name="score">
      <br/>
      <button class="add-button" type="submit">Add</button>
    </form>
  </div>
  <div class="table-container">
    <table class="content-table">
      <tbody>
        <?php include 'read.php'; ?>
      </tbody>
    </table>
  </div>
  <div class="save-money-container">
    <button class="save-money" onclick="showSavedMoney()">Show saved money</button>
  </div>
  <div class="result-container">
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