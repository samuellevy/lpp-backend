<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Editar evento</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($timeline, ['type'=>'file']) ?>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <?php echo $this->Form->control('year', ['class'=>'form-control', 'label'=>'Ano']);?>
                <?php echo $this->Form->control('description', ['class'=>'form-control ckeditor', 'label'=>'Descrição']);?>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <label>Imagem Desktop</label><br/>
                <figure class="form-box-img">
                  <img class="img-rounded" src="http://via.placeholder.com/280x210">
                  <?php echo $this->Form->file('files.0.filename', ['class'=>'form-file']);?>
                  <?php echo $this->Form->hidden('files.0.entity', ['class'=>'form-file', 'value'=>'Timeline']);?>
                  <?php echo $this->Form->hidden('files.0.obs', ['class'=>'form-file', 'value'=>'Desktop']);?>
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