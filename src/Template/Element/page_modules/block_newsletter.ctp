<div class="newsletter">
    <div class="wrapper">
        <div class="box">
            <div class="news-title"><?php echo $this->Html->image('Site.../images/newsletter.png');?>
                <h4>Newsletter</h4><span>Stay Connected. Add your name and email address to confirm that you would like
                us to keep you informed about the work we do,
                our events and fundraising. (For full information on how we use and securely store your data,
                please see our Privacy Policy.)</span>
            </div>
            <div class="newsletter-input">
                <?php echo $this->Form->create('contato', ['type'=>'file']); ?>
                    <?=$this->Flash->render(); ?>
                    <input type="hidden" name="assunto" value="5">
                    <input type="hidden" name="mensagem" value="">
                    <input class="nome" name="name" type="text" placeholder="Name">
                    <input class="e-mail" name="email" type="text" placeholder="E-mail">
                    <button class="enviar">Subscribe</button>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>