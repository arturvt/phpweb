<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 6/9/14
 * Time: 4:20 PM
 */

abstract class baseController {

    /*
     * @registry object
     *
     */
    protected $registry;

    function __construct($registry) {
        $this->registry = $registry;
    }

    /**
     * @all controllers must contain an index method
     */
    abstract function index();

}

// When
class indexController extends baseController {
    public function index() {
        /**** set a template variable ****/
        $this->registry->template->welcome = "Welcome to PHP MVC test";

        /**** load the index template ***/
        $this->registry->template->show('index');
    }
}

class blogController extends baseController {

    public function index() {
        $this->registry->template->blog_heading = "This is the blog index";
        $this->registry->template->show("blog_index");
    }

    public function view() {
        $this->registry->template->blog_heading = "This is the blog heading";
        $this->registry->template->blog_content = "This is the blog content";
        $this->registry->template->show("blog_view");
    }
}