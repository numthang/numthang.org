<?php namespace Cms\Classes;

use ArrayAccess;
use October\Rain\Extension\Extendable;

/**
 * CodeBase is a parent class for PHP classes created for layout and page code sections.
 *
 * @package october\cms
 * @author Alexey Bobkov, Samuel Georges
 */
class CodeBase extends Extendable implements ArrayAccess
{
    /**
     * @var \Cms\Classes\Page page object
     */
    public $page;

    /**
     * @var \Cms\Classes\Layout layout object
     */
    public $layout;

    /**
     * @var \Cms\Classes\controller controller object
     */
    public $controller;

    /**
     * @var array vars is a list of variables passed to the page.
     */
    public $vars = [];

    /**
     * __construct the object instance.
     * @param \Cms\Classes\Page $page Specifies the CMS page.
     * @param \Cms\Classes\Layout $layout Specifies the CMS layout.
     * @param \Cms\Classes\Controller $controller Specifies the CMS controller.
     */
    public function __construct($page, $layout, $controller)
    {
        $this->page = $page;
        $this->layout = $layout;
        $this->controller = $controller;

        parent::__construct();
    }

    /**
     * onInit is triggered when all components are initialized and before AJAX is handled.
     * The layout's onInit method triggers before the page's onInit method.
     */
    public function onInit()
    {
    }

    /**
     * onStart is triggered in the beginning of the execution cycle.
     * The layout's onStart method triggers before the page's onStart method.
     */
    public function onStart()
    {
    }

    /**
     * onEnd is triggered in the end of the execution cycle, but before the page is displayed.
     * The layout's onEnd method triggers after the page's onEnd method.
     */
    public function onEnd()
    {
    }

    /**
     * offsetExists implementation
     */
    public function offsetExists($offset): bool
    {
        return isset($this->controller->vars[$offset]);
    }

    /**
     * offsetSet implementation
     */
    public function offsetSet($offset, $value): void
    {
        $this->controller->vars[$offset] = $this->vars[$offset] = $value;
    }

    /**
     * offsetUnset implementation
     */
    public function offsetUnset($offset): void
    {
        unset($this->controller->vars[$offset]);
    }

    /**
     * offsetGet implementation
     */
    public function offsetGet($offset): mixed
    {
        return $this->controller->vars[$offset] ?? null;
    }

    /**
     * __call dynamically handles calls to this classes behaviors, the page and layout
     * object methods, and finally the controller instance.
     * @param string $method
     * @param array $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        if ($this->methodExists($method)) {
            return $this->$method(...$parameters);
        }

        if (($pageObj = $this->controller->getPageObject()) && $pageObj !== $this && $pageObj->methodExists($method)) {
            return $pageObj->$method(...$parameters);
        }

        if (($layoutObj = $this->controller->getLayoutObject()) && $layoutObj !== $this && $layoutObj->methodExists($method)) {
            return $layoutObj->$method(...$parameters);
        }

        return $this->controller->$method(...$parameters);
    }

    /**
     * __get is referenced as $this->page in Cms\Classes\ComponentBase,
     * so to avoid $this->page->page this method will proxy there. This is also
     * used as a helper for accessing controller variables/components easier
     * in the page code, eg. $this->foo instead of $this['foo']
     * @param  string  $name
     * @return void
     */
    public function __get($name)
    {
        if (isset($this->page->components[$name]) || isset($this->layout->components[$name])) {
            return $this[$name];
        }

        if (($value = $this->page->{$name}) !== null) {
            return $value;
        }

        if (array_key_exists($name, $this->controller->vars)) {
            return $this[$name];
        }

        return null;
    }

    /**
     * __set a property on the CMS Page object.
     * @param  string  $name
     * @param  mixed   $value
     * @return void
     */
    public function __set($name, $value)
    {
        return $this->page->{$name} = $value;
    }

    /**
     * __isset checks if a property is set on the CMS Page object.
     * @param string $name
     * @return bool
     */
    public function __isset($name)
    {
        if (isset($this->page->components[$name]) || isset($this->layout->components[$name])) {
            return true;
        }

        if (isset($this->page->{$name})) {
            return true;
        }

        return array_key_exists($name, $this->controller->vars);
    }
}
