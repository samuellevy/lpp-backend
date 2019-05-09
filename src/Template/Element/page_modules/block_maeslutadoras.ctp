<div class="content_maes" ondragstart="return false;" ondrop="return false;">
    <div class="scenes">
        <section class="scene introduction_container" data-scene="0">
            <div class="box_introduction">
                <div class="introduction_content">
                    <h4>Mães Lutadoras</h4>
                    <p>O <strong>Dia das Mães</strong> está chegando e nós queremos te ajudar a mostrar para o mundo que sua mãe é uma verdadeira lutadora. Aqui você poderá criar um cartão para homenageá-la. É muito rápido e fácil. Vamos lá?</p><a class="nextScene" id="start" href="#"><span>Começar</span></a>
                </div>
            </div>
        </section>
        <div class="click-mobile"><img src="<?=$this->Url->image('Site.../images/button-mobile.png');?>" alt=""></div>
        <div class="bg-mobile">
            <div class="bg"></div>
        </div>
        <section class="scene choose_model_container" data-scene="1">
            <div class="box-wrap">
                <div class="box_choose_model">
                    <div class="title">
                        <h4>escolha o modelo</h4>
                    </div>
                    <div class="description"><span>Pra começar, escolha qual dos dois modelos<br/> é mais parecido com a sua mãe.</span><img src="<?=$this->Url->image('Site.../images/interrogation-dot.png');?>" alt=""></div>
                </div>
                <div class="mother-choose">
                    <div class="content">
                        <div id="mother1"><a class="chooseModelBtn" href="#" data-model="a"> <img src="<?=$this->Url->image('Site.../images/mother01.png');?>" alt=""><span>É esse!</span></a></div>
                        <div id="mother2"> <a class="chooseModelBtn" href="#" data-model="b"><img src="<?=$this->Url->image('Site.../images/mother02.png');?>" alt=""><span>É esse!</span></a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="scene scene-choose-file" data-scene="2">
            <div class="box-choose-file">
                <div class="box-wrap">
                    <div class="media">
                        <img class="model-doll" src="<?=$this->Url->image('Site.../images/diadasmaes/model-a.png');?>" alt="" style="width:519px;" data-model="a">
                        <img class="model-doll" src="<?=$this->Url->image('Site.../images/diadasmaes/model-b.png');?>" alt="" style="width:519px;" data-model="b">
                    </div>
                    <div class="text">
                        <p>Envie uma foto de sua rainha. Mas atenção, importante que seja uma foto de rosto, para que se encaixe direitinho no cartão, ok?</p><a><span class="btnChoseImage">Escolher arquivo</span>
                            <input id="uploadedImage" type="file"></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="scene setSize" data-scene="3">
                <div class="work-tools">
                    <div class="decrease">-</div>
                    <div class="increase">+</div>
                    <div class="merge">pronto</div>
                </div>
                <div class="box-wrap">
                    <canvas id="canvas_temp" width="530" height="531"></canvas>
                    <canvas id="canvas" width="530" height="531"></canvas>
                    <div class="work-container">
                        <div class="work-box" id="work-box">
                            <img class="preview" id="preview" src="" alt="">
                            <img class="mask" id="mask_a" src="<?=$this->Url->image('Site.../images/diadasmaes/mask-a.png');?>">
                            <img class="mask" id="mask_b" src="<?=$this->Url->image('Site.../images/diadasmaes/mask-b.png');?>">
                            <img id="mask" src="<?=$this->Url->image('Site.../images/diadasmaes/mask.png');?>">
                            
                            <img class="image-mask" id="image-mask-a" src="<?=$this->Url->image('Site.../images/diadasmaes/new-mask-a.png');?>">
                            <img class="image-mask" id="image-mask-b" src="<?=$this->Url->image('Site.../images/diadasmaes/new-mask-b.png');?>">
                            <img id="image-mask" src="<?=$this->Url->image('Site.../images/diadasmaes/new-mask-black.png');?>">
                            <div class="description">use a barra abaixo <br/>para ajustar a foto no cartão</div>
                        </div>
                        <div class="box-ranger">
                            <input id="rangeSelector" type="range" min="120" max="600" value="400">
                        </div><a id="sendScene"><span>Assim!</span></a>
                    </div>
                </div>
            </section>
            <section class="scene box-card-ready" data-scene="4">
                <div class="mobile">
                    <h4>seu cartão está pronto!</h4>
                </div>
                <div class="box-wrap">
                    <div class="media">
                        <img id="finalImage" src="<?=$this->Url->image('Site.../images/mother2-choose.png');?>" alt="">
                    </div>
                    <div class="text">
                        <h4>seu cartão está pronto!</h4>
                        <p>Agora é só salvar e compartilhar pra todo mundo ver. Ah, não se esqueça de usar a hashtag <strong>#MãesLutadoras</strong> ;)</p><a id="saveFile" href="" download="Minha-Mae.png"><span>clique aqui para salvar</span></a>
                        <p>Aproveite e conheça um pouco mais sobre a Luta Pela Paz navegando pelo site.</p>
                    </div>
                </div>
            </section>
            <div class="box-steps">
                <div class="steps-content">
                    <div class="passo">
                        <p>Passo 1</p>
                        <div class="bar"><span></span></div>
                    </div>
                    <div class="passo">
                        <p>Passo 2</p>
                        <div class="bar"><span></span></div>
                    </div>
                    <div class="passo">
                        <p>Passo 3</p>
                        <div class="bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>