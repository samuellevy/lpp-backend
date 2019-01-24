<div id="banner">
    <div class="wrapper">
        <div class="webdoor_home">
            <?=$this->Html->image('Site.../images/interna.png');?>
        </div>
    </div>
</div>

<div class="section_interna">
    <div class="wrapper">
        <h3 class="interno_title">Rede Credenciada</h3>
        <?=$this->element('page_modules/search_box');?>
        <h4><?=isset($servico)?$servico:'';?></h4>
        <?php if(isset($credenciados)):?>
        <?php foreach($credenciados as $credenciado):?>
        <div class="card_item">
            <p><?=$credenciado->nome_fantasia!=''?$credenciado->nome_fantasia:$credenciado->prestador;?></p>
            <?php
                if(strpos($credenciado->qualiss, ' ')){
                    $qualiss = explode('/', implode('', explode(' ',$credenciado->qualiss)));
                    foreach($qualiss as $quali){
                        // echo !empty($credenciado->qualiss)?'<p>'.$this->Html->image('Site.../images/'.$qualiss_list[$quali], ['escape'=>true]).'</p>':'';
                    }
                }
                else{
                    echo !empty($credenciado->qualiss)?'<p>'.$this->Html->image('Site.../images/'.$qualiss_list[$credenciado->qualiss], ['escape'=>true]).'</p>':'';
                }
            ?>
            <p>Razão Social: <?=$credenciado->prestador;?></p>
            <p>CNPJ: <?=$credenciado->cnpj;?></p>
            <p>Especialidade: <?=$credenciado->especialidade;?></p>
            <p>Atende Pediatria: <?=$credenciado->f_pediatrica?'Sim':'Não'?></p>
            <p><?=$credenciado->endereco;?></p>
            <p><?=$credenciado->cidade;?> - <?=$credenciado->estado;?></p>
            <p>CEP: <?=$credenciado->Cep;?></p>
            <p>Tel.: <?=$credenciado->telefone;?></p>
        </div>
        <?php endforeach;?>
        <?php endif;?>
        <?php if(!count($credenciados)):?>
        Nenhum resultado encontrado.
        <?php endif;?>

        <div class="paginator">
            <ul class="pagination">
              <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
              <?= $this->Paginator->prev('< ' . __('anterior')) ?>
              <?= $this->Paginator->numbers() ?>
              <?= $this->Paginator->next(__('próximo') . ' >') ?>
              <?= $this->Paginator->last(__('último') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} de {{count}}')]) ?></p>
        </div>

        <div class="legenda">
            <h4>Atributos de qualificação</h4>
            <div class="card"><?=$this->Html->image('Site.../images/a.png');?><span>Programa de Acreditação</span></div>
            <div class="card"><?=$this->Html->image('Site.../images/n.png');?><span>Comunicação de eventos adversos</span></div>
            <div class="card"><?=$this->Html->image('Site.../images/p.png');?><span>Pós graduação latu senso</span></div>
            <div class="card"><?=$this->Html->image('Site.../images/r.png');?><span>Residência</span></div>
            <div class="card"><?=$this->Html->image('Site.../images/e.png');?><span>Título de Especialista</span></div>
            <div class="card"><?=$this->Html->image('Site.../images/q.png');?><span>Qualidade monitorada</span></div>
            <div class="card"><?=$this->Html->image('Site.../images/g.png');?><span>Certificação de Entidades Gestoras de Outros Programas de Qualidade</span></div>
            <div class="card"><?=$this->Html->image('Site.../images/i.png');?><span>Certificação ISO 9001</span></div>
            <div class="card"><?=$this->Html->image('Site.../images/d.png');?><span>Doutorado/ Pós-doutorado</span></div>
            <div class="card"><?=$this->Html->image('Site.../images/m.png');?><span>Mestrado</span></div>
        </div>
    </div>
</div>