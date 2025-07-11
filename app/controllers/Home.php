<?php

/**
 * Class Home
 *
 * The Home controller extends the base Controller and handles default routes.
 * It uses the Database and Model traits to perform database operations.
 */
class Home extends Controller
{
    use Database;
    use Model;

    /**
     * Default method for the Home controller.
     *
     * Loads the "home" view. Accepts up to four optional URL parameters.
     *
     * @return void
     */
    public function index()
    {
       //index method Mod default
        $this->view("home");
       
    }

    /**
     * Sample edit method.
     *
     * This could be used to render an edit page or process edit logic.
     *
     * @return void
     */
    public function edit()
    {
        echo "this is edit function";
    }
}
