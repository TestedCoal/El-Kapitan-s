<?php


function show($data)
{
    echo"<pre>";
    print_r($data);
    echo"</pre>";
}

function views_path($view)
{
    if(file_exists("../app/views/$view.view.php")){
        return "../app/views/$view.view.php";
    }else{
        echo "view '$view' not found";
    }
}

function esc($str)
{
    return htmlspecialchars($str);
}   

function db_connect()
{
    $DBHOST = "localhost";
    $DBNAME = "elkapitan_db";
    $DBUSER = "root";
    $DBPASS = "";
    $DBDRIVER = "mysql";

    try{
        $con = new PDO("$DBDRIVER:host=$DBHOST;dbname=$DBNAME", $DBUSER, $DBPASS);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    return $con;
}
function query($query, $data = array())
{
    $con = db_connect();
    $smt = $con->prepare($query);
    $check = $smt->execute($data);

    if($check)
    {
        $result = $smt->fetchAll(PDO::FETCH_ASSOC);
        if(is_array($result) && count($result) > 0){

            return $result;
        }
    }

    return false;
}

function allowed_columns($data, $table)
{
    if($table == 'users'){
        $columns = [
            
            'username',
            'email',
            'password',
            'role',
            'image',
            'date',
        ];

        foreach ($data as $key => $value) {
            if(!in_array($key, $columns))
            {
                unset($data[$key]);
            }
        }

        return $data;
    }
}

function insert($data, $table) 
{

    $arr = allowed_columns($data, $table);
    $keys = array_keys($arr);

    $query = "insert into $table";
    $query .= "(".implode(",", $keys) .") values ";
    $query .= "(:".implode(",:", $keys) .")";


    query($query, $arr);
}

function validate($data, $table) 
{
    $errors = [];
    if($table == 'users'){

        //username checker
        if(empty($data['username'])){
            $errors['username'] = "Username is required!";
        }
        else if(!preg_match('/[0-9a-zA-Z_]/', $data['username'])){
            $errors['username'] = "Special characters is not allowed except underscore!";
        }

        //email checker
        if(empty($data['email'])){
            $errors['email'] = "Email is required!";
        }
        else if(filter_Var($data['email'], FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "Email is not valid!";
        }

        //password checker
        if(empty($data['password'])){
            $errors['password'] = "Password is required!";
        }
        else if($data['password'] !== $data['password_retype']){
            $errors['password'] = "Password  is not matched!";
        }
        else if(strlen($data['password']) < 8){
            $errors['password'] = "Password must be atleast 8 characters long!";
        }


    }
    
    return $errors;

}