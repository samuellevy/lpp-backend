<header id="header" class="<?=isset($conf_active)?$conf_active:'';?>">
<div class="wrapper">
    <div class="menu">
    <div class="logo">
        <a href='/'><?=$this->Html->image('Site.../images/logo.png');?></a>
    </div>
    <?=$this->element('nav');?>
    </div>
</div>
</header>