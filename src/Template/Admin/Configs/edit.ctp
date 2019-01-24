<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Editar configuração</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($config, ['type'=>'file']) ?>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <?php echo $this->Form->control('title', ['class'=>'form-control', 'label'=>'Título']);?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <?php echo $this->Form->control('slug', ['class'=>'form-control', 'label'=>'Slug']);?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Components</label><br/>
                <figure class="form-group">
                  <ul id="sortable" style="list-style:none;padding:0;">
                    <?php if($config->component->type=='editor'):?>
                      <li>
                        <?php echo $this->Form->control('content', ['class'=>'form-control ckeditor', 'label'=>'Conteúdo']);?>
                      </li>
                    <?php elseif($config->component->type=='input'):?>
                      <li>
                        <?php echo $this->Form->control('content', ['class'=>'form-control', 'label'=>'Conteúdo']);?>
                      </li>
                    <?php endif;?>
                  </ul>
                </figure>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
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