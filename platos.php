<?php

include('includes/headerr.php')?>
<?php

include('db.php')?>

   <br><br>

<div class ="container">
   <div class="row justify-content-center">

      <button type="button" class="btn btn-primary center-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
     Abrir formulario  Registrar
    </button>
    </div>
    </div>
   <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" >
      <div class="modal-content"> 
        <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel"> gestion platos</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
           </div>
           <div class="modal-body" >
          
               <form action="guardarplatos.php" method="POST">

                     <div class="form-group">
                         <label for="formGroupExampleInput">codigo</label>
                         <br>
                         <input type="text" name="codigo"class="fsorm-control" id="formGroupExampleInput" placeholder="aqui se coloca el codigo">
                         
                      </div>

                      <div class="form-group">
                        <label for="formGroupExampleInput2">id del restaurante</label>

                      <div>
                      <select name="idrestaurante">
                      <?php
                        $SQL="SELECT * FROM `restaurante`";
                        $bdocente=$con->query($SQL);
                        while($fila=$bdocente->fetch_array()){

                        echo( "<option value='".$fila['idrestaurante']."'>".$fila['idrestaurante']."</option>");
                        }
                        ?>
                     
                     </select>

                      </div>
                       
                     
                     
                
                     <div class="form-group">
                      <label for="formGroupExampleInput2">nombre del plato</label>
                      <input type="text" name="nombrep" class="form-control" id="formGroupExampleInput2" placeholder="aqui se coloca la fecha de nombre del plato">
                      </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">precio</label>
                      <input type="text"name="precio" class="form-control" id="formGroupExampleInput2" placeholder="aqui se coloca el precio">
                    </div>

                    
                    <input type="submit" class="btn btn-success btn-block" name ="guardarplato" value ="Registrar">
            
                   
              </form>
              <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>  
          </div>
            </div>
         </div>
      </div>

      </div>
</br>

</br>
<div class="container">

<table class="table table-bordered">
<thead>
  <tr>
    <th>codigo</th>
    <th>id restaurante</th>
    <th>nombre</th>
    <th>precio</th>
    <th>opciones</th>
  </tr>
  </thead>
  <tbody>
  <?php 
  $query="SELECT * FROM `platos`";
  $result_proyecto=mysqli_query($con,$query);
  while($row=mysqli_fetch_assoc($result_proyecto)){ ?>
  <tr>
   <td><?php echo $row['idplato'];?></td>
    <td><?php echo $row['idrestaurante'];?></td>
    <td><?php echo $row['nombre'];?></td>
    <td><?php echo $row['precio'];?></td>
   <td>

     <a href=""  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">editar</a>
     <a href="Eliminarplatos.php?id=<?php echo $row['idplato']?>" class="btn btn-danger">Borrar</a>
   </td>
  </tr>
  <?php }?>
  
 
  </tbody>
</table>
</div>

<?php include('includes/footer.php')?>