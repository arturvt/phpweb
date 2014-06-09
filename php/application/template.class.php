<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 6/9/14
 * Time: 5:20 PM
 */

class Template {
    /**
     * The registry
     * @access private
     *
     */
    private $registry;

    /**
     * @variables array
     * @access private
     * */
    private $vars=array();

    /*
     *
     * @constructor
     *
     * @access public
     *
     * @return void
     *
     */
    function __construct($registry) {
        $this->registry = $registry;

    }

    /**
     *
     * @set undefined vars
     *
     * @param string $index
     *
     * @param mixed $value
     *
     * @return void
     *
     */
    public function __set($index, $value)
    {
        $this->vars[$index] = $value;
    }

    function show($name) {
        $path = __SITE_PATH . '/views' . '/' . $name . 'php';
        if (file_exists($path) == false) {
            throw new Exception('Template not found in '.$path);
            return false;
        }

        //load variables
        foreach ($this->vars as $key => $value)
        {
            // the double dollar sign means that we're creating another variable using the keys value. Amazing!
            $$key = $value;
        }
    }
} 