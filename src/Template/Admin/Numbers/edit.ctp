<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Editar número</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($number, ['type'=>'file']) ?>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <?php echo $this->Form->control('title', ['class'=>'form-control', 'label'=>'Título']);?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <?php echo $this->Form->control('url', ['class'=>'form-control', 'label'=>'Url']);?>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <label>Imagem Desktop</label><br/>
                <figure class="form-box-img">
                  <?php if(isset($number['desktop'][0])):?>
                  <button type="button" class="btn btn-danger btn-fill remove" data-uid="<?=$number['desktop'][0]['id'];?>">Remover</button>
                  <?php echo $this->Html->image('../uploads/files/'.$number['desktop'][0]['filename'], ['class'=>'form-img', 'data-uid'=>$number['desktop'][0]['id']]);?>
                  <?php else:?>
                  <img class="img-rounded form-img" src="http://via.placeholder.com/800x600">
                  <?php endif;?>
                  <?php echo $this->Form->file('files.0.filename', ['class'=>'form-file']);?>
                  <?php echo $this->Form->hidden('files.0.entity', ['class'=>'form-file', 'value'=>'Number']);?>
                  <?php echo $this->Form->hidden('files.0.obs', ['class'=>'form-file', 'value'=>'Desktop']);?>
                </figure>
              </div>
            </div>

            <div class="col-md-2">
              <div class="form-group">
                <label>Imagem Mobile</label><br/>
                <figure class="form-box-img">
                  <?php if(isset($number['mobile'][0])):?>
                  <button type="button" class="btn btn-danger btn-fill remove" data-uid="<?=$number['mobile'][0]['id'];?>">Remover</button>
                  <?php echo $this->Html->image('../uploads/files/'.$number['mobile'][0]['filename'], ['class'=>'form-img', 'data-uid'=>$number['mobile'][0]['id']]);?>
                  <?php else:?>
                  <img class="img-rounded form-img" src="http://via.placeholder.com/400x300">
                  <?php endif;?>
                  <?php echo $this->Form->file('files.1.filename', ['class'=>'form-file']);?>
                  <?php echo $this->Form->hidden('files.1.entity', ['class'=>'form-file', 'value'=>'Number']);?>
                  <?php echo $this->Form->hidden('files.1.obs', ['class'=>'form-file', 'value'=>'Mobile']);?>
                </figure>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <?= $this->Form->button(__('Send'), ['class'=>'btn btn-info btn-fill pull-right']) ?>
              </div>
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