<?php
require __DIR__.'/includes/functions.php';
if($_SERVER['REQUEST_METHOD']!=='POST'){header('Location:/contact');exit;}
$name=trim($_POST['name']??'');$email=trim($_POST['email']??'');$phone=trim($_POST['phone']??'');$trip=trim($_POST['trip']??($_POST['interest']??''));$message=trim($_POST['message']??'');
if(!$name||!filter_var($email,FILTER_VALIDATE_EMAIL)){http_response_code(422);exit('Please provide a valid name and email.');}
$cfg=site_config();$db=$cfg['db'];
try{$pdo=new PDO("mysql:host={$db['host']};dbname={$db['name']};charset=utf8mb4",$db['user'],$db['pass'],[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);$st=$pdo->prepare('INSERT INTO enquiries(name,email,phone,trip,message,created_at) VALUES(?,?,?,?,?,NOW())');$st->execute([$name,$email,$phone,$trip,$message]);}catch(Throwable $e){}
$subject='Website enquiry: '.($trip?:'Tanzania trip');$body="Name: $name\nEmail: $email\nPhone: $phone\nTrip: $trip\n\n$message";@mail($cfg['site']['email'],$subject,$body,"Reply-To: $email\r\n");
$pageMeta=meta('Enquiry Received','Thank you for contacting Tanzania Wildlife Epic.');require __DIR__.'/includes/header.php';?><main><section class="section wrap center"><span class="eyebrow dark-text">Thank you</span><h1>Your enquiry has been received</h1><p>We have your trip request. For a quicker conversation you can also continue on WhatsApp.</p><a class="btn gold" target="_blank" rel="noopener" href="<?=e(wa_link('Hello Tanzania Wildlife Epic, I have just submitted an enquiry from the website.'))?>">Continue on WhatsApp</a></section></main><?php require __DIR__.'/includes/footer.php';
