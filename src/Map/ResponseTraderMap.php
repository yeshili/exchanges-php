<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Exchange\Map;

use Lin\Exchange\Interfaces\TraderInterface;

/**
 * 交易接口参数映射
 * */
class ResponseTraderMap extends Base implements TraderInterface
{
    /**
     *  
     * */
    function sell(array $data){
        return $data;
    }
    
    /**
     *
     * */
    function buy(array $data){
        return $data;
    }
    
    /**
     *
     * */
    function cancel(array $data){
        return $data;
    }
    
    /**
     *
     * */
    function update(array $data){
        return $data;
    }
    
    /**
     *
     * */
    function show(array $data){
        return $data;
    }
    
    /**
     *
     * */
    function showAll(array $data){
        return $data;
    }
}
