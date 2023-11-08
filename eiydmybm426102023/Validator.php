<?php
require_once('classes.php');
class Validator{
    public static function emptyField(array $errors, string $field, array $fieldBook, array $fieldCd ):array{  
            if (empty($_POST[$field])) {
                $errors[$field] = 'Поле не заполнено';
            }elseif($_POST[$field] == 'Book'){
                foreach ($fieldBook as $field) {
                    if (empty($_POST[$field])) {
                        $errors[$field] = 'Поле не заполнено';
                
                    } 
                }    
            }elseif($_POST[$field] == 'Cd'){
                foreach ($fieldCd as $field) {
                    if (empty($_POST[$field])) {
                        $errors[$field] = 'Поле не заполнено';
                
                    } 
                } 
            }
            return $errors;
    }


    public static function floatField(array $errors, string $field):array{
            if (!filter_var($_POST[$field], FILTER_VALIDATE_FLOAT)) {
                
                $errors[$field] = 'Не число';
            } 
            
    return $errors;
    }
    public static function intField(array $errors, string $field):array{
        if (!filter_var($_POST[$field], FILTER_VALIDATE_INT)) {
            
            $errors[$field] = 'Не число';
        } 
        
return $errors;
}
}