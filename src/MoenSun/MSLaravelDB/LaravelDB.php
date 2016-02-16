<?php
/**
 * Created by Bane.Shi.
 * Copyright MoenSun
 * User: Bane.Shi
 * Date: 2016/2/17
 * Time: 0:04
 */

namespace MoenSun\MSLaravelDB;


use Illuminate\Support\Facades\DB;

class LaravelDB extends DB
{
    public static function connection($db){
        return parent::connection($db);
    }

    public static function reconnect($db){
        return parent::reconnect($db);
    }

    public static function beginTransaction(){
        return parent::beginTransaction();
    }

    public static function commit(){
        return parent::commit();
    }

    public static function rollback(){
        return parent::rollback();
    }

    public static function statement($sql){
        return parent::statement($sql);
    }

    public static function select($sql,$params=array()){
        return parent::select($sql,$params);
    }

    public static function update($sql,$params=array()){
        return parent::update($sql,$params);
    }

    public static function delete($sql,$params=array()){
        return parent::delete($sql,$params);
    }
}