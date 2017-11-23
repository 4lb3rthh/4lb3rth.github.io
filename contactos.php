<?php
    $error="";
    $mensajeExito="";

    if($_POST){
        
        if(!$_POST["email"]){
            $error .="Es obligatorio una direccion de email.<br>";
            
        }
        if(!$_POST["nombre"]){
            $error .="Es obligatorio su nombre.<br>"; 
        }
        if(!$_POST["mensaje"]){
            $error .="Es obligatorio escribir el mensaje.<br>";
        }
        if(!$_POST["email"]&& filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)==false){
            $error .="correo electrónico no válido.<br>";
       
        }
        if($error !="")
        {  
            $error = "<div class=\"alert alert-danger\" role=\"alert\"><strong>Hubo algún error en el formulario: ".$error."</strong></div>";
        }
        else{
           
            $emailA="carrera.ecologica@gmail.com";
            $mensaje= $_POST['mensaje'];
            $nombre= $_POST['nombre'];
            $cabeceras = "From: ".$_POST['email'];
            if (mail ($emailA,$nombre,$mensaje,$cabeceras)){
                $mensajeExito = "<div class=\"alert alert-success\" role=\"alert\"><strong>Mensaje enviado con éxito, nos pondremosen contacto Pronto!</strong></div>";
                
            }else{
               
                $error="<div class=\"alert alert-danger\" role=\"alert\"><strong>El mensaje no pudo ser enviado, intente mas tarde.</strong> </div>";
            }
        }
        
    }

?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="estilo.css">
      
      <link rel="stylesheet" href="https://use.fontawesome.com/060a114b22.css">
      
    </head>
  <body>
    
     <!-- cabecera  -->

   

       <!-- end - cabecera  -->
      
      
      <!-- BODY  -->
      
  
      
      <div class="container" style="margin-top: 100px">
          <div class="container">
<h1>Contáctate con nosotros</h1> 
              
<div id="error">
    <?php echo $error.$mensajeExito; ?>
</div>              

              
<form method="post">
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="email" name="email">
    
  </div>
  <div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control" id="nombre" placeholder="nombre" name="nombre">
  </div>


  <div class="form-group">
    <label for="mensaje">Mensaje:</label>
    <textarea class="form-control" id="mensaje" rows="3" name="mensaje"></textarea>
  </div>

  
  <button type="submit" class="btn btn-primary">ENVIAR</button>
</form>        
</div> 

        <hr><br>  
         <h1>Acerca de los Desarrolladores</h1><hr>
          <div class="card card-inverse card-primary mb-3 text-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Somos estudiantes de la carrera de informática. Trabajamos este videojuego para que te diviertas y aprendas a reciclar.</p>
      <footer>Esperamos que sea de su agrado.  <i class="fa fa-magic" aria-hidden="true"></i>
        </footer> 
    </blockquote>
  </div>
</div>
          
        <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="img/albert_.png" alt="Card image cap">
    <div class="card-block">
        
      <h4 class="card-title  letra_creditos"> 
        <marquee bgcolor="black"> Univ. Alberth Michael Apaza </marquee>
        
        </h4>
        <lu>
        <li class="card-text"> Desarrolador web Front-end y back-end.</li>
            <li class="card-text">Programador.</li>
        </lu>
      
      </div>
    <div class="card-footer">
      <small class="text-muted">"Primero esta la inteligencia lugo la fuerza"</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/gudnar.png" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title letra_creditos">
        <marquee bgcolor="black"> Univ. Gudnar Illanes</marquee>
        </h4>
       <lu>
        <li class="card-text">Diseñador</li>
           <li class="card-text">Programador</li>
        </lu>
    </div>
    <div class="card-footer">
      <small class="text-muted">" "</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/ruben_.png" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title letra_creditos">
        <marquee bgcolor="black"> Univ. Ruben Limachi</marquee>
        </h4>
     <lu>
        <li class="card-text">Diseñador</li>
         <li class="card-text">Programador</li>
        </lu>
    </div>
    <div class="card-footer">
      <small class="text-muted">""</small>
    </div>
  </div>
</div>
          
<br>



 <hr>
   
<!-- fromulario -->

          
<br>          
  <hr>        
<!--   -->          

<div class="card card-inverse card-primary mb-3 text-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p><i class="fa fa-phone-square" aria-hidden="true"></i> 75818873</p>
        <p><i class="fa fa-paper-plane" aria-hidden="true"></i> carrera.ecologica@gmail.com</p>
        <p><i class="fa fa-github" aria-hidden="true"></i> https://github.com/ecorecicla/</p>
      <footer>ecoreciclaRace. <cite title="Source Title">Te esperamos ....</cite></footer>
    </blockquote>
  </div>
</div>          
          
     </div>

      
      
      <!-- end - BODY  -->
      
      
 <!-- toe  -->
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-3">Ecorecicla</h1>
            <p class="lead">Este es un juego para el cuidado del medio ambiente. Vota la basura en su lugar . . .</p>
          </div>
        </div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous">
      </script>
      
      
      <script type="text/javascript">
   
      
      </script>
      
  </body>
</html>      
