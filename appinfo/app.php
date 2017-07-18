<?php

\OC::$server->getNavigationManager()->add(function () {
    $urlGenerator = \OC::$server->getURLGenerator();
    return [
        // the string under which your app will be referenced in owncloud
        'id' => 'testapp',

        // sorting weight for the navigation. The higher the number, the higher
        // will it be listed in the navigation
        'order' => 10,

        // the route that will be shown on startup
        'href' => $urlGenerator->linkToRoute('testapp.page.index'),

        // the icon that will be shown in the navigation
        // this file needs to exist in img/
        //'icon' => $urlGenerator->imagePath('testapp', 'app.svg'),

        // the title of your application. This will be used in the
        // navigation or on the settings page of your app
        'name' => \OC::$server->getL10N('testapp')->t('Test App'),
    ];
});
