<?php
$fst = 10;
$snd = 20;
echo "\$fst = $fst\n", "\$snd = $snd\n";
[$fst, $snd] = [$snd, $fst];
echo "Замена:\n", "\$fst = $fst\n", "\$snd = $snd\n";
