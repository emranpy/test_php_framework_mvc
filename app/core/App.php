<?php

/**
 * Class App
 * Handles routing by loading the appropriate controller and method
 * based on the URL parameter.
 *
 * Example: 
 *  /home/index        → Home@index()
 *  /user/show/5       → User@show(5)
 *  /invalid/path      → _404@index()
 */
class App
{
    /**
     * Default controller
     * @var string
     */
    private $controller = "Home";

    /**
     * Default method
     * @var string
     */
    private $method = "index";

    /**
     * URL parts after exploding
     * @return array
     */
    private function separator()
    {
        $url = $_GET['url'] ?? "home";
        return explode("/", trim($url, "/"));
    }

    /**
     * Loads controller and method from the URL.
     * Example URL: /user/edit/5
     * Loads controller: User
     * Calls method: edit(5)
     */
    public function loadController()
    {
        $urlParts = $this->separator();
        $controllerName = ucfirst($urlParts[0] ?? 'Home');
        $controllerPath = __DIR__ . "/../../app/controllers/{$controllerName}.php";

        // Load controller or fallback to _404
        if (file_exists($controllerPath)) {
            require $controllerPath;
            $this->controller = $controllerName;
        } else {
            require __DIR__ . "/../../app/controllers/_404.php";
            $this->controller = "_404";
        }

        // Instantiate controller
        $controllerObject = new $this->controller;

        // Determine method (with fallback to 'index')
        $methodName = $urlParts[1] ?? 'index';
        if (method_exists($controllerObject, $methodName)) {
            $this->method = $methodName;
        } else {
            $this->method = 'index';
        }

        // Collect any URL parameters after method
        $params = array_slice($urlParts, 2);

        // Call the controller method with params
        call_user_func_array([$controllerObject, $this->method], $params);
    }
}
