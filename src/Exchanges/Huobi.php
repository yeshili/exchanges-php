<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Exchange\Exchanges;

use Lin\Huobi\HuobiSpot;
use Lin\Huobi\HuobiFuture;
use Lin\Exchange\Interfaces\AccountInterface;
use Lin\Exchange\Interfaces\MarketInterface;
use Lin\Exchange\Interfaces\TraderInterface;

class Base
{
    protected $platform_future;
    protected $platform_spot;
    
    function __construct(HuobiFuture $platform_future,HuobiSpot $platform_spot){
        $this->platform_future=$platform_future;
        $this->platform_spot=$platform_spot;
    }
}

class Account extends Base implements AccountInterface
{
    /**
     *
     * */
    function position(array $data){
        print_r($data);
        echo "huobi position \n";
    }
}

class Market extends Base implements MarketInterface
{
    /**
     *
     * */
    function depth(array $data){
        
    }
}

class Trader extends Base implements TraderInterface
{
    /**
     *
     * */
    function sell(array $data){
        print_r($data);
        echo "huobi sell \n";
    }
    
    /**
     *
     * */
    function buy(array $data){
        print_r($data);
        echo "huobi sell \n";
    }
    
    /**
     *
     * */
    function cancel(array $data){
        
    }
    
    /**
     *
     * */
    function update(array $data){
        
    }
    
    /**
     *
     * */
    function show(array $data){
        
    }
    
    /**
     *
     * */
    function showAll(array $data){
        
    }
}

class Huobi
{
    protected $platform_future;
    protected $platform_spot;
    
    function __construct($key,$secret,$host=''){
        $host=empty($host) ? 'https://api.huobi.pro' : $host ;
        
        $this->platform_future=new HuobiFuture($key,$secret,$host);
        
        $this->platform_spot=new HuobiSpot($key,$secret,$host);
    }
    
    function account(){
        return new Account($this->platform_future,$this->platform_spot);
    }
    
    function market(){
        return new Market($this->platform_future,$this->platform_spot);
    }
    
    function trader(){
        return new Trader($this->platform_future,$this->platform_spot);
    }
}