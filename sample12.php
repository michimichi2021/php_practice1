<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('G');
?>

<?php if($time < 9): ?>
  <p>*営業時間外です</p>
<?php else: ?>
  <p>ようこそ</p>
<?php endif; ?>

<?php
$s = 'l';
if($s):
  echo '$sには文字が入っています';
endif;

// 数字の場合は0あるかないか、0でない場合はif(!$x)