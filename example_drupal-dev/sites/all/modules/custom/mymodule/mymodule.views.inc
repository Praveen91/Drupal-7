<?php


function mymodule_views_data() {
	return [
       'views' => [
          'mymodule' => [
              'title' => t('My Custom Area'),
              'help' => t('Makes a cool api request and somthing'),
              'area' => [
                 'handler' => 'Drupal\mymodule\Views\Handlers\Area\MyCoolHandler'
                ]
          ]
       ]
	];
}