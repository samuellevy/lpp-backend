<div class="container-fluid">
    <section>
        <div class="header">
            <h4 class="title"><?=__('Adicionar número');?></h4>
        </div>
        <div class="card card-shadow">
            <div class="row">
                <div class="col-md-6">
                    <div class="content">
                        <?= $this->Form->create($number, ['type'=>'file']) ?>
                        <div class="row">
                            <div class="col-md-6">
                                <?=$this->Form->control('title',['class'=>'form-control','label'=>'Título']);?>
                                <?=$this->Form->control('block',['class'=>'form-control','label'=>'Bloco']);?>
                                <?=$this->Form->control('position',['class'=>'form-control','label'=>'Posição']);?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Imagem Desktop</label><br />
                                    <figure class="form-box-img">
                                        <img class="img-rounded form-img" src="http://via.placeholder.com/800x600"/>
                                        <?php echo $this->Form->file('files.0.filename',['class'=>'form-file']);?>
                                        <?php echo $this->Form->hidden('files.0.entity',['class'=>'form-file','value'=>'Number']);?>
                                        <?php echo $this->Form->hidden('files.0.obs',['class'=>'form-file','value'=>'Desktop']);?>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Imagem Mobile</label><br />
                                    <figure class="form-box-img">
                                        <img class="img-rounded form-img" src="http://via.placeholder.com/400x300"/>
                                        <?php echo $this->Form->file('files.1.filename', ['class'=>'form-file']);?>
                                        <?php echo $this->Form->hidden('files.1.entity', ['class'=>'form-file', 'value'=>'Number']);?>
                                        <?php echo $this->Form->hidden('files.1.obs', ['class'=>'form-file', 'value'=>'Mobile']);?>
                                    </figure>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?= $this->Form->button(__('Enviar'),['class'=>'btn btn-info btn-fill']) ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </section>
</div>
