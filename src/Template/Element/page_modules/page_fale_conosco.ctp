<div class="wrapper">
    <h1><?=__("Fale conosco");?></h1> 
    <p><?=__("Entre em contato conosco!");?></p>
    <p><?=__("Faça seu comentário, dê sua sugestão e tire suas dúvidas.")?></p>
    <div class="container_form_map">
        <div class="contato">
            <?php echo $this->Form->create('contato', ['type'=>'file']); ?>
                <?=$this->Flash->render(); ?>
                <input name="name" type="text" placeholder="<?=__("Nome");?>">
                <input name="email" type="text" placeholder="<?=__("E-mail");?>">
                <div class="form-pad"></div>
                <select name="assunto">
                    <option value="0"><?=__("Selecione um assunto")?></option>
                    <option value="1"><?=__("Dúvidas");?></option>
                    <option value="2"><?=__("Sugestões");?></option>
                    <option value="3"><?=__("Doação");?></option>
                    <option value="4"><?=__("Parcerias");?></option>
                </select>
                <div class="form-pad"></div>
                <textarea name="mensagem" placeholder="<?=__("Escreva sua mensagem");?>"></textarea>
                
                <!-- <button class="anexo">ANEXAR ARQUIVO<?php echo $this->Html->image('Site.../images/clip.png');?></button> -->
                <button class="btn-send"><?=__("ENVIAR");?></button>
                <?php //echo $this->Form->file('file', ['class'=>'form-file']);?>
            <?php echo $this->Form->end(); ?>
        </div>
        <div id="map">

            <div class="map"> 
                <iframe src="<?=$special_unit->location;?>" width="308" height="245" frameborder="0" style="border:0" allowfullscreen></iframe>
                <div class="lppaddress"><span><?=$special_unit->name;?></span>
                    <p><?=$special_unit->address;?></p>
                </div>
            </div>

            <div class="section_address">
                <div class="address">
                    <ul>
                    <?php foreach($units as $unit):?>
                        <li><?=$unit->name;?><span><?=$unit->address;?></span></li>
                    <?php endforeach;?>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>