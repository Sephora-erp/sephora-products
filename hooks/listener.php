<?php

class productsHook{
    
    /*
     * This function is called when the hook is fired
     * 
     * @param {String} $action - The action name to fire
     * @param {Object} $object - The data to pass to the hook
     */
    public function fireEvent($action, $object){
        if($action == 'headerCss'){
            echo '<link rel="stylesheet" href="'.URL::to('/').'/../app/modules/customers/public/customers.css">';
        }
    }
}