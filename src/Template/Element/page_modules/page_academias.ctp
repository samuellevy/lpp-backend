<div class="section_pilares">
    <div class="wrapper">
        <h2>Nossos Pilares</h2>
        <div class="box">
            <div class="item" data-id="1">
                <div class="top"><?php echo $this->Html->image('Site.../images/academia-i-1.png');?>
                    <h3>Boxing & martial arts</h3>
                </div>
                <div class="bottom">
                    <p>These sports promote respect, discipline, self-control, feelings of belonging and self-esteem, and attract young people to join the programme.</p>
                </div>
            </div>
            <div class="item" data-id="2">
                <div class="top"><?php echo $this->Html->image('Site.../images/academia-i-2.png');?>
                    <h3>Education</h3>
                </div>
                <div class="bottom">
                    <p>Support and educational opportunities for young people who are outside formal learning environments or who have learning difficulties.</p>
                </div>
            </div>
            <div class="item" data-id="3">
                <div class="top"><?php echo $this->Html->image('Site.../images/academia-i-3.png');?>
                    <h3>Employability</h3>
                </div>
                <div class="bottom">
                    <p>Access to the job market via training, vocational courses, and referrals to job opportunities through a network of partners in the private sector.</p>
                </div>
            </div>
            <div class="item" data-id="4">
                <div class="top"><?php echo $this->Html->image('Site.../images/academia-i-4.png');?>
                    <h3>Support services</h3>
                </div>
                <div class="bottom">
                    <p>Services including individual and group mentoring, social and psychological support, medical and legal referrals, home visits and community outreach, all provided by our multidisciplinary team.</p>
                </div>
            </div>
            <div class="item" data-id="5">
                <div class="top"><?php echo $this->Html->image('Site.../images/academia-i-5.png');?>
                    <h3>Youth leadership</h3>
                </div>
                <div class="bottom">
                    <p>Development of youth leaders via Youth Councils who represent the organisation externally and liaise with staff on strategy and programme development.</p>
                </div>
            </div>
        </div>
        
        <div class="mobile-box">
            <div class="item">
                <div class="top" data-id="tabs-1"><?php echo $this->Html->image('Site.../images/boxe-mobile.png');?>
                    <h3>Boxing & martial arts</h3><?php echo $this->Html->image('Site.../images/arrow-mobile.png');?>
                </div>
                <div class="bottom" id="tabs-1">
                    <p>These sports promote respect, discipline, self-control, feelings of belonging and self-esteem, and attract young people to join the programme.</p>
                </div>
            </div>
            <div class="item">
                <div class="top" data-id="tabs-2"><?php echo $this->Html->image('Site.../images/educacao-mobile.png');?>
                    <h3>Education</h3><?php echo $this->Html->image('Site.../images/arrow-mobile.png');?>
                </div>
                <div class="bottom" id="tabs-2">
                    <p>Support and educational opportunities for young people who are outside formal learning environments or who have learning difficulties.</p>
                </div>
            </div>
            <div class="item">
                <div class="top" data-id="tabs-3"><?php echo $this->Html->image('Site.../images/empregabilidade-mobile.png');?>
                    <h3>Employability</h3><?php echo $this->Html->image('Site.../images/arrow-mobile.png');?>
                </div>
                <div class="bottom" id="tabs-3">
                    <p>Access to the job market via training, vocational courses, and referrals to job opportunities through a network of partners in the private sector.</p>
                </div>
            </div>
            <div class="item">
                <div class="top" data-id="tabs-4"><?php echo $this->Html->image('Site.../images/suportelocal-mobile.png');?>
                    <h3>Support services</h3><?php echo $this->Html->image('Site.../images/arrow-mobile.png');?>
                </div>
                <div class="bottom" id="tabs-4">
                    <p>Services including individual and group mentoring, social and psychological support, medical and legal referrals, home visits and community outreach, all provided by our multidisciplinary team.</p>
                </div>
            </div>
            <div class="item">
                <div class="top" data-id="tabs-5"><?php echo $this->Html->image('Site.../images/liderancajuvenil-mobile.png');?>
                    <h3>Youth leadership</h3><?php echo $this->Html->image('Site.../images/arrow-mobile.png');?>
                </div>
                <div class="bottom" id="tabs-5">
                    <p>Development of youth leaders via Youth Councils who represent the organisation externally and liaise with staff on strategy and programme development.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section_worth">
    <div class="wrapper">
        <div class="box">
            <div class="item_1">
                <p>Along with the Five Pillars, our approach is guided by five values which underpin all of the areas of our work.</p>
                <p>Our Academies serve young people in the communities in which they are located, and also systemise and codify programmes so that they become training centres for partner organisations in the Fight for Peace Alliance. In addition, they create local partnerships in order to provide additional services not provided by the key areas of the Five Pillars methodology.</p>
                <p>Our Academies develop and implement innovative programmes and pilot projects, all based on our methodology, with the aim of delivering support for young people’s personal development.</p>
            </div>
            <div class="item_2">
                <h4>Our values</h4><?php echo $this->Html->image('Site.../images/abraco.png');?><span>Embracing</span>
                <p>We believe in a society without exclusion. Everyone is welcome.</p><?php echo $this->Html->image('Site.../images/coragem.png');?><span>Courage</span>
                <p>We work where there is need and are proud to stand up for peace.</p><?php echo $this->Html->image('Site.../images/solidariedade.png');?><span>Solidarity</span>
                <p>We work in unity across our staff, young people and the community.</p><?php echo $this->Html->image('Site.../images/inspiracao.png');?><span>Inspiring</span>
                <p>We aim to inspire our young people and be inspired by them.</p><?php echo $this->Html->image('Site.../images/campeao.png');?><span>Champion</span>
                <p>We work with pragmatism and preparedness to be the best in all we do.</p>
            </div>
        </div>
    </div>
</div>

<?=$this->element('page_modules/block_programs');?>
<?=$this->element('page_modules/block_programs_mobile');?>