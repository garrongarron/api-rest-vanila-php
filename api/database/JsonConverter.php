<?php

class JsonConverterSingleton
{
    static public $DB = null;
    static public function instance()
    {
        if (self::$DB == null) {
            self::$DB = new Database();
        }
        $class = get_called_class();
        return new $class(self::$DB->run());
    }

    public function toJson($result = null)
    {
        $line = [];
        if ($result === true) {
            return json_encode($line);
        }
        if ($result) {
            while ($obj = $result->fetch_object()) {
                array_push($line, $obj);
            }
        }
        return json_encode($line);
    }
}