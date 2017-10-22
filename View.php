<?php
class View{
private $header;
private $navbarContent;
private $content;
private $sidebar;
private $footer;

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
      <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">
      '
      foreach(getNavbarContent() as $link)
      {
        $navbar .= '<li><a href="'.$link->href.'">'.$link->name.'</a></li>';
      }
      $navbar .= '
        </ul>
      </div>
    </nav>
    ';
    }
    public function render(){
        echo getHeader();
        echo generateNavbar();
        echo getContent();
        echo getSidebar();
        echo getFooter();
    }
  }




 ?>
