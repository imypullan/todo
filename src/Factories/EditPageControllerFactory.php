<?php
namespace App\Factories;
use App\Controllers\EditPageController;
use Psr\Container\ContainerInterface;
class EditPageControllerFactory {
    public function __invoke(ContainerInterface $container): EditPageController
    {
        $model = $container->get('TasksModel');
        $view = $container->get('renderer');
        return new EditPageController($model, $view);
    }
}