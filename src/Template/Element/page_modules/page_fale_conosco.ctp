<div class="wrapper">
    <h1>Fale conosco</h1>
    <p>Entre em contato conosco!</p>
    <p>Faça seu comentário, dê sua sugestão e tire suas dúvidas.</p>
    <div class="container_form_map">
        <div class="contato">
            <?php echo $this->Form->create('contato', ['type'=>'file']); ?>
                <?=$this->Flash->render(); ?>
                <input name="name" type="text" placeholder="Nome">
                <input name="email" type="text" placeholder="E-mail">
                <div class="form-pad"></div>
                <select name="assunto">
                    <option value="0">Selecione um assunto</option>
                    <option value="1">Dúvidas</option>
                    <option value="2">Sugestões</option>
                    <option value="3">Doação</option>
                    <option value="4">Parcerias</option>
                </select>
                <div class="form-pad"></div>
                <textarea name="mensagem" placeholder="Escreva sua mensagem"></textarea>
                
                <!-- <button class="anexo">ANEXAR ARQUIVO<?php echo $this->Html->image('Site.../images/clip.png');?></button> -->
                <button class="btn-send">ENVIAR</button>
                <?php //echo $this->Form->file('file', ['class'=>'form-file']);?>
            <?php echo $this->Form->end(); ?>
        </div>
        <div id="map">
            <div class="map"> 
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.585026541786!2d-43.242093684565965!3d-22.85483748503824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9979995170a76b%3A0x7c73f93ee2509e61!2sLuta+pela+Paz!5e0!3m2!1spt-BR!2sbr!4v1547486343565" width="308" height="245" frameborder="0" style="border:0" allowfullscreen></iframe>
                <div class="lppaddress"><span>Academia Luta pela Paz - Rio de Janeiro</span>
                    <p>Rua Teixeira Ribeiro, 900 - Maré, Rio de</br> Janeiro RJ / Brasil, CEP: 210.44-251</p>
                </div>
            </div>
            <div class="section_address">
                <div class="address">
                    <ul>
                        <li>Academia Luta pela Paz – Londres<span>Woodman Street London, E16 2LS - United Kingdom</span></li>
                        <li>Programa Comunidades Seguras – Kingston<span>7 Harbour Street, Kingston - Jamaica</span></li>
                        <li>Programa Comunidades Seguras – Cidade do Cabo<span>302 Salt Circle, 19 Kent Street - Cape Town, 7925 - South Africa</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>