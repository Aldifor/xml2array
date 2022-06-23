<?php
function dd($data,$die=false,$v = false){
    echo "debug <pre style='text-align: left;
            display: block;
                padding: 9.5px;
                margin: 0 0 10px;
                font-size: 13px;
                line-height: 1.42857143;
                color: #333;
                word-break: break-all;
                word-wrap: break-word;
                background-color: #f5f5f5;
                border: 1px solid #ccc;
                border-radius: 4px;'>";
    if(!$v){
        print_r($data);
    }else{
        var_dump($data);
    }
    echo "</pre>___________________________________________________________________________ <br>";

    if($die) {
        die;
    }
}