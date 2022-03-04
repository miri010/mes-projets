
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>boostrap2</title> 
	<!--le lien boostrap css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!--le lien css -->
	<link rel="stylesheet" type="text/css" href="architecture.css">
  <script src="https://kit.fontawesome.com/4567f7d4e5.js" crossorigin="anonymous"></script>

</head>




<body >


<div class="banner"> 



    <div class=menu1> <!--ca cest la barre qui contient le LOGO PUIS LE MENU -->
        


        <ul>
      <li><a href="view.php">Home<i class="fas fa-home"></i></li>
      <li><a href="nosprojets.php">Nos projets<i class="fas fa-parking"></i></li>
      <li><a href="">NOS SERVICES <i class="fas fa-parking"></i></li>
      <li><a href="">A PROPOS<i class="fas fa-concierge-bell"></i></li>
    
      </ul>



      
    </div>





<div class=form>
  

        <h2>Nous contactez</h2>

      <div class="contact-form">

          
                    <form  id="contact-form" method="post" action="process.php"  >
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
            $Msg = " veuillez remplir merci";
            

    echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
            $Msg = " votre message a ete envoye avec succes";
            

    echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>


                    <input type="text" name="name" class="form-control " placeholder="entrer votre nom  " required>
                    <br>
                    <input type="email" name="Email" class="form-control  " placeholder="ex: antoine@monSite.com" required >   <br>

    <textarea  name="Message" class="form-control" placeholder="Message"  row="4" ></textarea> <br>

    <input type="submit" name="btn" class="form-control submit"value="ENVOYEZ" >


</form>


      </div>













	<!--le lien java query -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>







