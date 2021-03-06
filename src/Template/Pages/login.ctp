<div id="banner">
    <div class="wrapper">
        <div class="webdoor_home">
            <?=$this->Html->image('Site.../images/interna.png');?>
        </div>
    </div>
</div>

<div class="section_interna">
    <div class="wrapper">
        <h3 class="interno_title">Análise de Currículo – PF</h3>
        <p class="interno_subtitle">Deseja se credenciar à CAC?</p>
        <p class="normal">Primeiramente verifique se você preenche nossos Critérios de Credenciamento. Caso positivo, para submeter seu currículo para análise do nosso setor de Credenciamento, por favor entre em contato através do email decre@cac.org.br e solicite uma senha de acesso.</p>
        <p class="normal">Após receber a senha de acesso, faça o login e preencha os dados solicitados.</p>
        <p class="normal">Suas informações serão analisadas e entraremos em contato o mais breve possível.</p>
        <div class="login_interno"><span>Preencha os campos abaixo e clique em "Entrar".</span>
            <form action="http://www.cac.org.br/prestadores/analise/form_analise.php" method="POST" name="form" enctype="multipart/form-data">
                <input name="email" type="text" placeholder="Email">
                <input name="senha" type="text" placeholder="Senha">
                <button type="submit"><span>Entrar</span></button>
            </form>
        </div>
    </div>
</div>