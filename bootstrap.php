<?php
define('APPLICATON_PATH', __DIR__);
define('PUBLIC_PATH', APPLICATON_PATH.DIRECTORY_SEPARATOR.'public');

use library\Dic;
class Bootstrap
{
    public function run()
    {
        $useCase = Dic::getUseCase();
        $useCase->prepare();
        $useCase->display();
    }



}