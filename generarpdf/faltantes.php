<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
  body {
  margin: 0;
  font-family: sans-serif;
  color: #333; 
}
table{
  border-collapse: collapse;

}

.datos{
    display: flex;
    justify-content: center;
}

th{
  background-color: #1A8CFF;
  color: #fff;
}
.container .cosas{
  width: 87px;
  text-align: center;
}
.container .columna{
  width: auto;
}
.cabecera{
  background-color: #1A8CFF;
  color: #fff;
  margin-bottom: 10px;
}
.container .cosas{
    width: auto;
}
table th{
    text-align: center;
}
</style>
<body>
  <div class="cabecera">
  <h2>Grupo Pharma-Medic Inventario</h2>
    <h3>Av. Actopan #160 Col. Los Pajaros</h3>
    <h3>Túxtla Gutiérrez Chiapas</h3>
    <h3><?=date('Y-m-d')?></h3>
  </div>
  <div class="datos">
  <div class="container">
   
<table border="1px">
    <thead> 
        <tr>
                <th>Clave</th>
                <th>Descripción</th>
                <th>Gramos</th>
                <th>Contenido Neto</th>
                <th>Tipo</th>
                <th>Precio Proveedor</th>
                <th>Stock</th>   
        </tr>
    </thead>
    <tbody>
    <?php while ($inventario=$inventarios->fetch_object()):?>
            <tr>
            <td class="cosas producto"><?=$inventario->id_producto?></td>
            <td class="cosas columna"><?=$inventario->descripcion?></td>
            <td class="cosas"><?=$inventario->gramos?></td>
            <td class="cosas"><?=$inventario->contenido?></td>
            <td class="cosas"><?=$inventario->tipo?></td>
            <td class="cosas"><?=$inventario->precio_proveedor?></td>
            <td class="cosas"><?=$inventario->stock?></td>

            </tr>
           <?php endwhile; ?>
    </tbody>
</table>
</div>
</div>
</body>
</html>