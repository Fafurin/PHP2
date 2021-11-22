<?php
$link = mysqli_connect('localhost', 'VooDoo', 'magicVooDoo', 'GB');
if(!$link){
    die('there is no connection to the database');
}
