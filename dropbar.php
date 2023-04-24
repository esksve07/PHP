<div class="menu">
<div class="title" onclick="f()"> <?php echo $_SESSION["fornavn"], $_SESSION["etternavn"]; ?> <span class="fa fa-bars"></span>
  <div class="arrow"></div>
</div>
<div class="dropdown">
  <a href="min_profil.php"><p>Profile <span class="fa fa-inbox"></span></p></a>
  <a href="Settings.php"><p>Settings <span class="fa fa-gear"></span></p></a>
  <a href="sign_out.php"><p>Sign Out <span class="fa fa-sign-out"></span></p></a>
</div>
</div>

<?php



?>

<script>

  function f() {
    document.getElementsByClassName('dropdown')[0].classList.toggle('down');
    document.getElementsByClassName('arrow')[0].classList.toggle('gone');
    if (document.getElementsByClassName('dropdown')[0].classList.contains('down')) {
      setTimeout(function() {
        document.getElementsByClassName('dropdown')[0].style.overflow = 'visible'
      }, 500)
    } else {
      document.getElementsByClassName('dropdown')[0].style.overflow = 'hidden'
    }
  }

</script>
