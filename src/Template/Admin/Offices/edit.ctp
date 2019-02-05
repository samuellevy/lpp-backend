<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Registrar novo local de atuação</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($office, ['type'=>'file']) ?>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <?php echo $this->Form->control('name', ['class'=>'form-control', 'label'=>'Nome']);?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <?php echo $this->Form->control('class', ['class'=>'form-control', 'label'=>'Classmap']);?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <?php echo $this->Form->control('content', ['class'=>'form-control ckeditor', 'label'=>'Conteúdo']);?>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-info btn-fill']) ?>
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
