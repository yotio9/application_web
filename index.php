<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">


 <style>
  body{
    background-image: url("simplon.png");

  }

  FOrm{
    margin:3cm;
  }

  .form-control{
    background:rgba(235, 26, 61, 0.918);
  } 
.form-control:hover{
 

}

.case{
  background: rgba(12, 12, 12, 0.658);


  width:15cm;
  height:10cm ;
}
 </style>

    <title>Document</title>
</head>
<body>
    
    
    <center>
      <FORm action="index2.php" method="post">
       
      <DIV class="case">
        <div class="mb-3">
            <input type="text"  class="form-control" id="yo" placeholder="Nom" name="nom" >
        </div>


        <div class="mb-3">
          <input type="text"  class="form-control" id="yo" placeholder="Prénom" name="prenom" >
        </div>

     
        <div class="mb-3">
          <input type="tel"  class="form-control" id="yo" placeholder="Numéro de téléphone" name="tel">
        </div>


        <div class="mb-3">
          <input type="email"  class="form-control" id="yo" placeholder="Adresse email" name="mail">
        </div>


              <button class="okay" type="submit">envoyer</button>

              </DIV>
     </form>
      
    </center>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>