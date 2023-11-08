<?php
require_once('classes.php');
require_once('Validator.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $required_fields_book = ['name', 'surname', 'title', 'price', 'page'];
    $required_fields_cd = ['name', 'surname', 'title', 'price', 'volume'];
    $errors = Validator::emptyField($errors, 'type', $required_fields_book, $required_fields_cd);
    
 
        
        if(!isset($errors['type']) && $_POST['type'] === "Book"){
            
            
            if(!isset($errors['price'])){
                $errors = Validator::floatField($errors, 'price');
                
            }
            if(!isset($errors['page'])){
                $errors = Validator::intField($errors, 'page');
                
            }
            if(empty($errors)){
                $product = new BookProduct($_POST['title'], $_POST['name'], $_POST['surname'],  $_POST['price'], $_POST['page']);
                
                $product->actionCreate($pdo);
            }
            
        }elseif((!isset($errors['type']) && $_POST['type'] === "Cd")){
            
            if(!isset($errors['price'])){               
                $errors = Validator::floatField($errors, 'price');
            }
            if(!isset($errors['volume'])){
                $errors = Validator::floatField($errors, 'volume');
                if(empty($errors)){
                    $product = new CdProduct($_POST['title'], $_POST['name'], $_POST['surname'],  $_POST['price'], $_POST['volume']);
                    
                    $product->actionCreate($pdo);
                }
            }
        }
        
        
    }
    

    print($layout = include_template('add.php', [
    ]));
    if(!empty($errors)){
        print_r('Ошибка');
    }

    // function getPostVal($name): string
    // {
    //         return $_POST[$name] ?? "";
    // }
       
    

