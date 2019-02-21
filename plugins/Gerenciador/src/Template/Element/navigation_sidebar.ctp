<ul class="nav">
  <li>
    <a href="<?= $this->Url->build(["controller" => "pages","action" => "index"]);?>" <?=$params['controller']=='Pages'?"class='active'":""?>>
      <i class="pe-7s-photo-gallery"></i>
      <p>Páginas</p>
    </a>
  </li>
  <li>
    <a href="<?= $this->Url->build(["controller" => "Menu","action" => "index"]);?>" <?=$params['controller']=='Menu'?"class='active'":""?>>
      <i class="pe-7s-menu"></i>
      <p>Menu</p>
    </a>
  </li>
  <li>
    <a href="<?= $this->Url->build(["controller" => "posts","action" => "index"]);?>" <?=$params['controller']=='Posts'?"class='active'":""?>>
      <i class="pe-7s-photo-gallery"></i>
      <p>Posts</p>
    </a>
  </li>
  <li>
    <a href="<?= $this->Url->build(["controller" => "testimonials","action" => "index"]);?>" <?=$params['controller']=='Testimonials'?"class='active'":""?>>
      <i class="pe-7s-calculator"></i>
      <p>Depoimentos</p>
    </a>
  </li>
  <li>
    <a href="<?= $this->Url->build(["controller" => "programs","action" => "index"]);?>" <?=$params['controller']=='Programs'?"class='active'":""?>>
      <i class="pe-7s-calculator"></i>
      <p>Programas</p>
    </a>
  </li>
  <li>
    <a href="<?= $this->Url->build(["controller" => "offices","action" => "index"]);?>" <?=$params['controller']=='Offices'?"class='active'":""?>>
      <i class="pe-7s-calculator"></i>
      <p>Escritórios</p>
    </a>
  </li>
  <li>
    <a href="<?= $this->Url->build(["controller" => "numbers","action" => "index"]);?>" <?=$params['controller']=='Numbers'?"class='active'":""?>>
      <i class="pe-7s-calculator"></i>
      <p>Números</p>
    </a>
  </li>
  </li>
  <li>
    <a href="<?= $this->Url->build(["controller" => "team","action" => "index"]);?>" <?=$params['controller']=='Team'?"class='active'":""?>>
      <i class="pe-7s-calculator"></i>
      <p>Equipe</p>
    </a>
  </li>
  </li>
  <li>
    <a href="<?= $this->Url->build(["controller" => "sponsors","action" => "index"]);?>" <?=$params['controller']=='Sponsors'?"class='active'":""?>>
      <i class="pe-7s-calculator"></i>
      <p>Patrocinadores</p>
    </a>
  </li>
  <li>
    <a href="<?= $this->Url->build(["controller" => "timeline","action" => "index"]);?>" <?=$params['controller']=='Timeline'?"class='active'":""?>>
      <i class="pe-7s-calculator"></i>
      <p>Linha do Tempo</p>
    </a>
  </li>
  <li>
    <a href="<?= $this->Url->build(["controller" => "modals","action" => "index"]);?>" <?=$params['controller']=='Modals'?"class='active'":""?>>
      <i class="pe-7s-calculator"></i>
      <p>Janelas Modais</p>
    </a>
  </li>

  <li>
    <a href="<?= $this->Url->build(["controller" => "Configs","action" => "index"]);?>" <?=$params['controller']=='Configs'?"class='active'":""?>>
      <i class="pe-7s-user"></i>
      <p>Configurações</p>
    </a>
  </li>
  
  <li>
    <a href="<?= $this->Url->build(["controller" => "Users","action" => "index"]);?>" <?=$params['controller']=='Users'?"class='active'":""?>>
      <i class="pe-7s-user"></i>
      <p>Usuários</p>
    </a>
  </li>
</ul>
