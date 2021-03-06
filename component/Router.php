<?php


class Router
{
    private $routes;

    public function __construct()
    {
        $routePach = ROOT. '/config/routes.php';
        $this->routes = include($routePach);
    }

    private function getURI(){
        // Получаю строку запроса
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        $url = $this->getURI();

        // Проверяю наличие такой строки в роут
        foreach ($this->routes as $urlPattern => $path) {
            //echo "<br> $urlPattern => $path";

            //Сравниваем Строку запроса $urlPattern и $url
                 if (preg_match("~$urlPattern~", $url)) {

                     $Internalroute = preg_replace("~$urlPattern~", $path, $url); // ищем параметры в строке запроса

                     $segments = explode('/', $Internalroute);

                     $controllerName = array_shift($segments) . 'Controller'; // Получаем имя контроллера и вставляем к нему приставку
                     $controllerName = ucfirst($controllerName); // Делаем первую букву заглавной

                     $actionName = 'action' . ucfirst(array_shift($segments));
                     $parametrs = $segments; // массив с параметрами

                //подключаем файл класса контроллера
                $controllerFile = ROOT . '/controller/' . $controllerName . '.php';
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }
                     //Создаем экземпляр класса
                     $controllerObject = new $controllerName;

                $result = call_user_func_array(array($controllerObject, $actionName), $parametrs);

                if ($result != null) {
                    break; // обрываем цепочку поиска
                }
            }
        }
    }


}