**php生成16位唯一ID**
```
include "./particle.class.php";
$machineId = ip2long('127.0.0.1');
//生成ID
$particle = Particle::generateParticle($machineId);
echo $particle."\n";
//反向计算时间戳
echo date('YmdHis',substr(Particle::timeFromParticle($particle),0,10))."\n";
```
