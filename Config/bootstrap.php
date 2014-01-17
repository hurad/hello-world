<?php

HuradNavigation::addSubMenu(
    'dashboard',
    'hello_world',
    __d('hello_world', 'Hello World'),
    ['admin' => true, 'plugin' => 'hello_world', 'controller' => 'hello'],
    'manage_options'
);
