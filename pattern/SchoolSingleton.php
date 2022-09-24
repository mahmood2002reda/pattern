<?php
class SchoolSingleton{

    private static  $schoolName;
    private static  $schoolAdd;
    private static $singleInstance;
    function __construct($name,$add){

        self::$schoolName = $name; 
        self::$schoolAdd = $add; 
    }
    public static function getInstance($name, $add){
        if((self::$singleInstance instanceof self))  {
            return self::$singleInstance;
        }
         else{

            self::$singleInstance=new SchoolSingleton($name,$add);
         }

         return self::$singleInstance;

        } 
        public static function getSchoolName(){
            return self::$schoolName;
        }
        public static function getSchoolAdd() {
            return self::$schoolAdd;
        }
        private function __clone(){
            $newObject = clone $existingObject; 
        }
    }
$m=SchoolSingleton:: getInstance("mahmood"," alaa");
echo $m=SchoolSingleton:: getSchoolName();
echo $m=SchoolSingleton:: getSchoolAdd();
$n=SchoolSingleton:: getInstance("ali","hmod");
echo $n=SchoolSingleton:: getSchoolName();
echo $n=SchoolSingleton:: getSchoolAdd();