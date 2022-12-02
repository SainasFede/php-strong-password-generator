<?php 

$number = ['0','1','2','3','4','5','6','7','8','9'];
$symbol = ['!','?','&','%','$','<','>','^','+','-','*','/','(',')','[',']','{','}','@','#','_','='];
$letter = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
$LetterM = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

$generalpsw = array_merge($number, $symbol, $letter, $LetterM);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <title>PHP Strong Password Generator</title>
</head>
<body>
  
  <div class="container w-100 d-flex justify-content-center flex-column">
    <div class="row m-auto mb-5">
      <div class="col">
        <h1>Generatore di Password</h1>
      </div>
    </div>
    <div class="row">
      <div class="col">

      </div>
    </div>
    <div class="row m-auto">
      <div class="col">
        <form action="index.php" method="GET">
          <label for="numberpsw">Quanto deve essere lunga la password?</label>
          <input type="number" name="numberpsw" placeholder="Lunghezza Password">
          <button class="btn btn-primary" type="submit">Crea</button>
        </form>
      </div>
    </div>
  </div>

</body>
</html>