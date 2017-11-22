<?php
/**
 * Created by PhpStorm.
 * User: zhurungen
 * Date: 2017/11/22
 * Time: 17:06
 */

class Button
{
}

class XiaomiButton extends Button
{
    public function __construct()
    {
        echo 'xiaomi button';
    }
}

class IphoneButton extends Button
{
    public function __construct()
    {
        echo 'iphone button';
    }
}

abstract class FoxconnFactory
{
    abstract public function productButton($phone_brand);
}

class ButtonFactory extends FoxconnFactory
{
    public function productButton($phone_brand)
    {
        switch ($phone_brand) {
            case 'Xiaomi':
                return new XiaomiButton();
            case 'Iphone':
                return new IphoneButton();
            default:
                throw new Exception('找不到此button类:' . $phone_brand);
        }
    }
}

$factory = new ButtonFactory();
$factory->productButton('Iphone');