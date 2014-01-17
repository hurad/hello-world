<?php

/**
 * Class HelloController
 */
class HelloController extends HelloWorldAppController
{

    var $name = 'Hello';

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow();
    }

    public function admin_index()
    {
        $this->set('title_for_layout', __d('hello_world', 'Hello World'));
    }
}
