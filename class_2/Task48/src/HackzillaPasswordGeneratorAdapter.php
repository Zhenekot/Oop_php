<?php
// composer require hackzilla/password-generator
namespace App;

use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;

class HackzillaPasswordGeneratorAdapter implements PasswordGeneratorInterface
{  
    private $generatorPassword;

    public function __construct()
    {
        $this->generatorPassword = new ComputerPasswordGenerator();
    }

    public function generatePassword($length = 8, $options = ['numbers', 'symbols'])
    {
        $this->generatorPassword->setLength($length);

        $this->generatorPassword->setOptionValue(ComputerPasswordGenerator::OPTION_UPPER_CASE, in_array('upperCase', $options));
        $this->generatorPassword->setOptionValue(ComputerPasswordGenerator::OPTION_NUMBERS, in_array('numbers', $options));
        $this->generatorPassword->setOptionValue(ComputerPasswordGenerator::OPTION_SYMBOLS, in_array('symbols', $options));

        return $this->generatorPassword->generatePassword();
    }
}

