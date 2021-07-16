<?php
use yii\bootstrap\Nav;

?>
<aside class="main-sidebar">

    <section class="sidebar">

        

        <?=
        Nav::widget(
            [
                'encodeLabels' => false,
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    '<li class="header">Menu Yii2</li>',
                    ['label' => '<i class="fa fa-copyright"></i><span>Categorias</span>', 'url' => ['/categorias']],
                    ['label' => '<i class="fa fa-users"></i><span>Clientes</span>', 'url' => ['/clientes']],
                    ['label' => '<i class="fa fa-dropbox"></i><span>Produtos</span>', 'url' => ['/produtos']],
                    [
                        'label' => '<i class="glyphicon glyphicon-lock"></i><span>Sing in</span>', //for basic
                        'url' => ['/site/login'],
                        'visible' =>Yii::$app->user->isGuest
                    ],
                ],
            ]
        );
        ?>

        

    </section>

</aside>
