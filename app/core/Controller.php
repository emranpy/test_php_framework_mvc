<?php

/**
 * Class Controller
 *
 * Base controller class responsible for rendering views.
 * All other controllers should extend this class to gain access to the `view()` method.
 */
class Controller {

    /**
     * Loads and displays the specified view file.
     *
     * If the given view file does not exist, it will load a fallback 404 view.
     *
     * @param string $file The name of the view file (without extension or path).
     * @return void
     */
    public function view($file) {
        $path = __DIR__ . '/../../app/views/';
        $fileName = $path . $file . '.view.php';

        if (file_exists($fileName)) {
            require $fileName;
        } else {
            $fileName = $path . '404.view.php';
            require $fileName;
        }
    }
}
