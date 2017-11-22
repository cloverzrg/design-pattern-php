<?php
/**
 * Created by PhpStorm.
 * User: zhurungen
 * Date: 2017/11/22
 * Time: 16:16
 */

//富士康
abstract class FoxconnFactory
{
    abstract public function createButton();
}

//苹果生产线
class IphoneFactory extends FoxconnFactory
{
    public function createButton()
    {
        return new IphoneButton();
    }


}

//小米生产线
class XiaomiFactory extends FoxconnFactory
{
    public function createButton()
    {
        return new XiaomiButton();
    }
}

class Button {}

//iPhone按钮
class IphoneButton extends Button
{
    public function __construct()
    {
        echo '生产iphone按键';
    }
}

//小米按钮
class XiaomiButton extends Button
{
    public function __construct()
    {
        echo '生产小米按键';
    }
}

$phone_brand = 'Xiaomi';
$factory_name = $phone_brand.'Factory';
$factory = new $factory_name;
$button = $factory->createButton();