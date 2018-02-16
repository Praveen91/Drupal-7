<?php
/**
 * Created by PhpStorm.
 * User: praveen
 * Date: 31/8/17
 * Time: 6:46 PM
 */

namespace Drupal\mymodule\Views\Handlers\Area;


class MyCoolHandler extends \views_handler_area {

  function render($empty = FALSE) {
    return 'this is mty cool results';
  }

}