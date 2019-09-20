<?php
class Database 
{
   private static $dbName = 'amband_bahamas' ; 
   private static $dbHost = 'localhost' ;
   private static $dbUsername = 'amband_bahamas';
   private static $dbUserPassword = 'bahamas@123';
   
   private static $cont  = null;
   
   public function __construct() {
      exit('Init function is not allowed');
   }
   
   public static function connect()
   {
      // One connection through whole application
       if ( null == self::$cont )
       {      
        try 
        {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);  
        }
        catch(PDOException $e) 
        {
          die($e->getMessage());  
        }
       } 
       return self::$cont;
   }
   
   public static function disconnect()
   {
      self::$cont = null;
   }
}
