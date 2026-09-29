<?php

$horas = 30;

$mixxy = 0;
$ninin = 0;

for ($i = 1; $i <= $horas; $i++) {
    if ($i % 12 <= 6 && $i % 12 != 0) {
        $mixxy++;
    } else {
        $ninin++;
    }
}

echo "Mixxy-X789 trabalhou $mixxy horas\n";
echo "Ninin-X989 trabalhou $ninin horas\n";

?>