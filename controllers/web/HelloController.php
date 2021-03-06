<?php

namespace app\controllers\web;

use baseapi\web\PublicContentController as Controller;

class HelloController extends Controller {

    public function __construct($id, $module, $config = [])
    {
        /**
         * Setting this to app means that we can use our own templates in the templates folder instead of templates in the
         * base project in the vender folder.
         */
        $this->template_dir = "app";
        parent::__construct($id, $module, $config);
    }

    public function actionIndex() {
        return $this->renderTemplate("/hello/hello_world.twig",["greeting" => "Hello World"]);
    }

}