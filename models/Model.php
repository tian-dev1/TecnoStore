<?php

abstract class Model {
    //Atrbiutos para la conexion con MySQL
    private static $DB_HOST = 'localhost';
    private static $DB_USER = 'root';
    private static $DB_PASS = '';
    private static $DB_NAME = 'tecnoCenter';
    private static $DB_CHARSET = 'utf8';
    
    private static $CONNECTION_DB ; 
    private static $QUERY;
    private static $ROWS = array();

    //Métodos abstactos para la CRUD de las clases que heredan
    abstract protected function set();
    abstract protected function get(); 
    abstract protected function del();


    //Métodos privados para conectarse a la Base de datos
    private funtion db_open(){
        //Accedemos a CONNECTION_DB para instanciar una nueva conexión de mysqli
        $this->CONNECTION_DB = new mysqli(
            self::$DB_HOST,
            self::$DB_USER,
            self::$DB_PASS,
            self::$DB_NAME
        );
    }
    $this->CONNECTION_DB->set_charset(self::$DB_CHARSET);
}

//Establecer un query que afecte datos (Insert/Update o Delete)
protected function set_query(){
    $this->db_open();

    //Realizar consulta a la DB
    $this->CONNECTION_DB->query($this->QUERY);

    $this->db_close();
}

//Obtener datos de un query (Select)
protected function get_query(){
    $this->db_open();

    $result = $this->CONNECTION_DB->query($this->QUERY);
    
    while($this->rows[] = $result->fetch_assoc() );
    $result->close();

    $this->db_close();

    return array_pop($this->rows);


}


?>