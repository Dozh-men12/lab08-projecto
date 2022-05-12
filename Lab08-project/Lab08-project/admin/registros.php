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
        #reg { 
            background-color:#BB8FCE;
            border-radius:20px ;
        }

    </style>
</head>
<div id="form">
  <div >
    <form  method="post">
    <h2>Registro de usuarios:</h2>
            <hr>
                <table width="100%" border="1" cellpadding="9">
                    <tr>
                        <td>
                            <label for="">Usuario</label>
                            <input type="text" name="usuario" placeholder="Usuario" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label for="">Contraseña</label>
                        <input type="password" name="contra" placeholder="Contraseña" >
                        </td>
                    </tr>
                    <tr>
                      <td>
                      <label><input id="circulo" type="radio" name="id_cargo" value="1"><h4>Admin</h4></label><br>
                      
                      </td>
                      
                    </tr>
                    <tr>
                    <td>
                      <label><input id="circulo" type="radio" name="id_cargo" value="2"><h4>Usuario</h4></label><br>
                      
                      </td>
                      
                    </tr>
                    <tr>
                        <td>
                         
                        <button type="submit" id="bott" name="save" onclick="show()">Registrar</button>
                        </td>
                    </tr>
                    <script>
                        function show() {
                            alert("Registrado correctamente");
                        }
                    </script>
                </table>
    </form>
  </div>
</div>
</body>
</html>