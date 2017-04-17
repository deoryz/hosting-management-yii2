<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],

                    ['label' => 'Manage Invoice', 'icon' => 'shopping-cart', 'url' => ['/invoice/index']],
                    ['label' => 'Manage Hosting', 'icon' => 'cloud', 'url' => ['/hosting/index'], 'items' => [
                        ['label' => 'Service Hosting', 'icon' => 'film', 'url' => ['/hosting/index']],
                        ['label' => 'Hosting Package', 'icon' => 'archive', 'url' => ['/package/index']],
                        ['label' => 'Server Hosting', 'icon' => 'server', 'url' => ['/server/index']],
                    ]],
                    ['label' => 'Manage Domain', 'icon' => 'feed', 'url' => ['/domain/index'], 'items' => [
                        ['label' => 'Service Domain', 'icon' => 'globe', 'url' => ['/domain/index']],
                        ['label' => 'Domain TLD', 'icon' => 'plus-circle', 'url' => ['/tld/index']],
                        ['label' => 'Manage Registrar', 'icon' => 'registered', 'url' => ['/registrar/index']],
                    ]],
                    ['label' => 'Manage Customer', 'icon' => 'users', 'url' => ['/customer/index']],
                    ['label' => 'Manage Administrator', 'icon' => 'user-secret', 'url' => ['/administrator/index']],

                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    /*
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Same tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    */
                ],
            ]
        ) ?>

    </section>

</aside>
