<?php

require_once('Validator.php');
require_once('helpers.php');

try {
    $dsn = "mysql:host=localhost;dbname=lol;charset=UTF8";
    $pdo = new PDO($dsn, 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Невозможно подключиться к серверу баз данных: ' . $e->getMessage();
}




class ShopProduct
{
    public function __construct(private string $title, private string $authorFirstName, private string $authorMainName, private float $price)
    {

    }
    public function getShopTitle(): string
    {
        return $this->title;
    }
    public function getShopAuthorFirstName(): string
    {
        return $this->authorFirstName;
    }

    public function getShopAuthorMainName(): string
    {
        return $this->authorMainName;
    }

    public function getShopPrice(): float
    {
        return $this->price;
    }

    public function setShopTitle(string $title): void
    {
        $this->title = $title;
    }
    public function setShopAuthorFirstName(string $authorFirstName): void
    {
        $this->authorFirstName = $authorFirstName;
    }

    public function setShopAuthorMainName(string $authorMainName): void
    {
        $this->authorMainName = $authorMainName;
    }

    public function setShopPrice(float $price): void
    {
        $this->price = $price;
    }

    public function actionCreate(PDO $pdo): void
    {
        try {
            $stmt = $pdo->prepare("INSERT INTO ShopProduct(title, authorFirstName, authorMainName, price) VALUES (?, ?, ?, ?)");
            $stmt->execute([$this->title, $this->authorFirstName, $this->authorMainName, $this->price]);
        } catch (PDOException $e) {
            echo 'Невозможно подключиться к серверу баз данных: ' . $e->getMessage();
        }

    }

    // public static function find(int $id, PDO $pdo): bool
    // {
    //     try {
    //         $stmt = $pdo->prepare("SELECT * FROM ShopProduct WHERE id = ?");
    //         $stmt->execute([$id]);
    //         $product = $stmt->fetch(PDO::FETCH_ASSOC);
    //         if (!$product) {
    //             return false;
    //         } else {
    //             return true;
    //         }
    //     } catch (PDOException $e) {
    //         echo 'Невозможно подключиться к серверу баз данных: ' . $e->getMessage();
    //     }
    // }

    public static function actionView(PDO $pdo): array
    {

        try {
            $stmt = $pdo->prepare("SELECT title, authorFirstName, authorMainName, price  FROM ShopProduct");
            $stmt->execute();
            $product = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $product;
        } catch (PDOException $e) {
            echo 'Невозможно подключиться к серверу баз данных: ' . $e->getMessage();
        }
    }


    // function actionUpdate(int $id, PDO $pdo): void
    // {
    //     if (!$this->find($id, $pdo))
    //         throw new Exception("Такой записи нет, невозможно изменить!");
    //     else {
    //         $stmt = $pdo->prepare("UPDATE ShopProduct SET title = ?,  authorFirstName = ?, authorMainName = ?, price = ? WHERE id = ?");
    //         $stmt->execute([$this->title, $this->authorFirstName, $this->authorMainName, $this->price, $id]);
    //     }


    // }

    public static function actionDelete(int $id, PDO $pdo): void
    {
        try {

            $stmt = $pdo->prepare("DELETE FROM ShopProduct WHERE id = ?");
            $stmt->execute([$id]);
        } catch (PDOException $e) {
            echo 'Невозможно подключиться к серверу баз данных: ' . $e->getMessage();
        }
    }

}



class CDProduct extends ShopProduct
{
    public function __construct(private string $title, private string $authorFirstName, private string $authorMainName, private float $price, private float $playLength)
    {
        parent::__construct($title, $authorFirstName, $authorMainName, $price);
    }
    public function getCDProduct(): float
    {
        return $this->playLength;
    }
    public function setCDProduct(float $playLength): void
    {
        $this->playLength = $playLength;
    }

    public function actionCreate(PDO $pdo): void
    {
        try {
            parent::actionCreate($pdo);
            $stmt = $pdo->query("SELECT id FROM ShopProduct ORDER BY id DESC");
            $product = $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt = $pdo->prepare("INSERT INTO CDProduct(product_id, playLength) VALUES (?, ?)");
            $stmt->execute([$product['id'], $this->playLength]);
        } catch (PDOException $e) {
            echo 'Невозможно подключиться к серверу баз данных: ' . $e->getMessage();
        }

    }

    // public static function find(int $id, PDO $pdo): bool
    // {
    //     $stmt = $pdo->prepare("SELECT * FROM CDProduct WHERE id = ?");
    //     $stmt->execute([$id]);
    //     $product = $stmt->fetch(PDO::FETCH_ASSOC);
    //     if (!$product) {
    //         return false;
    //     } else {
    //         return true;
    //     }
    // }
    public static function actionView(PDO $pdo): array
    {
        try {
            $stmt = $pdo->prepare("SELECT CdProduct.id, ShopProduct.title, ShopProduct.authorFirstName, ShopProduct.authorMainName, ShopProduct.price, CDProduct.playLength
            FROM CDProduct INNER JOIN ShopProduct ON ShopProduct.id = CDProduct.product_id;");
            $stmt->execute();
            $product = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $product;
        } catch (PDOException $e) {
            echo 'Невозможно подключиться к серверу баз данных: ' . $e->getMessage();

        }


    }


    // public function actionUpdate(int $id, PDO $pdo): void
    // {

    //     if (!$this->find($id, $pdo))
    //         throw new Exception("Такой записи нет, невозможно изменить!");
    //     else {

    //         $stmt = $pdo->prepare("SELECT product_id FROM CDProduct WHERE id = ?");
    //         $stmt->execute([$id]);
    //         $product = $stmt->fetch(PDO::FETCH_ASSOC);
    //         parent::actionUpdate($product['product_id'], $pdo);
    //         $stmt = $pdo->prepare("UPDATE CDProduct SET playLength = ? WHERE id = ?");
    //         $stmt->execute([$this->playLength, $id]);
    //     }


    // }

    public static function actionDelete(int $id, PDO $pdo): void
    {
        try {
            $stmt = $pdo->prepare("SELECT product_id FROM CdProduct WHERE id = ?");
            $stmt->execute([$id]);
            $product = $stmt->fetch(PDO::FETCH_ASSOC);
            parent::actionDelete($product['product_id'], $pdo);
            $stmt = $pdo->prepare("DELETE FROM CDProduct WHERE id = ?");
            $stmt->execute([$id]);
        } catch (PDOException $e) {
            echo 'Невозможно подключиться к серверу баз данных: ' . $e->getMessage();

        }

    }

}


class BookProduct extends ShopProduct
{
    public function __construct(private string $title, private string $authorFirstName, private string $authorMainName, private float $price, private int $strNum)
    {
        parent::__construct($title, $authorFirstName, $authorMainName, $price);
    }
    public function getBookProduct(): int
    {
        return $this->strNum;
    }
    public function setBookProduct(int $strNum): void
    {
        $this->strNum = $strNum;
    }
    public function actionCreate(PDO $pdo): void
    {
        try {
            parent::actionCreate($pdo);
            $stmt = $pdo->query("SELECT id FROM ShopProduct ORDER BY id DESC");
            $product = $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt = $pdo->prepare("INSERT INTO BookProduct(product_id, strNum) VALUES (?, ?)");
            $stmt->execute([$product['id'], $this->strNum]);
        } catch (PDOException $e) {
            echo 'Невозможно подключиться к серверу баз данных: ' . $e->getMessage();
        }
    }
    //     public static function find(int $id, PDO $pdo): bool
//     {
//         $stmt = $pdo->prepare("SELECT * FROM BookProduct WHERE id = ?");
//         $stmt->execute([$id]);
//         $product = $stmt->fetch(PDO::FETCH_ASSOC);
//         if (!$product) {
//             return false;
//         } else {
//             return true;
//         }
//     }
    public static function actionView(PDO $pdo): array
    {
        try {
            $stmt = $pdo->prepare("SELECT BookProduct.id, ShopProduct.title, ShopProduct.authorFirstName, ShopProduct.authorMainName, ShopProduct.price, strNum
                            FROM BookProduct INNER JOIN ShopProduct ON ShopProduct.id = BookProduct.product_id;");
            $stmt->execute();
            $product = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $product;
        } catch (PDOException $e) {
            echo 'Невозможно подключиться к серверу баз данных: ' . $e->getMessage();
        }


    }

    //     public function actionUpdate(int $id, PDO $pdo): void
//     {

    //         if (!$this->find($id, $pdo))
//             throw new Exception("Такой записи нет, нельзя изменить!");
//         else {
//             $stmt = $pdo->prepare("SELECT product_id FROM BookProduct WHERE id = ?");
//             $stmt->execute([$id]);
//             $product = $stmt->fetch(PDO::FETCH_ASSOC);
//             parent::actionUpdate($product['product_id'], $pdo);
//             $stmt = $pdo->prepare("UPDATE BookProduct SET strNum = ? WHERE id = ?");
//             $stmt->execute([$this->strNum, $id]);


    //         }

    //     }

    public static function actionDelete(int $id, PDO $pdo): void
    {
        try {
            $stmt = $pdo->prepare("SELECT product_id FROM BookProduct WHERE id = ?");
            $stmt->execute([$id]);
            $product = $stmt->fetch(PDO::FETCH_ASSOC);
            parent::actionDelete($product['product_id'], $pdo);
            $stmt = $pdo->prepare("DELETE FROM BookProduct WHERE id = ?");
            $stmt->execute([$id]);
        } catch (PDOException $e) {
            echo 'Невозможно подключиться к серверу баз данных: ' . $e->getMessage();
        }


    }
}

class ShowInfo
{

    public function writeBook(BookProduct $shopProduct): void
    {
        $str = "{$shopProduct->getShopTitle()}, {$shopProduct->getShopAuthorFirstName()}, {$shopProduct->getShopAuthorMainName()}, {$shopProduct->getShopPrice()}, {$shopProduct->getBookProduct()} ";
        print $str;
    }
    public function writeCD(CDProduct $shopProduct): void
    {
        $str = "{$shopProduct->getShopTitle()}, {$shopProduct->getShopAuthorFirstName()}, {$shopProduct->getShopAuthorMainName()}, {$shopProduct->getShopPrice()}, {$shopProduct->getCDProduct()} ";
        print $str;
    }

}

//$product1 = new BookProduct("Муму", "Иван", "Тургенев", 660, 100);
//$product2 = new CDProduct("Трек", "Сергей", "Нейман", 230, 60);


//$product1->actionCreate($pdo);
//$product2->actionCreate($pdo);


// var_dump($product1);
// $writer = new ShowInfo();
//$writer->writeBook($product1);
//print("<br>");
//$writer->writeCD($product2);


// $product1 = new BookProduct("Муму", "Иван", "Тургенев", 660, 100);
// $product2 = new CDProduct("Трек", "Сергей", "Нейман", 230, 60);


// $product1->actionCreate($pdo);
// $product2->actionCreate($pdo);


// var_dump($product1);
// $writer = new ShowInfo();
// $writer->writeBook($product1);
// print("<br>");
// $writer->writeCD($product2);
// $product1 = new BookProduct("Муму", "sdf", "Тургенев", 660, 435);
// try{
//     BookProduct::actionView(1, $pdo);
// }catch (Exception $e){
//     echo  $e->getMessage();
// }
