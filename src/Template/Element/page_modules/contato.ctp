<div class="section_interna">
    <div class="wrapper">
        <div class="trabalhe_conosco">
            <?= $this->Form->create('cadastro', ['url'=>['controller'=>'pages', 'action'=>'contact']]); ?>
                <span>Envie uma mensagem</span>
                <select name="setor">
                    <option value="">Com quem deseja falar?</option>
                    <option value="0">Central de Atendimento (dúvidas, reclamações, sugestões)</option>
                    <option value="1">Setor de Credenciamento (atendimento aos Prestadores)</option>
                    <option value="2">Setor de Comunicação (outros assuntos)</option>
                    <option value="3">Webmaster (sobre o funcionamento do website)</option>
                </select>
                <input name="nome" type="text" placeholder="Nome completo"/>
                <input name="email" type="text" placeholder="Email">
                <input name="numero" type="text" placeholder="Assunto"/>
                <textarea name="mensagem" value="" placeholder="Escreva sua mensagem"></textarea>
                <button type="submit"><span>Enviar</span></button>
            </form>
        </div>
    </div>
</div>