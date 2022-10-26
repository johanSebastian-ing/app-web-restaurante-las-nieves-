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
           <h5 class="modal-title" id="exampleModalLabel">Gestion entrega </h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
           </div>
           <div class="modal-body" >
          
               <form action="guardarentregas.php" method="POST">

                     <div class="form-group">
                         <label for="formGroupExampleInput">codigo</label>
                         <input type="text" name="codigo"class="form-control" id="formGroupExampleInput" placeholder="aqui se coloca el codigo">
                      </div>

                      <div class="form-group">
                        <label for="formGroupExampleInput2">nombre del entregador</label>
                        <input type="text" name="nombr"class="form-control" id="formGroupExampleInput2" placeholder="aqui se coloca el nombre">
                      </div>
                
                     <div class="form-group">
                      <label for="formGroupExampleInput2">fecha_nacimiento</label>
                      <input type="date" name="fechan" class="form-control" id="formGroupExampleInput2" placeholder="aqui se coloca la fecha de nacimiento">
          
                    <div class="form-group">
                      <label for="formGroupExampleInput2">fecha_ingreso</label>
                      <input type="date"name="fechai" class="form-control" id="formGroupExampleInput2" placeholder="aqui se coloca la fecha de ingreso">
                    </div>

                    
                    <input type="submit" class="btn btn-success btn-block" name ="guardarentrega" value ="Registrar">
            
                   
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
    <th>nombre</th>
    <th>fecha nacimiento</th>
    <th>fecha ingreso</th>
    <th>opciones</th>
  </tr>
  </thead>
  <tbody>
  <?php 
  $query="SELECT * FROM `entregas`";
  $result_proyecto=mysqli_query($con,$query);
  while($row=mysqli_fetch_assoc($result_proyecto)){ ?>
  <tr>
   <td><?php echo $row['id_entregador'];?></td>
    <td><?php echo $row['nombre'];?></td>
    <td><?php echo $row['fecha_nacimiento'];?></td>
    <td><?php echo $row['fecha_ingreso'];?></td>
   <td>

     <a href=""  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">editar</a>
     <a href="Eliminarentrega.php?id=<?php echo $row['id_entregador']?>" class="btn btn-danger">Borrar</a>
   </td>
  </tr>
  <?php }?>
  
 
  </tbody>
</table>
</div>

<?php include('includes/footer.php')?>