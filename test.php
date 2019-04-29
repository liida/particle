<?php
include "./particle.class.php";
$machineId = ip2long('127.0.0.1');
$particle = Particle::generateParticle($machineId);//生成ID
echo $particle."\n";
echo date('YmdHis',substr(Particle::timeFromParticle($particle),0,10))."\n";//反向计算时间戳