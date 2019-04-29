<div class="programs">
    <div class="wrapper">
        <div class="box">
            <div class="item">
                <div class="media"><?php echo $this->Html->image('Site.../images/media_programs.png');?></div>
            </div>
            <div class="item">
                <div class="text">
                    <h4 class="red">Academies</h4>
                    <p>Our Academies in Rio de Janeiro and London bring together all of Fight for Peace’s methodological elements in one place. Primary, secondary and tertiary violence prevention projects are implemented with our programmes using the Five Pillars methodology, combined with Personal Development and our Theory of Change. Our services are adapted to combine the options and influences that individuals need to deal with multi-causal problems and multiple risk factors.</p><a href="/academias">Saiba mais sobre as academias</a>
                </div>
            </div>
        </div>
        <div class="box inverter">
            <div class="item">
                <div class="media"><?php echo $this->Html->image('Site.../images/alianca.png');?></div>
            </div>
            <div class="item">
                <div class="text">
                    <h4 class="blue">Fight for Peace Alliance</h4>
                    <p>The Fight for Peace Alliance is an ongoing community of practice for organisations that have been trained in our methodology and that believe in the power of combining combat sports with education and personal development to support young people to realise their potential. Since 2011, we have trained over 160 organisations from 25 countries around the world.</p>
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
                        <h4 class="green">Safer Communities </br>Programmes - Jamaica</h4>
                        <p>Since 2015, Fight for Peace has been implementing a Safer Communities Programme (SCP) in Kingston, Jamaica, teaming up with with local partners, governments, international agencies, donors and the private sector to bring positive change to communities affected by crime and violence.</p>                   
                    </div>
                </div>
            </div>
            <div class="item_slider">
                <div class="item">
                    <div class="media"><?php echo $this->Html->image('Site.../images/jamaica1.png');?></div>
                </div>
                <div class="item">
                    <div class="text">
                        <h4 class="green">Safer Communities </br>Programmes - Jamaica</h4>
                        <p>All Safer Communities Programme activities and partnerships are aligned to a shared agenda, employ shared metrics and are based on a shared Theory of Change. Activities are delivered to all young people, aged 7-29, living in communities affected by violence, including a focus on those young people who are the most entrenched and involved in violence.</p>                  
                    </div>
                </div>
            </div>
            <div class="item_slider">
                <div class="item">
                    <div class="media"><?php echo $this->Html->image('Site.../images/jamaica2.png');?></div>
                </div>
                <div class="item">
                    <div class="text">
                    <h4 class="green">Safer Communities </br>Programmes - South Africa</h4>
                        <p>Since 2016, Fight for Peace has been implementing a Safer Communities Programme (SCP) in Cape Town, South Africa, teaming up with with local partners, governments, international agencies, donors and the private sector to bring positive change to communities affected by crime and violence.</p>
                    </div>
                </div>
            </div>
            <div class="item_slider">
                <div class="item">
                    <div class="media"><?php echo $this->Html->image('Site.../images/jamaica3.png');?></div>
                </div>
                <div class="item">
                    <div class="text">
                    <h4 class="green">Safer Communities </br>Programmes - South Africa</h4>
                        <p>All Safer Communities Programme activities and partnerships are aligned to a shared agenda, employ shared metrics and are based on a shared Theory of Change. Activities are delivered to all young people, aged 7-29, living in communities affected by violence, including a focus on those young people who are the most entrenched and involved in violence.</p>
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