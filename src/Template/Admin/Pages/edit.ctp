<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Atualizar página</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($page) ?>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <?php echo $this->Form->control('name', ['class'=>'form-control', 'label'=>'Nome']);?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <?php echo $this->Form->control('title', ['class'=>'form-control', 'label'=>'Título']);?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <?php echo $this->Form->control('slug', ['class'=>'form-control', 'label'=>'Slug']);?>
              </div>
            </div>
          </div>
          <?php if($page->type>0):?>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <?php echo $this->Form->control('type', ['class'=>'form-control', 'label'=>'Tipo da página', 'options'=>[1=>'Com menu e footer', 2=>'Newsletter', 3=>'Vazia']]);?>
              </div>
            </div>
          </div>
          <?php endif;?>

          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                <label>Components</label><br/>
                <figure class="form-group">
                  <ul id="sortable" style="list-style:none;padding:0;">
                    <?php foreach($page->pages_components as $key=>$page_component):?>
                    <?php if($page_component->component->type=='editor'):?>
                      <li style="cursor:move" data-sort="<?=$page_component->sort;?>">
                        <?php echo $this->Form->hidden('pages_components.'.$key.'.id', ['class'=>'form-control']);?>
                        <?php echo $this->Form->hidden('pages_components.'.$key.'.sort', ['class'=>'form-control sortfield']);?>
                        <?php echo $this->Form->control('pages_components.'.$key.'.content', ['class'=>'form-control ckeditor', 'label'=>$page_component->caption]);?>
                      </li>
                      <?php elseif($page_component->component->type=='module'):?>
                      <li style="cursor:move" data-sort="<?=$page_component->sort;?>">
                        <?php echo $this->Form->hidden('pages_components.'.$key.'.id', ['class'=>'form-control']);?>
                        <?php echo $this->Form->hidden('pages_components.'.$key.'.sort', ['class'=>'form-control sortfield']);?>
                        <?php echo $this->Form->control('pages_components.'.$key.'.caption', ['class'=>'form-control', 'label'=>$page_component->caption]);?>
                        <?php echo $this->Form->control('pages_components.'.$key.'.content', ['class'=>'form-control', 'type'=>'text','label'=>false, 'disabled'=>'disabled']);?>
                      </li>
                      <?php elseif($page_component->component->type=='input'):?>
                      <li style="cursor:move" data-sort="<?=$page_component->sort;?>">
                        <?php echo $this->Form->hidden('pages_components.'.$key.'.id', ['class'=>'form-control']);?>
                        <?php echo $this->Form->hidden('pages_components.'.$key.'.sort', ['class'=>'form-control sortfield']);?>
                        <?php echo $this->Form->control('pages_components.'.$key.'.description', ['class'=>'form-control', 'type'=>'text','label'=>$page_component->caption]);?>
                      </li>

                      <?php elseif($page_component->component->type=='block'):?>
                      <li style="cursor:move" data-sort="<?=$page_component->sort;?>">
                        <?php echo $this->Form->hidden('pages_components.'.$key.'.id', ['class'=>'form-control']);?>
                        <?php echo $this->Form->hidden('pages_components.'.$key.'.sort', ['class'=>'form-control sortfield']);?>

                        <?php
                        $selects = explode(',',$page_component->content);
                        foreach($selects as $index=>$select):
                          echo $this->Form->control('pages_components.'.$key.'.breaked_content.'.$index, ['class'=>'form-control', 'type'=>'select','label'=>'Posição '.$index, 'options'=>$posts_list, 'value'=>$select]);
                        endforeach;
                        ?>
                      </li>
                      <?php endif;?>
                      <?php endforeach;?>
                  </ul>
                </figure>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                <?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-info btn-fill pull-right']) ?>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>
          <?= $this->Form->end() ?>
        </div>
      </div>
    </div>
  </div>
</div>
