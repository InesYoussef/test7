<?php

namespace Maxime\Helloworld\Controller\Index;
class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        echo 'Execute Action Say_Hello OK';
        die();
    }
}
