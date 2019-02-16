
<div class="position-relative">
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu">
    <a class="navbar-brand" href="<?=$base_url?>?route=home">
      <img src="assets/img/twl-black.png">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav position-absolute" id="linkGroup">
        <a class="nav-item nav-link linkGroupLinks" id="homeLink" href="<?=$base_url?>?route=home">Home</a>
        <a class="nav-item nav-link linkGroupLinks" id="aboutLink" href="<?=$base_url?>?route=about">About me</a>
        <a class="nav-item nav-link linkGroupLinks" id="aboutLink" href="<?=$base_url?>?route=post">Post something</a>
      </div>
      <div class="ml-auto">
        <a id="signout" href="commons/process/signoutProcess.php"><i class="fas fa-sign-out-alt"></i></a>
      </div>
    </div>
  </nav>
</div>

<script type="text/javascript">
  $( document ).ready(function() {
    var links = $('#linkGroup').children();

    $.each(links, function(key, value){
      if(value.href == document.URL)
        $(this).addClass('active');
    })
  });
</script>

