<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonModule for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendSkeletonModule\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use ZendSkeletonModule\Module;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {

        if (!$this->access(Module::ROLE_MANAGEMENT))
            return $this->redirect()->toRoute('not-authorized');

        return [];
    }
}