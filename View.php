<?php
class View{
private $header;
private $navbarContent;
private $content;
private $sidebar;
private $footer;

public function __construct()
{
	$this->header ='
<head>
		<meta charset = "utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/custom.css">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
</head>
';
	$this->navbarContent = array(
		1 => array(
			"name"=>"Inicio",
			"href"=>"index.php"
		),
		2 => array(
			"name"=>"Bienvenida",
			"href"=>"welcome.php"
		),
		3 => array(
			"name"=>"Sobre Nosotros",
			"href"=>"about.php"
		),
		4 => array(
			"name"=>"Productos",
			"href"=>"productsController.php?action=displayProducts"
		),
		5 => array(
			"name"=>"Registro",
			"href"=>"register.php"
		)
	);
	$this->sidebar ='

<aside>
								<div class ="form-box">
									<form>
										<div class="form-group">
											<label>Buscar:</label>
											<input class="form-control" type="text">
										</div>
										<input class ="btn" type ="submit" value="Buscar">
									</form>
								</div>
								<br>
								<div>
										<h5>Patrocinadores</h5>
										<h6>Google</h6>
										<img class="img-responsive" src="img/google.png">
										<h6>Wikipedia</h6>
										<img class ="img-responsive" src="img/wiki.png">
								</div>
								<br>
</aside>
';
}
        public function getHeader(){
  	  return $this->header;
  	}

  	public function setHeader($header){
  		$this->header = $header;
  	}

  	public function getNavbarContent(){
  		return $this->navbarContent;
  	}

  	public function setNavbarContent($navbarContent){
  		$this->navbarContent = $navbarContent;
  	}

  	public function getContent(){
  		return $this->content;
  	}

  	public function setContent($content){
  		$this->content = $content;
  	}

  	public function getSidebar(){
  		return $this->sidebar;
  	}

  	public function setSidebar($sidebar){
  		$this->sidebar = $sidebar;
  	}

  	public function getFooter(){
  		return $this->footer;
  	}

  	public function setFooter($footer){
  		$this->footer = $footer;
  	}

    protected function generateNavbar()
    {
	    $navbar ='
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      ';
      foreach($this->getNavbarContent() as $link)
      {
	      $navbar .= '<li class ="nav-item"><a class ="nav-link" href="'.$link["href"].'">'.$link["name"].'</a></li>
';
      }
      $navbar .= '
	</ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    ';
      return $navbar;
    }
	public function render(){
		echo '<!doctype html>
			<html>';
      echo $this->getHeader();
      echo '<body>
';
      echo $this->generateNavbar();
      echo '<div class = "row">
<div class ="col-sm-10">';
echo $this->getContent();
echo '</div>
<div class ="col-sm-2">';

echo $this->getSidebar();
echo '</div></div>';
	echo $this->getFooter();
	echo '</body></html>';
    }
  }




 ?>
