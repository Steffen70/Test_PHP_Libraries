<?php
require 'vendor/autoload.php';

use Philo\Blade\Blade;
use YaLinqo\Enumerable;

class Promoter
{
    /**
     * @var String path to the component resources
     * @var Blade template engine instance
     */
    private $dev_resources;
    private $blade;

    public function __construct(string $dev_resources)
    {
        $this->dev_resources = $dev_resources;
        $this->blade = new Blade($dev_resources, __DIR__ . '/cache');
    }

    /**
     * @param String $view_name name of the component file
     * @param String $component_data the data required by the view template as JSON-string
     * @return String Rendered component as HTML-string
     */
    public function getRenderedComponent(string $view_name, string $component_data)
    {
        $data = json_decode($component_data);

        return $this->blade->view()
            ->make($view_name, get_object_vars($data))
            ->render();
    }
}
