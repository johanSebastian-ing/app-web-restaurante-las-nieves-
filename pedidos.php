<?php

include('includes/headerr.php')?>
<?php

include('db.php')?>

   <br><br>

<div class ="container">
   <div class="row justify-content-center">

      <button type="button" class="btn btn-primary center-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
     Abrir formulario  Registrar Pedido
    </button>
    </div>
    </div>
   <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" >
      <div class="modal-content"> 
        <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel"> gestion pedidos</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
           </div>
           <div class="modal-body" >
          
               <form action="guardarpedido.php" method="POST">

                     <div class="form-group">
                         <label for="formGroupExampleInput">codigo</label>
                         <input type="text" name="codigo"class="form-control" id="formGroupExampleInput" placeholder="aqui se coloca el codigo">
                      </div>

                     
                
                     <div class="form-group">
                      <label for="formGroupExampleInput2">id plato</label>
                     
                      <div>
                      <select name="idplato">
                      <?php
                        $SQL="SELECT * FROM `platos`";
                        $bdocente=$con->query($SQL);
                        while($fila=$bdocente->fetch_array()){

                        echo( "<option value='".$fila['idplato']."'>".$fila['idplato']."</option>");
                        }
                        ?>
                     
                     </select>
                      </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">fecha_pedido</label>
                      <input type="date"name="fecha_pedido" class="form-control" id="formGroupExampleInput2" placeholder="aqui se coloca la fecha del pedido">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Dirrecion entrega</label>
                      <input type="text"name="dirreccion" class="form-control" id="formGroupExampleInput2" placeholder="aqui se coloca la dirrecion de entrega">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">id entrega</label>
                       <div>
                      <select name="id_entregador">
                      <?php
                        $SQL="SELECT * FROM `entregas`";
                        $bdocente=$con->query($SQL);
                        while($fila=$bdocente->fetch_array()){

                        echo( "<option value='".$fila['id_entregador']."'>".$fila['id_entregador']."</option>");
                        }
                        ?>
                     
                     </select>
                    </div>
                    </div>
                    
                    <input type="submit" class="btn btn-success btn-block" name ="guardarpedido" value ="Registrar">
            
                   
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
<div class="container">

<table class="table table-bordered">
<thead>
  <tr>
    <th>codigo</th>
    <th>id plato</th>
    <th>fecha pedido</th>
    <th>direccion entrega</th>
    <th>id entregador</th>
    <th>opciones</th>
  </tr>
  </thead>
  <tbody>
  <?php 
  $query="SELECT * FROM `pedidos`";
  $result_proyecto=mysqli_query($con,$query);
  while($row=mysqli_fetch_assoc($result_proyecto)){ ?>
  <tr>
   <td><?php echo $row['id'];?></td>
    <td><?php echo $row['idplato'];?></td>
    <td><?php echo $row['fecha_pedido'];?></td>
    <td><?php echo $row['Dirrecion_entrega'];?></td>
    <td><?php echo $row['id_entregador'];?></td>
   <td>

     <a href=""  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">editar</a>
     <a href="Eliminarpedidos.php?id=<?php echo $row['id']?>" class="btn btn-danger">Borrar</a>
   </td>
  </tr>
  <?php }?>
  
 
  </tbody>
</table>
</div>

<?php include('includes/footer.php')?>