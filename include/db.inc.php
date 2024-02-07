<?php 

$arrConfig['conn'] = my_conect($arrConfig); 

function my_conect($arrConfig){
    $conn = mysqli_connect($arrConfig['host'], $arrConfig['user'], $arrConfig['pass'], $arrConfig['db']);
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
};

function my_query($sql, $debug = 0) {
    global $arrConfig;
    if ($debug) echo $sql;
    $result = $arrConfig['conn']->query($sql);

    /* SELECT
	mysqli_result Object
	(
	    [current_field] => 0
	    [field_count] => 5
	    [lengths] => 
	    [num_rows] => 3
	    [type] => 0
	)
	*/

	/* UPDATE
	1: correu tudo bem
	0: erro na QUERY
	*/

	/* DELETE
	1: correu tudo bem
	0: erro na QUERY
	*/

	/* INSERT
	id: correu tudo bem
	0: erro na QUERY
	*/

    if(isset($result->num_rows)){ // SELECT
        $arrResult = array();
        if($result -> num_rows > 0){
            while($row = $result->fetch_assoc()){
                $arrResult[] = $row;
            }
        }
        return $arrResult;
    }
    else if( $result === TRUE ){ // INSERT, UPDATE, DELETE
        if($last_id = $arrConfig['conn']->insert_id){
            return $last_id;
        }
        return 1;
    }
    return 0;
}; 



?>