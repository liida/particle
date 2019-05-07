<?php
ini_set('memory_limit', '1280000M');
include "./particle.class.php";

$i = 0;
$particles = [];
$time = microtime(true);
while ($i < 100000){
    $machineId = Particle::machineId(rand(0,1024));
    $particles[Particle::generateParticle()] = $machineId;//生成ID
    $i++;
}
var_dump(count($particles));
echo round(microtime(true)- $time,3)."\n";
//随机取一个
$particle = array_rand($particles);
echo $particle."\n";
//反向计算时间戳
echo date('YmdHis',substr(Particle::timeFromParticle($particle),0,10))."\n";
exit;
