<div class="container-fluid">
  <?= $this->Form->create($page, ['type'=>'file']) ?>
  <section>
    <div class="header">
      <h4 class="title">Informações da página</h4>
    </div>
    <div class="card card-shadow">
      <div class="content">
        <?= $this->Form->create($page) ?>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <?php echo $this->Form->control('name',
              ['class'=>'form-control', 'label'=>'Nome']);?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <?php echo $this->Form->control('title',
              ['class'=>'form-control', 'label'=>'Título']);?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <?php echo $this->Form->control('slug',
              ['class'=>'form-control', 'label'=>'Slug']);?>
            </div>
          </div>
        </div>
        <?php if($page->type>0):?>
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <?php echo $this->Form->control('type',
              ['class'=>'form-control', 'label'=>'Tipo da
              página', 'options'=>[1=>'Com menu e footer',
              2=>'Newsletter', 3=>'Vazia']]);?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif;?>
  </section>
  <section>
    <div class="header">
      <h4 class="title">Módulos</h4>
    </div>
    <ul id="sortable" style="list-style:none;padding:0;">

      <?php foreach($page->pages_components as $key=>$page_component):?>
        <?php if($page_component->component->type=='editor'):?>
          <li class="module" style="cursor:move" data-sort="<?=$page_component->sort;?>" data-module="<?=$key?>">
            <div class="card card-shadow">
              <div class="content">  
                <?php echo $this->Form->hidden('pages_components.'.$key.'.id', ['class'=>'form-control']);?>
                <?php echo $this->Form->hidden('pages_components.'.$key.'.sort', ['class'=>'form-control sortfield']);?>
                <label><?=$page_component->caption;?></label><br/>
                <label><small>Classe</small></label><?php echo $this->Form->control('pages_components.'.$key.'.class', ['class'=>'form-control', 'label'=>false]);?>
                <label><small>Conteúdo</small></label><?php echo $this->Form->control('pages_components.'.$key.'.content', ['class'=>'form-control ckeditor', 'label'=>false]);?>
              </div>
            </div>
          </li>

        <?php elseif($page_component->component->type=='module'):?>
          <li class="module" style="cursor:move" data-sort="<?=$page_component->sort;?>">
            <div class="card card-shadow">
              <div class="content">  
                <?php echo $this->Form->hidden('pages_components.'.$key.'.id', ['class'=>'form-control']);?>
                <?php echo $this->Form->hidden('pages_components.'.$key.'.sort', ['class'=>'form-control sortfield']);?>
                <?php echo $this->Form->control('pages_components.'.$key.'.caption', ['class'=>'form-control', 'label'=>$page_component->caption]);?>
                <?php echo $this->Form->control('pages_components.'.$key.'.content', ['class'=>'form-control', 'type'=>'text','label'=>false, 'disabled'=>'disabled']);?>
                <?php echo $this->Form->control('pages_components.'.$key.'.params', ['class'=>'form-control', 'type'=>'text','label'=>false]);?>
              </div>
            </div>
          </li>

        <?php elseif($page_component->component->type=='input'):?>
          <li class="module" style="cursor:move" data-sort="<?=$page_component->sort;?>">
            <div class="card card-shadow">
              <div class="content">  
                <?php echo $this->Form->hidden('pages_components.'.$key.'.id', ['class'=>'form-control']);?>
                <?php echo $this->Form->hidden('pages_components.'.$key.'.sort', ['class'=>'form-control sortfield']);?>
                <?php echo $this->Form->control('pages_components.'.$key.'.description', ['class'=>'form-control', 'type'=>'text','label'=>$page_component->caption]);?>
              </div>
            </div>
          </li>

        <?php elseif($page_component->component->type=='block'):?>
          <li class="module" style="cursor:move" data-sort="<?=$page_component->sort;?>">
            <div class="card card-shadow">
              <div class="content">  
                <?php echo $this->Form->hidden('pages_components.'.$key.'.id', ['class'=>'form-control']);?>
                <?php echo $this->Form->hidden('pages_components.'.$key.'.sort', ['class'=>'form-control sortfield']);?>
                <?php
                $selects = explode(',',$page_component->content);
                foreach($selects as $index=>$select):
                echo $this->Form->control('pages_components.'.$key.'.breaked_content.'.$index, ['class'=>'form-control', 'type'=>'select','label'=>'Posição '.$index, 'options'=>$posts_list, 'value'=>$select]);
                endforeach;
                ?>
              </div>
            </div>
          </li>

        <?php elseif($page_component->component->type=='banner'):?>
          <li class="module" style="cursor:move" data-sort="<?=$page_component->sort;?>">
            <div class="card card-shadow">
              <div class="content banner-content" module-id="<?=$page_component->id;?>">
                <label>Banners TESTE</label>
                <?=$this->Form->hidden('pages_components.'.$key.'.id', ['class'=>'form-control']);?>
                <?=$this->Form->hidden('pages_components.'.$key.'.caption', ['class'=>'form-control']);?>

                <?php foreach($page_component->banners as $banner_key=>$banner):?>
                  <div class="row row-dashed banner-component" data-id="banner-<?=$banner->id?>" module-id="<?=$page_component->id;?>">
                    <button type="button" class="close-button" data-id="banner-<?=$banner->id?>">x</button>
                    <div class="col-md-3 flex-options">
                      <label>Imagem</label>
                      <?=$this->Html->image('../uploads/files/'.$banner['file']['filename'], ['class'=>'scaled-img', 'data-uid'=>$banner['file']['id']]);?>
                      <?=$this->Form->control('pages_components.'.$key.'.banners.'.$banner_key.'.file.filename', ['class'=>'', 'label'=>'Arquivo', 'type'=>'file']);?>
                      <?=$this->Form->hidden('pages_components.'.$key.'.banners.'.$banner_key.'.file.entity', ['class'=>'', 'label'=>'Arquivo', 'type'=>'file', 'value'=>'Banner']);?>
                    </div>
                    
                    <div class="col-md-3 flex-options">
                      <?=$this->Form->hidden('pages_components.'.$key.'.banners.'.$banner_key.'.id', ['value'=>$banner->id]);?>
                      <?=$this->Form->hidden('pages_components.'.$key.'.banners.'.$banner_key.'.page_component_id', ['value'=>$banner->page_component_id]);?>
                      <?=$this->Form->control('pages_components.'.$key.'.banners.'.$banner_key.'.title', ['class'=>'form-control', 'label'=>'Título', 'value'=>$banner->title]);?>
                      <?=$this->Form->control('pages_components.'.$key.'.banners.'.$banner_key.'.text_button', ['class'=>'form-control', 'label'=>'Chamada do botão', 'value'=>$banner->text_button]);?>
                      <?=$this->Form->control('pages_components.'.$key.'.banners.'.$banner_key.'.class', ['class'=>'form-control', 'label'=>'Classe do botão (blue, green, etc)', 'value'=>$banner->class]);?>
                      <?=$this->Form->control('pages_components.'.$key.'.banners.'.$banner_key.'.url', ['class'=>'form-control', 'label'=>'Url', 'value'=>$banner->url]);?>
                    </div>
                    
                    <div class="col-md-6">
                      <?=$this->Form->control('pages_components.'.$key.'.banners.'.$banner_key.'.text', ['class'=>'smalleditor', 'label'=>'Texto', 'type'=>'textarea', 'style'=>'width: 100%;', 'value'=>$banner->text]);?>
                    </div>
                  </div>
                <?php endforeach;?>
                
              </div>
              <button class="add_banner btn btn-fill" type="button" module-id="<?=$page_component->id?>" module-key="<?=$key?>">Adicionar banner</button>
            </div>
          </li>
          <?php endif;?>
      <?php endforeach;?>
    </ul>
  </section>
  
  
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <?= $this->Form->button(__('Salvar alterações'), ['class'=>'btn btn-info btn-fill']) ?>
      </div>
    </div>
  </div>
  <?= $this->Form->end() ?>
</div>
</div>
