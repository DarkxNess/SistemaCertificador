<?php
session_start();
  if(!$_SESSION['verificar']){
    header("Location: modal_login.php");
  }
  if($_SESSION['privilegio']!="admin" && $_SESSION['privilegio']!="doctor"){
   echo "<script>
                alert('Solo para administradores');
                window.location= 'index.php'
    </script>";
  }

  ?>
   <?php require 'partials/header2.php' ?>

   <div class="container-fluid">
<table class="table">
    <thead class="thead-light">
      <tr align="center">
        <th>
    <!--box header-->
   
        <h3>Editar Paciente #<?php echo $_POST['nombrePaciente']; ?></h3>
    
  </th>
</tr>
</thead>
    <tbody>
<tr><td align="center">
        
   <form method="post" action="editarPacienteVista.php" class="formularioPersonalizado" align="center">
     <label>Nombre</label>
     <input type="text" name="nombrePaciente" id="nombrePaciente" class="form-control" value="<?php echo $_POST['nombrePaciente']; ?>" required/>
     <br />
      <label>Apellido</label>
           <input type="text" name="apellidoPaciente" id="apellidoPaciente" class="form-control" value="<?php echo $_POST['apellidoPaciente']; ?>" required/>
   <br />
     <label>Rut</label>
     <input type="text" name="rutPaciente" id="rutPaciente" class="form-control" value="<?php echo $_POST['rutPaciente']; ?>" required/>
     <br />  
     <label>Teléfono</label>
     <input type="text" name="telefonoPaciente" id="telefonoPaciente" class="form-control" value="<?php echo $_POST['telefonoPaciente']; ?>" required/>
     <br />  
     <label>Email</label>
     <input type="email" name="emailPaciente" id="emailPaciente" class="form-control" value="<?php echo $_POST['emailPaciente']; ?>"required/>
     <br />
     <label>Direccón</label>
     <input type="text" name="direccionPaciente" id="direccionPaciente" class="form-control" value="<?php echo $_POST['direccionPaciente']; ?>" required/>
     <br />
          <label>Ciudad</label>
     <input type="text" name="ciudadPaciente" id="ciudadPaciente" class="form-control" value="<?php echo $_POST['ciudadPaciente']; ?>" required/>

   <br />
   <input type="hidden" name="idPaciente" class="form-control" value="<?php echo $_POST['idPacientex']; ?>"/>
     <input type="submit" name="Modificar" id="insert" value="Modificar" class="btn btn-success" />
    
    </form>


 <?php
        if(isset($_POST['idPaciente'])){
            require_once "connect.php";
            require_once "modificarPaciente.php";
        }
    ?>

    </td>
    </tr>  
</tbody>
</table>
</div>
 <?php require 'partials/footer.php' ?>
