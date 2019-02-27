<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <?= $this->Html->meta('icon') ?>
  <?= $this->Html->css('main.css?'.uniqid(rand(), true)) ?>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <?= $this->Html->script('main.js?'.uniqid(rand(), true)) ?>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
  <title>Luta Pela Paz</title>
  
  <meta property="og:url"           content="http://fightforpeace.net/pt-br/" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="<?=isset($general_info['title'])?$general_info['title']:'';?>Fight For Peace" />
  <meta property="og:description"   content="<?=isset($general_info['description'])?$general_info['description']:'A Luta pela Paz é uma organização internacional sem fins lucrativos que tem como missão realizar o potencial de jovens trabalhando com eles pela prevenção da violência nas comunidades em que vivem.';?>" />
  <meta property="og:image"         content="<?=isset($general_info['image'])?$general_info['image']:'';?>" />

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
</head>
<body>
  <?=$this->element('loading');?>
  <div class="global_Wrapper">
    <?=$this->element('header');?>
    <?=$this->fetch('content');?>
    <?=$this->element('footer');?>
  </div>

</body>
</html>