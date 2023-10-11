<?php 
    if(DB::connection()->getPdo()){
        echo "Connected to ".DB::Connection()->getDatabaseName();
    }
?>