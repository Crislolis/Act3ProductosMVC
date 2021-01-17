<h1 class="page-header">
    <?php echo $prod->idProducto != null ? $prod->nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Producto">Productos</a></li>
  <li class="active"><?php echo $prod->idProducto != null ? $prod->nombre : 'Nuevo Registro'; ?></li>
</ol>
<form id="frm-producto" action="?c=Producto&a=Guardar" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <!--label>IdProducto</label-->
        <input type="hidden" name="idProducto" value=<?php echo $prod->idProducto != null ? $prod->idProducto : '0'; ?> class="form-control"  />
    </div>
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $prod->nombre; ?>" class="form-control" placeholder="Ingrese su nombre" required minlength="5"/>
    </div>
    
    <div class="form-group">
        <label>Precio</label>
        <input type="text" name="precio" id="precio" value="<?php echo $prod->precio; ?>" class="form-control" placeholder="Ingrese el precio" step="0.01" min="0" required/>
    </div>
    
    <div class="text-left">
        <input type="checkbox" id="calcula" name="calcula"  />
        <label for="calcula">Calcular el IVA para el producto?</label>
    </div>
   
    <div class="form-group">
        <label>Precio + IVA:</label>
        <span id="resultado">0</span>
    </div>
    
    <div class="form-group">
        <label>Stock</label>
        <input type="text" name="stock" value="<?php echo $prod->stock; ?>" class="form-control" placeholder="Ingrese stock"/>
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success" >Guardar</button>
    </div>
    
</form>


        