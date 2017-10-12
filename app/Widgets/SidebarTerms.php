<?php

namespace App\Widgets;

use App\Term;
use Arrilot\Widgets\AbstractWidget;

class SidebarTerms extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $allTerms = Term::all(); //получение всех категорий

        return view('widgets.sidebar_terms', [
            'config' => $this->config,
            'allTerms' => $allTerms,
        ]);
    }
}
