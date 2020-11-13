<?php

require ('./config/validate.php');
require ('./models/registerModel.php');

class registerController 
{

    public function validate($postData){

        // validate inputs
        $validation = new validate;
        $validated = $validation->doValidation($postData);
        
        if(is_array($validated)){
            // if we have errors
            var_dump($validated);

        }else{
           return $this->doRegister($postData);
        }

    }

    protected function doRegister($postData){
           // pass register
           return $register = registerModel::doRegister($postData);

    }
    
}
