<?php
namespace Xvideos\Components;
use Illuminate\Contracts\Config\Repository as Config;
use Illuminate\Contracts\View\Factory as View;
use Collective\Html\HtmlBuilder as CollectiveHtmlBuilder;
use Illuminate\Routing\UrlGenerator;


class HtmlBuilder extends CollectiveHtmlBuilder
{

    private $config;
    protected $view;
    protected $url;

    public function  __construct(Config $config, View $view, UrlGenerator $url)
    {

        $this->view = $view;
        $this->config = $config;
        $this->url= $url;
    }
    public function menu($items)
    {
        /*
         * Extiende la funcionalidad del menu que viene en CollectiveBuilder y los usmos como un metodo 'ara reemplazar
           .1  * el menu original que trae y lo hemos puesto dentro de una vista partials/menu.blade.php
         */

        if(!is_array($items))
        {
            $items = $this->config->get($items, array());
        }
        return $this->view->make('partials.menu', compact('items'));
        //return 'sdsdsd';
    }


    public function classes (array $classes)
    {
        $html = '';

        foreach ($classes as $name => $bool)
        {
            if(is_int($name))
            {
                $name = $bool;
                $bool = true;
            }
            if ($bool)
            {
                $html .= $name.' ';
            }
        }
        if (!empty($html))
        {
            return 'class="'.trim($html).'"';
        }

        return '';
    }
}