<?php
namespace app;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

// clase que utiliza el patron de diseno Singleton
class Log {
    private static $_logger = null;

    private static function getLogger(){
        if(!isset(self::$_logger)){
            // nombre del log: App Log
            self::$_logger = new Logger('App Log');
        }
        return self::$_logger;
    }

    public static function logError($error){
        // pushHandler: obten archivo en el que se va a guardar el error
        // StreamHandler: porque se maneja un stream hacia un archivo
        self::getLogger()->pushHandler(new StreamHandler('../logs/application.log', Logger::ERROR));
        self::getLogger()->addError($error);
    }

    public static function logInfo($info){
        // pushHandler: obten archivo en el que se va a guardar el Info
        // StreamHandler: porque se maneja un stream hacia un archivo
        self::getLogger()->pushHandler(new StreamHandler('../logs/application.log', Logger::INFO));
        self::getLogger()->addInfo($info);
    }
}