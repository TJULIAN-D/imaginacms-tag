<?php

namespace Modules\Tag\View\Components;

use Illuminate\View\Component;

class Tags extends Component
{
  public $item;
  public $view;
  public $layout;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($item, $layout = 'tags-layout-1')
  {
    $this->item = $item;
    $this->view = "tag::frontend.components.tags.layouts.{$layout}.index";

  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public
  function render()
  {
    return view($this->view);
  }
}


