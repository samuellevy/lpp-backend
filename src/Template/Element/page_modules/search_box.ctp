<div class="search_result">
    <h2>Procure médicos, clínicas, laboratórios e hospitais credenciados mais perto de você:</h2>
    <?= $this->Form->create('get', ['action'=>'results', 'class'=>'form_home', 'method'=>'get']);?>
    <?= $this->Form->input('prestador', ['value'=>isset($prestador)?$prestador:'','label'=>false, 'style'=>'padding-top:8px;', 'placeholder'=>'Prestador']);?>
    <?= $this->Form->input('servico', ['options'=>$servicos_list, 'value'=>isset($servico)?$servico:'', 'label'=>false, 'style'=>'padding-top:8px;']);?>
    <?= $this->Form->input('especialidade', ['options'=>$especialidades_list, 'value'=>isset($especialidade)?$especialidade:'', 'label'=>false, 'style'=>'padding-top:8px;']);?>
    <?= $this->Form->input('cidade', ['options'=>$cidades_list, 'value'=>isset($cidade)?$cidade:'', 'label'=>false, 'style'=>'padding-top:8px;', 'class'=>'select_cidade']);?>

    <select name='bairro' class='select_bairros' style="top: -3px; position: relative;">
        <option value="">Bairro</option>
    </select>
    <input type='hidden' id='csrfToken' value='<?=$this->request->getParam('_csrfToken');?>'/>
    <button type="submit" style="cursor:pointer;">Buscar</button>
</form>
</div>