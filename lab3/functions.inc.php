<?php

    function connectDatabase() {
        return new PDO("mysql:host=localhost;dbname=spotify", "root", "root");
    }

?>