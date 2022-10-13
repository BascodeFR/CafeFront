<?php
namespace Bascodefr\Cafe\Router;

use AltoRouter;

class Router {

    private $router;
    
    public function __construct()
    {
        $this->router = new AltoRouter();
    }

    public function get(string $route, string $view, string $name = null): self {
        $this->router->map('GET', $route, $view, $name);
        return $this;
    }

    public function post(string $route, string $view, string $name = null): self {
        $this->router->map('POST', $route, $view, $name);
        return $this;
    }

    public function run() {
        $match = $this->router->match();
        if( is_array($match)) {
            $view = $match['target'];
            return require dirname(__DIR__, 2) . "/" . $view . ".php";

        } else {
            // no route was matched
            echo "<h1>404 Not Found</h1>";
            header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        }
    }
}