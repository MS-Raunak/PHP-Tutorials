<?php
//*********DATA TYPES********//
    //1.Integer
    echo "Integer<br>==============<br>";
    echo "10: ";
    echo var_dump(10); //int(10)

    //2.Float
    echo "<br><br>Float<br>==============<br>";
    echo "10.2: ";
    echo var_dump(10.2); //float(10)

    //3.String
    echo "<br><br>String<br>==============<br>";
    echo "hello: ";
    echo var_dump("hello"); //string(5) "hello"

    //4.Boolean
    echo "<br><br>String<br>==============<br>";
    echo "TRUE: ";
    echo var_dump(true); //bool(true)

    //5.Array
    echo "<br><br>Array<br>==============<br>";
    $arr = array(10,20,22.7, "coco");
    echo "arr = array(10,20, 'coco', 22.7): ";
    echo var_dump($arr); //array(4) { [0]=> int(10) [1]=> int(20) [2]=> float(22.7) [3]=> string(4) "coco" }
   
    //6.Object
    //7.Callable
    //8.Iterable
    //9.Resource
    //10.Null


    /**
     * Predefined Datatypes
     * 1.Integer
     * 2.Boolean
     * 3.Float
     * 4.String
     * 
     * User-defined Datatypes
     * 1.Arrray
     * 2.Objects
     * 
     * Special Datatypes
     * 1.NULL
     * 2.Resource
     */
?>