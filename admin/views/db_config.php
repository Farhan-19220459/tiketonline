<?php

$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = 'ticketonline';

$conn = mysqli_connect($hname, $uname, $pass, $db);

if (!$conn) {
    die("Cannot Connect to Database" . mysqli_connect_error());
}

function filteration($data)
{
    foreach ($data as $key => $value) {
        $value = trim($value);
        $value = stripcslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);
        $data[$key] = $value;
    }
    return $data;
}

function selectAll($table)
{
    $conn = $GLOBALS['conn'];
    $sql = "SELECT * FROM $table";
    if ($result = mysqli_query($conn, $sql)) {
        return $result;
    } else {
        die("Query cannot be executed - selectAll");
    }
}


function select($sql, $values, $datatypes)
{
    $conn = $GLOBALS['conn'];
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Select");
        }
    } else {
        die("Query cannot be executed - Select");
    }
}

function update($sql, $values, $datatypes)
{
    $conn = $GLOBALS['conn'];
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Update");
        }
    } else {
        die("Query cannot be executed - Update");
    }
}

function insert($sql, $values, $datatypes)
{
    $conn = $GLOBALS['conn'];
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Insert");
        }
    } else {
        die("Query cannot be prepared - Insert");
    }
}

// function delete($sql, $values, $datatypes)
// {
//     $conn = $GLOBALS['conn'];
//     if ($stmt = mysqli_prepare($conn, $sql)) {
//         mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
//         if (mysqli_stmt_execute($stmt)) {
//             $res = mysqli_stmt_affected_rows($stmt);
//             mysqli_stmt_close($stmt);
//             return $res;
//         } else {
//             mysqli_stmt_close($stmt);
//             die("Query cannot be executed - Delete");
//         }
//     } else {
//         die("Query cannot be prepared - Delete");
//     }
// }

function delete($sql)
{
    $conn = $GLOBALS['conn'];

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);



    // if ($stmt = mysqli_prepare($conn, $sql)) {
    //     mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
    //     if (mysqli_stmt_execute($stmt)) {
    //         $res = mysqli_stmt_affected_rows($stmt);
    //         mysqli_stmt_close($stmt);
    //         return $res;
    //     } else {
    //         mysqli_stmt_close($stmt);
    //         die("Query cannot be executed - Delete");
    //     }
    // } else {
    //     die("Query cannot be prepared - Delete");
    // }
}
