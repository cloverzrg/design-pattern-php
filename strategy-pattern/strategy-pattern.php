<?php

//抽象策略接口
abstract class Strategy
{
    abstract function wayToSchool();
}

//具体策略角色
class BikeStrategy extends Strategy
{
    function wayToSchool()
    {
        echo "骑自行车去上学";
    }
}

class BusStrategy extends Strategy
{
    function wayToSchool()
    {
        echo "乘公共汽车去上学";
    }
}

class TaxiStrategy extends Strategy
{
    function wayToSchool()
    {
        echo "骑出租车去上学";
    }
}

//环境角色
class Context
{
    private $strategy;

    //设置具体策略
    function setStrategy(Strategy $strategyName)
    {
        $this->strategy = $strategyName;
    }


    function goToSchool()
    {
        $this->strategy->wayToSchool();
    }
}

//测试一下
$context = new Context();
//设置策略模式
$context->setStrategy(new BusStrategy());
$context->goToSchool();
?>