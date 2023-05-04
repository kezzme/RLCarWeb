<?php
    require('opencon.php');
    
    $strsql_new = "SELECT * FROM units_tbl WHERE unit_type ='new'";
    $strsql_old1 = "SELECT * FROM units_tbl WHERE uid BETWEEN 7 AND 10";
    $strsql_old2 = "SELECT * FROM units_tbl WHERE uid BETWEEN 11 AND 14";

    function viewRS($con, $strsql_new){
        $rs = [];
        $i = 0;
        if($stmt = mysqli_query($con, $strsql_new)){
           
            if(mysqli_num_rows($stmt) == 1){
                $record = mysqli_fetch_array($stmt);
                foreach($record as $key => $value){
                    $rs[$key] = $value;
                }
            }
            elseif(mysqli_num_rows($stmt) > 1){
                while($record = mysqli_fetch_array($stmt)){
                    foreach($record as $key => $value){
                        $rs[$i][$key] = $value;
                    }
                    $i++;
                }
            }
            mysqli_free_result($stmt);
        }
        return $rs;
    }

    function viewRS2($con, $strsql_old1){
        $rs = [];
        $i = 0;
        if($stmt = mysqli_query($con, $strsql_old1)){
           
            if(mysqli_num_rows($stmt) == 1){
                $record = mysqli_fetch_array($stmt);
                foreach($record as $key => $value){
                    $rs[$key] = $value;
                }
            }
            elseif(mysqli_num_rows($stmt) > 1){
                while($record = mysqli_fetch_array($stmt)){
                    foreach($record as $key => $value){
                        $rs[$i][$key] = $value;
                    }
                    $i++;
                }
            }
            mysqli_free_result($stmt);
        }
        return $rs;
    }

    function viewRS3($con, $strsql_old2){
        $rs = [];
        $i = 0;
        if($stmt = mysqli_query($con, $strsql_old2)){
           
            if(mysqli_num_rows($stmt) == 1){
                $record = mysqli_fetch_array($stmt);
                foreach($record as $key => $value){
                    $rs[$key] = $value;
                }
            }
            elseif(mysqli_num_rows($stmt) > 1){
                while($record = mysqli_fetch_array($stmt)){
                    foreach($record as $key => $value){
                        $rs[$i][$key] = $value;
                    }
                    $i++;
                }
            }
            mysqli_free_result($stmt);
        }
        return $rs;
    }
    
    $arrUnits_new = viewRS($con,$strsql_new);
    $arrUnits_old1 = viewRS2($con,$strsql_old1);
    $arrUnits_old2 = viewRS3($con,$strsql_old2);
    require('closecon.php');

?>