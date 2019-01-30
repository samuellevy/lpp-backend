<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Registrar patrocinador</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($sponsor, ['type'=>'file']) ?>
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
            <div class="col-md-4">
              <div class="form-group">
                <?php echo $this->Form->control('sponsor_from_id', ['class'=>'form-control', 'label'=>'Aba', 'options'=>$sponsor_from]);?>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <?php echo $this->Form->control('type', ['class'=>'form-control', 'label'=>'Tipo', 'options'=>$sponsor_type, 'value'=>$sponsor->type]);?>
              </div>
            </div>
          </div>
          
          
          <div class="col-md-5">
            <div class="form-group">
              <label>Imagem Interna</label><br/>
              <figure class="form-box-img">
                <?php if(isset($sponsor['files'][0])):?>
                <button type="button" class="btn btn-danger btn-fill remove" data-uid="<?=$sponsor['files'][0]['id'];?>">Remover</button>
                <?php echo $this->Html->image('../uploads/files/'.$sponsor['files'][0]['filename'], ['class'=>'form-img icon-size', 'data-uid'=>$sponsor['files'][0]['id']]);?>
                <?php else:?>
                <img class="img-rounded form-img icon-size" src="http://via.placeholder.com/47x43">
                <?php endif;?>
                <?php echo $this->Form->file('files.0.filename', ['class'=>'form-file']);?>
                <?php echo $this->Form->hidden('files.0.entity', ['class'=>'form-file', 'value'=>'Sponsor']);?>
                <?php echo $this->Form->hidden('files.0.obs', ['class'=>'form-file', 'value'=>'Intern']);?>
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
        
        <div class="clearfix"></div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</div>
</div>
