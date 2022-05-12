<?PHP include ("seguridad.php");?>
<!DOCTYPE html>
<html lang="en">

<body>

<section id="nave">
<nav class="navbar  navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid">
  <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <H3><?php echo $_SESSION['usuario'];?></H3>
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active"  id="inicio"  aria-current="page" href="user.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link"   id="pais" href="pais.php">Lista de paises</a>
        </li>
        
        
      </ul>
      <span class="navbar-text">
        <div class="container">
        <li class="nav-item dropdown"  style="list-style: none;">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Salir
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="list-style: none;">
            <li><a class="dropdown-item" href="../salir.php">Cerrar Sesión</a></li>
           
            <li><hr class="dropdown-divider"></li>
            
          </ul>
        </li>
        </div>

    
      </span>
      <span class="navbar-text">
      Usuario General
      </span>
      
    </div>
  </div>
</nav>

</section>
<div id="espacio">

</div>