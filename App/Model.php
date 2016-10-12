<?php

namespace App;

abstract class Model
{



    public static function findAll()
    {

        /**
         * ORDER BY id DESC LIMIT 3 - в соответсвии с дз - где указано вывести 3 последние новости
         */
        $db = new Db();
        $data = $db->query(
            'SELECT * FROM ' . static::$table,
            [],
            static::class
        );
        return $data;
    }

    public static function findAllByLimit($limit)
    {

        /**
         * ORDER BY id DESC LIMIT 3 - в соответсвии с дз - где указано вывести 3 последние новости
         */
        $db = new Db();
        $data = $db->query(
            'SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT ' . $limit,
            [],
            static::class
        );
        return $data;
    }
    public static function findById($id)
{
    $db = new Db();
    $data = $db->query(
        'SELECT * FROM ' . static::$table . ' WHERE id=:id LIMIT 1',
        [':id' => $id],
        static::class
    );

    if (empty($data)){
        return false;
    } else return $data[0];

}


}