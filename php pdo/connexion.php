




<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .modal-header, h4, .close {
    background-color: #5cb85c;
    color:white !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-footer {
    background-color: #f9f9f9;
  }
  </style>
</head>
<body>


      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Adresse Mail</label>
              <input type="text" class="form-control" id="usrname" placeholder="Entrer votre mail">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Mot de passe</label>
              <input type="text" class="form-control" id="psw" placeholder="Entrer votre mot de passe">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Se souvenir de moi</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit"  class="btn btn-danger btn-default pull-left" data-dismiss="modal"><a href="index1.php"> <span class="glyphicon glyphicon-remove"></span> Retour</button>
          <p>Vous n'etes pas encore membres? <a href="#">Inscription</a></p>
          <p>Oublie de mot de passe <a href="#">Nouveau mot de passe?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>