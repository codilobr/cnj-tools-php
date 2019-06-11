<?php

namespace Codilo;

class CnjTools
{
  public function add($a, $b)
  {
      return $a + $b;
  }

  public function checkValidator($NNNNNNN, $DD, $AAAA, $J, $TR, $OOOO)
  {
    $nnnnnnn = str_pad($NNNNNNN, 7, '0', STR_PAD_LEFT);
    $dd = str_pad($DD, 2, '0', STR_PAD_LEFT);
    $aaaa = str_pad($AAAA, 4, '0', STR_PAD_LEFT);
    $j = substr($J, 0, 1);
    $tr = str_pad($TR, 2, '0', STR_PAD_LEFT);
    $oooo = str_pad($OOOO, 4, '0', STR_PAD_LEFT);

    $mod1 = $nnnnnnn % 97;
    $value1 = $mod1 . $aaaa . $j . $tr;
    $mod2 = $value1 % 97;
    $value2 = $mod2 . $oooo . $dd;

    return ($value2 % 97) == 1;
  }

  public function genValidator ($NNNNNNN, $AAAA, $J, $TR, $OOOO)
  {
    $nnnnnnn = str_pad($NNNNNNN, 7, '0', STR_PAD_LEFT);
    $aaaa = str_pad($AAAA, 4, '0', STR_PAD_LEFT);
    $j = substr($J, 0, 1);
    $tr = str_pad($TR, 2, '0', STR_PAD_LEFT);
    $oooo = str_pad($OOOO, 4, '0', STR_PAD_LEFT);

    $block1 = $nnnnnnn . $aaaa;
    $mod1 = ((int) $block1) % 97;
    $value1 = $mod1 * 1000000000;
    $block2 = $j . $tr . $oooo;
    $value2 = ((int) $block2) * 100;
    $mod2 = ($value1 + $value2) % 97;

    $dd = str_pad(98 - $mod2, 2, '0', STR_PAD_LEFT);
    $cnj = $nnnnnnn . '-' . $dd . '.' . $aaaa . '.' . $j . '.' . $tr . '.' . $oooo;

    return $cnj;
  }
}