<?php
//ไฟล์นี้กำหนดตัว endpoint ในการทำงาน CRUD กับตารางฐานข้อมูลจากฝั่ง Client (Web/Mobile/IoT)
//ดึงข้อมูลทั้งหมด GET domain/smarthomeservice/sensor

header("Contenet-Type:application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

require_once "./../core/Request.php";
require_once "./../controllers/sensorcontroller.php";

$sensorController = new SensorController();

Request:: handleRequest("GET","/smartfarmservice/sensors",function() use ($sensorController){
    $sensorController->getSensorAll();
});


 ?>