<div class='section_interna'>
    <div class="wrapper">
        <div class="trabalhe_conosco">
        <?= $this->Form->create('cadastro', ['url'=>['controller'=>'pages', 'action'=>'send']]); ?>
            <span>Dados Pessoais</span>
              <input name="nome" type="text" placeholder="Nome completo">
              <input name="email" type="text" placeholder="Email">
              <div class="radio">
                <label>Sexo:</label>
                <input name="sexo" type="radio" value="masculino">
                <label>Masculino</label>
                <input name="sexo" type="radio" value="feminino">
                <label>Feminino</label>
              </div>
              <select name="estadocivil">
                <option value="">Estado civil</option>
                <option value="Solteiro">Solteiro</option>
                <option value="Casado">Casado</option>
                <option value="Viúvo">Viúvo</option>
                <option value="Separado">Separado</option>
                <option value="Divorciado">Divorciado</option>
              </select>
              <input name="datadenascimento" type="text" placeholder="Data de nascimento" mask-type="data">
              <select name="empregado">
                <option value="">Está empregado</option>
                <option value="Estou empregado">Sim</option>
                <option value="Não estou empregado">Não</option>
              </select>
              <input name="profissao" type="text" placeholder="Profissão">
              <input name="residencial" type="text" placeholder="Telefone Residencial">
              <input name="celular" type="text" placeholder="Celular">
              <input name="telefonederecado" type="text" placeholder="Telefone de recado">
              <input name="falarcom" type="text" placeholder="Falar com">
              <input name="endereco" type="text" placeholder="Endereço">
              <input name="numero" type="text" placeholder="Número">
              <input name="complemento" type="text" placeholder="Complemento">
              <input name="bairro" type="text" placeholder="Bairro">
              <input name="cep" type="text" placeholder="CEP">
              <input name="cidade" type="text" placeholder="Cidade">
              <select name="estado">
                <option value="">Estado</option>
                <option value="Acre">Acre</option>
                <option value="Alagoas">Alagoas</option>
                <option value="Amapá">Amapá</option>
                <option value="Amazonas">Amazonas</option>
                <option value="Bahia">Bahia</option>
                <option value="Ceará">Ceará</option>
                <option value="Distrito Federal">Distrito Federal</option>
                <option value=" Espiríto Santo">Espiríto Santo</option>
                <option value="Goiás">Goiás</option>
                <option value="Maranhão">Maranhão</option>
                <option value="Mato Grosso">Mato Grosso</option>
                <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                <option value="Minas Gerais">Minas Gerais</option>
                <option value="Paraná">Paraná</option>
                <option value="Paraíba">Paraíba</option>
                <option value="Pará">Pará</option>
                <option value="Pernanbumco">Pernanbumco</option>
                <option value="Piauí">Piauí</option>
                <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                <option value="Rio de Janeiro">Rio de Janeiro</option>
                <option value="Rondônia">Rondônia</option>
                <option value="Roraima">Roraima</option>
                <option value="Santa Catarina">Santa Catarina</option>
                <option value="Sergipe">Sergipe</option>
                <option value="São Paulo">São Paulo</option>
                <option value="Tocantins">Tocantins</option>
              </select><span>Objetivos Profissionais</span>
              <textarea name="objetivosprofissionais" cols="50" rows="5" placeholder="Descreva seus objetivos"></textarea>
              <select name="ondesejatrabalhar">
                <option value="Onde deseja trabalhar">Onde deseja trabalhar?</option>
                <option value="Barra do Piraí">Barra do Piraí</option>
                <option value="Belfort Roxo">Belfort Roxo</option>
                <option value="Campo Grande">Campo Grande</option>
                <option value="Campos">Campos</option>
                <option value="Caxias">Caxias</option>
                <option value="Macaé">Macaé</option>
                <option value="Miracema">Miracema</option>
                <option value="Niterói">Niterói</option>
                <option value="São Gonçalo">São Gonçalo</option>
                <option value="Centro RJ - SEDE">Centro RJ - SEDE</option>
                <option value="Teresópolis">Teresópolis</option>
              </select>
              <select name="pretensaosalarial">
                <option value="Pretensão Salarial">Pretensão Salarial</option>
                <option value="Até R$ 500">Até R$ 500</option>
                <option value="De R$ 501,00 A R$ 1.000,00">De R$ 501,00 A R$ 1.000,00</option>
                <option value="De R$ 1001,00 A R$ 1.500,00">De R$ 1001,00 A R$ 1.500,00</option>
                <option value="De R$ 1.501,00 A R$ 2.000,00">De R$ 1.501,00 A R$ 2.000,00</option>
                <option value="De R$ 2.001,00 A R$ 2.500,00">De R$ 2.001,00 A R$ 2.500,00</option>
                <option value="De R$ 2.501,00 A R$ 3.000,00">De R$ 2.501,00 A R$ 3.000,00</option>
                <option value="De R$ 3.501,00 A R$ 4.000,00">De R$ 3.501,00 A R$ 4.000,00</option>
                <option value="De R$ 4.001,00 A R$ 4.500,00">De R$ 4.001,00 A R$ 4.500,00</option>
                <option value="De R$ 4.501,00 A R$ 5.000,00">De R$ 4.501,00 A R$ 5.000,00</option>
                <option value="Acima de R$ 5.001,00	">Acima de R$ 5.001,00</option>
              </select>
              <select name="areadeatuacao">
                <option value="Área de atuação">Área de atuação</option>
                <option value="Administração Geral">Administração Geral</option>
                <option value="Almoxarifado">Almoxarifado</option>
                <option value="Atendimento/ Telemarketing/ Call Center">Atendimento/ Telemarketing/ Call Center</option>
                <option value="Auditoria">Auditoria</option>
                <option value="Auditoria Médica">Auditoria Médica</option>
                <option value="Compras">Compras</option>
                <option value="Comunicação Social">Comunicação Social</option>
                <option value="Contabilidade">Contabilidade</option>
                <option value="Controladoria">Controladoria</option>
                <option value="Custos">Custos</option>
                <option value="Credenciamento">Credenciamento</option>
                <option value="Digitação">Digitação</option>
                <option value="Enfermagem">Enfermagem</option>
                <option value="Faturamento Hospitalar">Faturamento Hospitalar</option>
                <option value="Financeira">Financeira</option>
                <option value="Informática (Sistema)">Informática (Sistema)</option>
                <option value="Informática (Suporte)">Informática (Suporte)</option>
                <option value="Informática (DBA)">Informática (DBA)</option>
                <option value="Jurídica">Jurídica</option>
                <option value="Logística">Logística</option>
                <option value="Manutenção">Manutenção</option>
                <option value="Medicina">Medicina</option>
                <option value="Medicina do Trabalho">Medicina do Trabalho</option>
                <option value="Medicina Preventiva">Medicina Preventiva</option>
                <option value="Ouvidoria">Ouvidoria</option>
                <option value="Planejamento e Orçamento">Planejamento e Orçamento</option>
                <option value="Recepção">Recepção</option>
                <option value="Recursos Humanos">Recursos Humanos</option>
                <option value="Departamento Pessoal">Departamento Pessoal</option>
                <option value="Serviços Gerais">Serviços Gerais</option>
                <option value="Serviço Social">Serviço Social</option>
                <option value="Secretariado">Secretariado</option>
                <option value="Telemarketing">Telemarketing</option>
                <option value="Transporte">Transporte</option>
                <option value="Telefonia">Telefonia</option>
                <option value="Web Designer">Web Designer</option>
              </select>
              <textarea name="minicurriculo" cols="50" rows="5" placeholder="Minicurriculo"></textarea><span>Escolaridade</span>
              <select name="graudescolaridade">
                <option value="Grau de escolaridade">Grau de escolaridade</option>
                <option value="Curso Técnico">Curso Técnico</option>
                <option value="Ensino Médio Completo">Ensino Médio Completo</option>
                <option value="Superior Completo">Superior Completo</option>
                <option value="Superior Incompleto">Superior Incompleto</option>
                <option value="Pós-graduação /MBA">Pós-graduação /MBA</option>
                <option value="Mestrado">Mestrado</option>
                <option value="Doutorado">Doutorado</option>
                <option value="Pós-doutorado">Pós-doutorado</option>
              </select>
              <select name="curso">
                <option value="Curso">Curso</option>
                <option value="Administração">Administração</option>
                <option value="Arquitetura">Arquitetura</option>
                <option value="Arquivologia">Arquivologia</option>
                <option value="Artes Plásticas">Artes Plásticas</option>
                <option value="Biblioteconomia">Biblioteconomia</option>
                <option value="Biologia">Biologia</option>
                <option value="Ciências Atuariais">Ciências Atuariais</option>
                <option value="Ciências Contábeis">Ciências Contábeis</option>
                <option value="Ciências da Computação">Ciências da Computação</option>
                <option value="Ciências Sociais">Ciências Sociais</option>
                <option value="Comunicação">Comunicação </option>
                <option value="Desenho Industrial">Desenho Industrial</option>
                <option value="Direito">Direito</option>
                <option value="Economia">Economia</option>
                <option value="Educação Física">Educação Física</option>
                <option value="Enfermagem">Enfermagem</option>
                <option value="Engenharia">Engenharia</option>
                <option value="Engenaria  Civil">Engenaria  Civil</option>
                <option value="Engenharia de Produção">Engenharia de Produção</option>
                <option value="Engenharia de Sistemas">Engenharia de Sistemas</option>
                <option value="Engenharia Elétrica/ Eletrônica">Engenharia Elétrica/ Eletrônica</option>
                <option value="Engenharia Mecânica">Engenharia Mecânica</option>
                <option value="Engenharia Química">Engenharia Química</option>
                <option value="Física">Física</option>
                <option value="Geologia">Geologia</option>
                <option value="História">História</option>
                <option value="Informática">Informática</option>
                <option value="Letras">Letras</option>
                <option value="Marketing">Marketing</option>
                <option value="Matemática">Matemática</option>
                <option value="Medicina">Medicina</option>
                <option value="Outros">Outros</option>
                <option value="Pedagogia">Pedagogia</option>
                <option value="Psicologia">Psicologia</option>
                <option value="Química">Química</option>
                <option value="Secretariado">Secretariado</option>
                <option value="Tecnólogo Processamento de Dados">Tecnólogo Processamento de Dados</option>
              </select>
              <select name="idiomas">
                <option value="Idiomas">Idiomas</option>
                <option value="Alemão">Alemão</option>
                <option value="Espanhol">Espanhol</option>
                <option value="Francês">Francês</option>
                <option value="Inglês">Inglês</option>
                <option value="Outros">Outros</option>
              </select><span>Experiência Profissional</span>
              <input name="ultimoemprego" type="text" placeholder="Último emprego">
              <input name="cargonaempresa1" type="text" placeholder="Cargo na empresa">
              <input name="datadeentrada1" type="text" placeholder="Data de entrada" mask-type="data">
              <input name="datadesaida1" type="text" placeholder="Data de saída" mask-type="data">
              <div class="line"></div>
              <input name="penultimoemprego" type="text" placeholder="Penúltimo emprego">
              <input name="cargonaempresa2" type="text" placeholder="Cargo na empresa">
              <input name="datadeentrada2" type="text" placeholder="Data de entrada" mask-type="data">
              <input name="datadesaida2" type="text" placeholder="Data de saída" mask-type="data">
              <div class="line"></div>
              <input name="antepenultimo" type="text" placeholder="Antepenúltimo emprego">
              <input name="cargonaempresa3" type="text" placeholder="Cargo na empresa">
              <input name="datadeentrada3" type="text" placeholder="Data de entrada" mask-type="data">
              <input name="datadesaida3" type="text" placeholder="Data de saída" mask-type="data">
              <button type="submit"><span>Enviar</span></button>
            </form>
        </div>
    </div>
</div>