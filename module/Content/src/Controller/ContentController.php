<?php
namespace Content\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class ContentController extends AbstractActionController
{
    public function indexAction()
    {
        $action = $this->params()->fromRoute('action', '');
        $id = $this->params()->fromRoute('id', 0);
        
    }

    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
}
