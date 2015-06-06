<nav class="red darken-4">
    <div class="nav-wrapper container ">
      <a href="home.php" class="brand-logo">Agenda</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href='misEventos.php?id= <?php echo$_SESSION['u_id'];?>'>Mis Eventos <i class="mdi-action-event small left"></i></a></li>
        <li><a href="">Contactos <i class="mdi-action-account-child small left"></i></a></li>
        <li><a href="logout.php">Cerrar Sesion <i class="mdi-action-exit-to-app small left"> </i></a></li>
      </ul>
      <ul id="nav-mobile" class="side-nav">
          <li><a href="registrarse.php">Registrarse</a></li>
        <li><a href="">Log-in</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>
</nav>
