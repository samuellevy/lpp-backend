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
    <title>Cedae Saúde - <?=isset($page_title)?$page_title:'';?></title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132336807-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-132336807-1');
    </script>
</head>
<body>
    <div class="loading">
        <div class="lds-ellipsis" style="width:100%;height:100%;">
            <div>
                <div></div>
            </div>
            <div>
                <div></div>
            </div>
            <div>
                <div></div>
            </div>
            <div>
                <div></div>
            </div>
            <div>
                <div></div>
            </div>
        </div>
    </div>
    <div class="global_Wrapper">
        <header id="header">
            <div class="wrapper">
                <div class="menu">
                    <div class="logo">
                        <a href="/"><?=$this->Html->image('Site.../images/logo.png');?></a>
                    </div>
                    <div class="item">
                        <?=$this->element('nav');?>
                    </div>
                </div>
            </div>
        </header>
        <!-- Content -->
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
        <!-- End content -->
        <?= $this->element('footer');?>
    </div>
</body>
</html>
