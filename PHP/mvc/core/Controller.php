<?php
class Controller
{
    public function model($modelName = '')
    {
        $pathModelFile = _DIR_ROOT . '/app/models/' . $modelName . '.php';
        if (file_exists($pathModelFile)) {
            require_once $pathModelFile;
            if (class_exists($modelName)) {
                return new $modelName();
            }
        }
        return null;
    }

    public function render($view = '', $data = [])
    {
        // Transform array keys to variables
        extract($data);

        $viewFilePath = _DIR_ROOT . '/app/views/' . $view . '.php';
        if (file_exists($viewFilePath)) {
            require_once $viewFilePath;
        }
    }
}
