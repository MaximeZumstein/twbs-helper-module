<?php

// Documentation test config file for "Components / Navbar / Placement" part
return [
    'title' => 'Placement',
    'url' => '%bootstrap-url%/components/navbar/#placement',
    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {

        foreach ([
            false => 'Default',
            'fixed-top' => 'Fixed top',
            'fixed-bottom' => 'Fixed bottom',
            'sticky-top' => 'Sticky top',
        ] as $sPlacement => $sBrand) {
            echo $oView->navigation()->navbar()->render(
                new \Zend\Navigation\Navigation(),
                [
                    'brand' => $sBrand,
                    'placement' => $sPlacement,
                    'toggler' => false,
                    'expand' => false,
                ]
            );
            echo PHP_EOL . '<br>' . PHP_EOL;
        }
    },
    'expected' => '<nav class="bg-light&#x20;navbar&#x20;navbar-light">' . PHP_EOL .
        '    <a href="&#x23;" class="navbar-brand">Default</a>' . PHP_EOL .
        '</nav>' . PHP_EOL .
        '<br>' . PHP_EOL .
        '<nav class="bg-light&#x20;fixed-top&#x20;navbar&#x20;navbar-light">' . PHP_EOL .
        '    <a href="&#x23;" class="navbar-brand">Fixed top</a>' . PHP_EOL .
        '</nav>' . PHP_EOL .
        '<br>' . PHP_EOL .
        '<nav class="bg-light&#x20;fixed-bottom&#x20;navbar&#x20;navbar-light">' . PHP_EOL .
        '    <a href="&#x23;" class="navbar-brand">Fixed bottom</a>' . PHP_EOL .
        '</nav>' . PHP_EOL .
        '<br>' . PHP_EOL .
        '<nav class="bg-light&#x20;navbar&#x20;navbar-light&#x20;sticky-top">' . PHP_EOL .
        '    <a href="&#x23;" class="navbar-brand">Sticky top</a>' . PHP_EOL .
        '</nav>' . PHP_EOL .
        '<br>' . PHP_EOL,
];
