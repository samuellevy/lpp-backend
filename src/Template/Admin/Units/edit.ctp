<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Nova unidade</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($units) ?>
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
                <?php echo $this->Form->control('address', ['class'=>'form-control', 'label'=>'Endereço']);?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <?php echo $this->Form->control('location', ['class'=>'form-control', 'label'=>'Url']);?>
              </div>
            </div>
          </div>
          <!-- <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <?php echo $this->Form->control('featured', ['class'=>'form-control', 'label'=>'Especial']);?>
              </div>
            </div>
          </div> -->
          
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
