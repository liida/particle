<?php
ini_set('memory_limit', '1280000M');
include "./particle.class.php";

$i = 0;
$particles = [];
$time = microtime(true);
while ($i < 500000){
    $machineId = Particle::machineId(rand(0,1024));
    $particle = Particle::generateParticle();
    //echo date('YmdHis',substr(Particle::timeFromParticle($particle),0,10))."\n";
    $particles[$particle] = $machineId;//生成ID
    $i++;
}

echo "耗时".round(microtime(true)- $time,3)."秒，生成{$i}个订单号,有".($i-count($particles))."个重复\n";
//随机取一个
$particle = array_rand($particles);
echo "随机取一个订单号：".$particle."\n";
//反向计算时间戳
echo "反向计算时间戳：".date('YmdHis',substr(Particle::timeFromParticle($particle),0,10))."\n";