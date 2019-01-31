<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Registro de novo depoimento</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($program, ['type'=>'file']) ?>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <?php echo $this->Form->control('name', ['class'=>'form-control', 'label'=>'Nome']);?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <?php echo $this->Form->control('atuacao', ['class'=>'form-control', 'label'=>'Atuação']);?>
              </div>
            </div>
          </div>

          <div class="row">            
            <div class="col-md-4">
              <div class="form-group">
                <label>Imagem Home Mobile</label><br/>
                <figure class="form-box-img">
                  <?php if(isset($program['files'][0])):?>
                    <button type="button" class="btn btn-danger btn-fill remove" data-uid="<?=$program['files'][0]['id'];?>">Remover</button>
                    <?php echo $this->Html->image('../uploads/files/'.$program['files'][0]['filename'], ['class'=>'form-img', 'data-uid'=>$program['files'][0]['id']]);?>
                  <?php else:?>
                    <img class="img-rounded form-img" src="http://via.placeholder.com/414x400">
                  <?php endif;?>
                  <?php echo $this->Form->file('files.0.filename', ['class'=>'form-file']);?>
                  <?php echo $this->Form->hidden('files.0.entity', ['class'=>'form-file', 'value'=>'Programs']);?>
                  <?php echo $this->Form->hidden('files.0.obs', ['class'=>'form-file', 'value'=>'']);?>
                  <?php echo $this->Form->hidden('files.0.model_id', ['class'=>'form-file', 'value'=>$program->id]);?>
                </figure>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <?php echo $this->Form->control('content', ['class'=>'form-control ckeditor', 'label'=>'Conteúdo']); ?>
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

          <div class="clearfix"></div>
          <?= $this->Form->end() ?>
        </div>
      </div>
    </div>
  </div>
</div>