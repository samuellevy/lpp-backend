<div class="programs">
    <div class="wrapper">
        <div class="box">
            <div class="item">
                <div class="media"><?php echo $this->Html->image('Site.../images/media_programs.png');?></div>
            </div>
            <div class="item">
                <div class="text">
                    <h4 class="red">Academias</h4>
                    <p>As nossas Academias no Rio de Janeiro e em Londres combinam todas as vertentes metodológicas da organização em um único local. São implementados projetos de prevenção de violência nos níveis primário, secundário e terciário. Nossos programas utilizam a metodologia dos Cinco Pilares, combinada com Desenvolvimento Pessoal e a Teoria da Mudança. Os serviços são adaptados para combinar as opções e as influências que os indivíduos necessitam para lidar com problemas multi-causais e múltiplos fatores de risco.</p><a href="/academias">Saiba mais sobre as academias</a>
                </div>
            </div>
        </div>
        <div class="box inverter">
            <div class="item">
                <div class="media"><?php echo $this->Html->image('Site.../images/alianca.png');?></div>
            </div>
            <div class="item">
                <div class="text">
                    <h4 class="blue">Aliança Luta pela Paz</h4>
                    <p>A Aliança Luta pela Paz é uma comunidade de prática contínua para organizações que foram treinadas na nossa metodologia e que acreditam no poder de esportes de luta, educação e desenvolvimento pessoal para trazer mudanças positivas para as vidas de jovens que vivem em comunidades desfavorecidas. Desde 2011, já treinamos mais de 160 organizações em 25 países ao redor do mundo.</p>
                </div>
            </div>
        </div>
        <div class="box programs_slider">
            <div class="item_slider">
                <div class="item">
                    <div class="media"><?php echo $this->Html->image('Site.../images/comunidade-segura.jpg');?></div>
                </div>
                <div class="item">
                    <div class="text">
                        <h4 class="green">Programa </br>Comunidades Seguras</h4>
                        <p>O Programa Comunidades Seguras é implementado em centros de violência urbana, onde faltam recursos básicos. Utilizamos o modelo de impacto coletivo em parceria com organizações locais, governos, agências internacionais, doadores e o setor privado, a fim de juntos trazer uma mudança positiva para aquele local. Atualmente, nossos escritórios na Cidade do Cabo, África do Sul e em Kingston, Jamaica, executam o Programa Comunidades Seguras.</p>
                    
                    </div>
                </div>
            </div>
            <div class="item_slider">
                <div class="item">
                    <div class="media"><?php echo $this->Html->image('Site.../images/jamaica1.png');?></div>
                </div>
                <div class="item">
                    <div class="text">
                        <h4 class="green">Programa Comunidades</br>Seguras - Jamaica</h4>
                        <p>Em 2015, a Luta pela Paz começou a executar o Programa Comunidades Seguras (PCS) em Kingston, Jamaica. Por meio de uma equipe local sediada em Kingston, atuamos como uma organização de apoio, trabalhando em conjunto com atores locais para colaborar na redução da violência juvenil. Ao longo dos anos, uma série de projetos vem sendo concebida com base nos Cinco Pilares da Luta pela Paz, envolvendo mais parceiros de todos os setores. A equipe da Luta pela Paz na Jamaica atua como a organização de suporte.</p>
                    
                    </div>
                </div>
            </div>
            <div class="item_slider">
                <div class="item">
                    <div class="media"><?php echo $this->Html->image('Site.../images/jamaica2.png');?></div>
                </div>
                <div class="item">
                    <div class="text">
                    <h4 class="green">Programa Comunidades</br>Seguras - Jamaica</h4>
                        <p>O programa é aberto a todos os jovens, com idades entre 7 e 29 anos, que vivem em comunidades afetadas pela violência, mas foca naqueles jovens que estão mais envolvidos na violência. Todas as parcerias e atividades desenvolvidas nos programas da Luta pela Paz na Jamaica estão alinhadas a uma agenda comum, empregam métricas compartilhadas e são baseadas em uma Teoria da Mudança compartilhada.</p>
                    </div>
                </div>
            </div>
            <div class="item_slider">
                <div class="item">
                    <div class="media"><?php echo $this->Html->image('Site.../images/jamaica3.png');?></div>
                </div>
                <div class="item">
                    <div class="text">
                    <h4 class="green">Programa Comunidades</br>Seguras - África do Sul</h4>
                        <p>Em 2016, a Luta pela Paz começou o Programa Comunidades Seguras (PCS) na Cidade do Cabo, na África do Sul. Por meio de uma equipe local sediada na Cidade do Cabo, atuamos como uma organização de apoio, trabalhando ao lado de atores locais para colaborar na redução da violência juvenil. O programa inicia, coordena, fortalece e integra programas de redução da violência juvenil em três comunidades afetadas por gangues: Manenberg, Guguelethu e Delft.</p>
                    </div>
                </div>
            </div>
            <div class="item_slider">
                <div class="item">
                    <div class="media"><?php echo $this->Html->image('Site.../images/jamaica4.png');?></div>
                </div>
                <div class="item">
                    <div class="text">
                    <h4 class="green">Programa Comunidades</br>Seguras -  África do Sul</h4>
                        <p>Todas as parcerias e atividades desenvolvidas estão alinhadas a uma agenda comum, empregam métricas compartilhadas e são baseadas em uma Teoria da Mudança compartilhada. Em 2017, as atividades do Programa Comunidades Seguras impactaram diretamente 540 jovens e 137 adultos.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="box map-section">
            <div class="flag-lpp map-action" id="flag_BRASIL"></div>
            <div class="flag-lpp map-action" id="flag_GRA_BETANHA"></div>
            <div class="flag-lpp map-action" id="flag_JAMAICA"></div>
            <div class="flag-lpp map-action" id="flag_AFRICA_DO_SUL"></div>

            <?=$this->element('page_modules/map_svg');?>
            <div class="content-box">
                <?php foreach($offices as $office):?>
                <div class="item-office <?=$office->invert?'invert':''?>" data-target="<?=$office->class;?>">
                    <div class="title"><?=$office->name;?></div>
                    <div class="body">
                        <?=$office->content;?>
                    </div>
                </div>
                <?php endforeach;?>


                <div class="item-office" data-target="flag_BRASIL">
                    <div class="title">Academia Rio de Janeiro</div>
                </div>
                <div class="item-office" data-target="flag_GRA_BETANHA">
                    <div class="title">Academia Londres</div>
                </div>
                <div class="item-office" data-target="flag_JAMAICA">
                    <div class="title">Escritório Programa Comunidades Seguras</div>
                </div>
                <div class="item-office" data-target="flag_AFRICA_DO_SUL">
                    <div class="title">Escritório Programa Comunidades Seguras</div>
                </div>

            </div>
        </div>
    </div>
</div>