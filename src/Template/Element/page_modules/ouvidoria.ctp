<div class="section_interna">
    <div class="wrapper">
        <div class="trabalhe_conosco">
            <?= $this->Form->create('cadastro', ['url'=>['controller'=>'pages', 'action'=>'ouvidoria']]); ?>
                <span>Envie uma mensagem</span>
                <input name="nome" type="text" placeholder="Nome completo"/>
                <input name="numero" type="text" placeholder="Nº Carteirinha"/>
                <input name="email" type="text" placeholder="Email">
                <textarea name="mensagem" value="" placeholder="Escreva sua mensagem"></textarea>
                <button type="submit"><span>Enviar</span></button>
            </form>
        </div>
    </div>
</div>