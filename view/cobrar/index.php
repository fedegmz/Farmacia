<?php 

if(isset($_SESSION['user'])){
}
else{
    return header("Location:". base_url);
    exit();
}
if($_SESSION['userRol'] == 'admin'){
    header("Location:".base_url. "bienvenida/index");
  }  
?>


<?php require_once 'view/layout/header.php'; ?>

<style>
    /*Estilos generales para todos los proyectos*/
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: sans-serif;
        color: #333;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    .table-rwd {
        font-size: .85em;
        border: 1px solid rgba(181, 213, 144, 0.5);
        color: #666;
        border-collapse: collapse;
        margin-left: auto;
        margin-right: auto;
    }

    .table-rwd td,
    .table-rwd th {
        padding: .8em;
        border-bottom: 1px solid rgba(181, 213, 144, 0.5);
    }

    .table-rwd th {
        background: #1A8CFF;
        color: #fff;
        font-weight: normal;
        text-align: right;
    }

    .table-rwd td {
        text-align: right;
    }

        /* .table-rwd td:before {
      content: "$ ";
      color: #1A8CFF; } */
        /* .table-rwd td:after {
      content: ".00"; } */
      .table-rwd .averwe:after{
        content: "%";
      } 
    .table-rwd td:first-of-type {
        text-align: left;
    }

     .table-rwd td:first-of-type:before {
        content: "";
    } 

    .table-rwd td:first-of-type:after {
        content: "";
    } 

     .table-rwd tr:hover {
        background: rgba(181, 213, 144, 0.2);
    }

    .table-rwd tr td:nth-child(2n) {
        background: rgba(181, 213, 144, 0.2);
    } 

    .table-container {
        overflow-x: auto;
    }
/* 
    .table-rwd {
        min-width: 900px;
    }

    .table-rwd td:first-child {
        position: absolute;
        background: #fff;
        width: 8em;
    }

    .table-rwd th:first-child {
        width: 8em;
    }

    .table-rwd tr:hover td:first-child {
        background: #1A8CFF;
        color: #fff;
    }

    .table-rwd tr:nth-child(2) td:first-child {
        box-shadow: 0 -2.7em 0 -6px #1A8CFF, -6px -2.7em 0 -6px #1A8CFF;
    } */
</style>

<input type="text" id="inicioSesion" hidden value="<?=$_SESSION['user']?>">
<div class="form-group container mt-4 mb-4 d-flex justify-content-center">
    <div class="row">
            <input type="email" class="buscar form-control " id="descripcion" aria-describedby="emailHelp" placeholder="Buscador">
    </div>
</div>
<!-- <div class="container d-flex justify-content-center mt-2 mb-2">
    <div class="form-group row">
        <div class="col-md-6">
            <input type="text" id="descripcion" class="buscar form-control " placeholder="Buscador" aria-describedby="helpId">
        </div>
    </div>

</div> -->


<!-- <input type="text" id="gramos"> -->
<section class="container">
        <div class="table-responsive mt-4">
        <div class="scroll2">
<table class="table-rwd">
    <thead>
        <tr>
            <th>Clave</th>
            <th>Descripcion</th>
            <th>Gramos</th>
            <th>Contenido</th>
            <th>Precio Pubico</th>
            <th>Tipo</th>
            <th>Existencia</th>
            <th>Cantidad</th>
            <th>Descuento</th>
            <th>Precio Total</th>
            <th>Acciones</th>
        </tr>
    <tbody>
        <tr>
            <td id="clave"></td>
            <td class="descripcion"></td>
            <td id="gramos"></td>
            <td id="contenido"></td>
            <td id="precio_publico"></td>
            <td id="tipo"></td>
            <td id="stock"></td>
            <td> <input type="text" require class="peque" id="cantidad" disabled> </td>
            <td class="averwe"> <input type="text" require class="peque" id="descuento"  disabled> </td>
            <td id="total"></td>
            <td> <a class="ocultar oculto agregar" href="">agregar</a> </td>

        </tr>
    </tbody>
    </thead>
</table>
</div>
        </div>
</section>
<!-- <button class="petition">
        Click
    </button> -->
<style>
    .oculto {
        display: none;
    }

    .peque {
        width: 30px;
    }

    .peque-2 {
        width: 80px;
    }
</style>



<!-- <table>
    <tr>
        <th>uno</th>
        <th>dos</th>
        <th>tres</th>
    </tr>
    <tr>
      <td><input type="checkbox" value="mirame" name="" id=""></td>
      <td>fede</td>
      <td>juan</td>
    </tr>
    <tr>
      <td><input type="checkbox" name="" value="hola" id=""></td>
      <td>jaun</td>
      <td>fewd</td>
    </tr>
</table> -->


<!--     
<div class="scroll2">
<section class="container">
    <div class="table-responsive mt-4">
        <table id="example-2" class="table table-hover table-striped navbar-expand-sm table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Descripción</th>
                    <th>Gramos</th>
                    <th>Contenido</th>
                    <th>Tipo</th>
                    <th>Precio Publico</th>
                    <th>Stock</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
            <?php while ($inventario = $inventarios->fetch_object()) : ?>
                        <tr>
                            <td id="id_producto"><?= $inventario->id_producto ?></td>
                            <td id="descripcion"><?= $inventario->descripcion ?></td>
                            <td id="gramos"><?= $inventario->gramos ?></td>
                            <td id="contenido"><?= $inventario->contenido ?></td>
                            <td id="tipo"><?= $inventario->tipo ?></td>
                            <td id="precio_publico"><?= $inventario->precio_publico ?></td>
                            <td id="stock"><?= $inventario->stock ?></td>
                            <td><input id="cantidad" type="text"></td>
                            <td id="total"></td>
                            <td><a class="agregar" href="">Agregar</a></td>
                        </tr>
                    <?php endwhile; ?>
            </tbody>
        </table>
        </form>
    </div>
</section>
</div> -->


    <section class="container">
        <div class="table-responsive mt-4">
        <div class="scroll2">
            <table <table class="table-rwd">
                <thead>
                    <tr>
                        <th class="centrar"><a href="" class="eliminame btn btn btn-danger petition"><i class="fas fa-trash"></i></a></th>
                        <th>Descripción</th>
                        <th>Gramos</th>
                        <th>Contenido</th>
                        <th>tipo</th>
                        <th>Precio Publico</th>
                        <th>Existencia</th>
                        <th>Cantidad</th>
                        <th>Total</th>

                    </tr>
                </thead>
                <tbody id="tablaDatos">

                </tbody>
            </table>
        </div>
    </section>
</div>

<?php
// require_once 'visualizar.php';
?>
<!-- <script>
    function obtenerDatos(id){
        $.ajax({
            type: "POST",
            url: "http://192.168.0.25/farmacia/cobrar/showAllProducto",
            data: "id="+ id,
            success: function (response) {
                console.log(response);
                if(response==0){
                    console.log("hola")
                }
            }
        });
}
</script> -->

<section>
    <div class="container">
        <h4 class="text-center">TOTAL</h4>
        <div class="input-group mb-3">
            <input type="text" disabled class="form-control subtotal" id="totalAPagar">
            <input type="text" class="form-control" placeholder="RECIBO" id="recibo">
            <input type="text" disabled class="form-control" placeholder="Cambio" id="cambio">
        </div>
        <!-- <div class="d-flex justify-content-end">
            <h4 class="mr-4">Descuento</h4><input type="number" class="descuento" placeholder="Subtotal" ><span>%</span>
        </div>
        <h4 class="text-center">Total</h4>
        <div class="input-group mb-3">
            <input type="text" class="form-control total " placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div> -->
        <div class="d-flex justify-content-center">
            <form action="<?=base_url?>cobrar/btnCobrar"> 
                <input type="submit" class="btn btn-success" id="cobrar" value="Cobrar">
            </form>
        </div>
    </div>
</section>
<?php require_once 'view/layout/footer.php'; ?>