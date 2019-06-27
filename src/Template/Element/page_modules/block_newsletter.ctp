<div class="newsletter">
    <div class="wrapper">
        <div class="box">
            <div class="news-title"><?php echo $this->Html->image('Site.../images/newsletter.png');?>
                <h4><?=__("Newsletter");?></h4><span><?=__("Não perca nada que acontece na Luta pela Paz.");?></span>
            </div>
            <div class="newsletter-input">
                <?php echo $this->Form->create('contato', ['type'=>'file']); ?>
                    <?=$this->Flash->render(); ?>
                    <input type="hidden" name="assunto" value="5">
                    <input type="hidden" name="mensagem" value="">
                    <input class="nome" name="name" type="text" placeholder="<?=__("Nome");?>">
                    <input class="e-mail" name="email" type="text" placeholder="E-mail">
                    <button class="enviar"><?=__("enviar");?></button>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>