<?PHP 
include_once 'crud.php';?>
<?PHP include ("navadmi.php");?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/Lab08-project/css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Admin <?php echo $_SESSION['usuario'];?> </title>
    <style>
        #lista { 
            background-color:#BB8FCE;
            border-radius:20px ;
        }

    </style>
</head>

  
   <div class="" id="capa">
   <center>
        <br><br>
        <h1>Lista de Usuarios</h1>
        <div id="form">
        <?php
        if (isset($_GET['edit'])){
            ?>
            <form  method="post">
            <table width="100%" border="1" cellpadding="15">
                <tr>
                    <td id="arriba" >
                    <?php
                       if(isset($_GET['edit'])){
                            ?>
                            <input type="text" name="usuario" placeholder="Usuario" value="<?php if(isset($_GET['edit'])) echo $getROW['usuario']; ?>">
                            <?php
                       }
                       ?>
                    </td>
                </tr>
                <tr>
                <td id="arriba" >
                    <?php
                       if(isset($_GET['edit'])){
                            ?>
                            <input type="text" name="contra" placeholder="Contraseña" value="<?php if(isset($_GET['edit'])) echo $getROW['contra']; ?>">
                            <?php
                       }
                       ?>
                    </td>
                </tr>
                <tr>
                    <td id="arriba" >
                    <?php
                       if(isset($_GET['edit'])){
                            ?>
                            <input type="text" name="id_cargo" placeholder="Cargo" value="<?php if(isset($_GET['edit'])) echo $getROW['id_cargo']; ?>">
                            <?php
                       }
                       ?>
                    </td>
                </tr>
                
                <tr>
                    <td id="arriba" >
                       <?php
                       if(isset($_GET['edit'])){
                            ?>
                            <button type="submit" class="btn btn-outline-primary" name="update">Editar</button>
                            <?php
                       }
                       ?>
                    </td>
                </tr>   
            </table>
        </form>      
            <?php
        }
        ?> 
        <br><br>
        </div>
    </center>
  <div class="container table-responsive">
  <table class="table table-primary  table-bordered border-primary table-hover caption-top text-center">
        <thead >
            <tr>
            <th scope="col">Usuario</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Cargo</th>
        
            
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <?php
        $res = $MySQLiconn->query("SELECT * FROM usuarioscrud");
        while ($row=$res->fetch_array()) {
        ?>
        <tbody>
            <tr>
            <td><?php echo $row['usuario']; ?></td>
            <td><?php echo $row['contra']; ?></td>
            <td><?php echo $row['id_cargo']; ?></td>
            
                
            <td><a href="?edit=<?php echo $row['id'];?>" onclick="return confirm('Confirmar edicion')"><button class="btn btn-outline-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></button></a></td>
            <td><a href="?del=<?php echo $row['id'];?>" onclick="return confirm('Confirmar eliminacion')"><button class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></button></a></td>
            </tr>   
        </tbody>
        <?php
        }
        ?>
    </table>      
  </div>
   </div>
</body>
</html>