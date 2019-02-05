<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('main.css') ?>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <?= $this->Html->script('main.js') ?>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    <title>Luta Pela Paz</title>
  </head>
  <body>
    <?=$this->element('loading');?>
    <div class="global_Wrapper">
        <?=$this->element('header');?>
        <?=$this->fetch('content');?>
        <?=$this->element('footer');?>
    </div>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  </body>
</html>