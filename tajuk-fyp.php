<?php
$a  = ['pengundian', 'pengurusan', 'pemantauan','pengecaman','kedatangan','peladangan', 'penyelidikan', 'pengiraan', 'analisa','pemilihan','navigasi','maklumat','mekanisma','permohonan'];
$b = ['kapal','udang','itik','ayam','pelajar','cukai','keselamatan','sekuriti','ladang','mabuk','khayal','bayi','kesihatan', 'masalah','hospital','kamus','tender','projek','lelong','bergeografi','pemilihan','kelayakan','cuti','kerja'];
$c = ['menggunakan','berasaskan'];
$d = ['six sigma','blockchain','crowd sourcing', 'gamification', 'AI','ML','AR','image processing','tensor flow','raspi','WAP','web','drone','haiwan','otak','hologram','VR'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tajuk FYP</title>
</head>
<body>
    <h1>Tajuk FYP</h1>
    <ul>
        <li><?php echo 'Sistem '.$a[array_rand($a)].' '.$b[array_rand($b)].' '.$c[array_rand($c)].' '.$d[array_rand($d)]; ?></li>
        <li><?php echo 'Sistem '.$a[array_rand($a)].' '.$b[array_rand($b)].' '.$c[array_rand($c)].' '.$d[array_rand($d)]; ?></li>
        <li><?php echo 'Sistem '.$a[array_rand($a)].' '.$b[array_rand($b)].' '.$c[array_rand($c)].' '.$d[array_rand($d)]; ?></li>
        <li><?php echo 'Sistem '.$a[array_rand($a)].' '.$b[array_rand($b)].' '.$c[array_rand($c)].' '.$d[array_rand($d)]; ?></li>
        <li><?php echo 'Sistem '.$a[array_rand($a)].' '.$b[array_rand($b)].' '.$c[array_rand($c)].' '.$d[array_rand($d)]; ?></li>
    </ul>
    <br>
    <a href="tajuk-fyp.php">Jana semula</a>
</body>
</html>
