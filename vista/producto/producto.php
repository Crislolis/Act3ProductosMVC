<h1 class="page-header">Productos</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Producto&a=Crud">Nuevo producto</a>
</div>


<table class="table table-striped" id="tablaProd">
    <thead>
        <tr>
            <th style="width:180px;">IdProducto</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th style="width:120px;">Stock</th>
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->producto->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idProducto; ?></td>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->precio; ?></td>
            <td id="stock"><?php echo $r->stock; ?></td>
            <td>
                <a href="?c=Producto&a=Crud&idProducto=<?php echo $r->idProducto; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Producto&a=Eliminar&idProducto=<?php echo $r->idProducto; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

<div class="well well-sm text-right">
    <input type="checkbox" id="color" name="color"/>
    <label for="color">Marcar productos con stock menor a 10</label>
</div>

