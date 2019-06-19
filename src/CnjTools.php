<?php

namespace Codilo;

class CnjTools
{
  public function check_validator($NNNNNNN, $DD, $AAAA, $J, $TR, $OOOO)
  {
    $values = $this->sanitize_values($NNNNNNN, $DD, $AAAA, $J, $TR, $OOOO);

    $nnnnnnn = $values['nnnnnnn'];
    $dd = $values['dd'];
    $aaaa = $values['aaaa'];
    $j = $values['j'];
    $tr = $values['tr'];
    $oooo = $values['oooo'];

    $mod1 = $this->mod_value($nnnnnnn);
    $value1 = $this->concat_values(array($mod1, $aaaa, $j, $tr));
    $mod2 = $this->mod_value($value1);
    $value2 = $this->concat_values(array($mod2, $oooo, $dd));

    return $this->mod_value($value2) == 1;
  }

  public function gen_validator ($NNNNNNN, $AAAA, $J, $TR, $OOOO)
  {
    $values = $this->sanitize_values($NNNNNNN, '', $AAAA, $J, $TR, $OOOO);

    $nnnnnnn = $values['nnnnnnn'];
    $aaaa = $values['aaaa'];
    $j = $values['j'];
    $tr = $values['tr'];
    $oooo = $values['oooo'];

    $block1 = $this->concat_values(array($nnnnnnn, $aaaa));
    $mod1 = $this->mod_value($block1);
    $value1 = $mod1 * 1000000000;

    $block2 = $this->concat_values(array($j, $tr, $oooo));
    $value2 = ((int) $block2) * 100;
    $mod2 = $this->mod_value($value1 + $value2);

    $dd = $this->pad_string(98 - $mod2, 2);
    $cnj = $this->format_cnj($nnnnnnn, $dd, $aaaa, $j, $tr, $oooo);

    return $cnj;
  }

  public function split ($cnj)
  {
    if ($cnj == null) return ['0000000', '00', '0000', '0', '00', '0000'];

    $notNumber = '/^0+|[^\d]+/';
    $cnjRegExp = '/(\d{1,7})-?(\d{1,2}).?(\d{1,4}).?(\d{1}).?(\d{1,2}).?(\d{1,4})/';

    $splitted = preg_split($notNumber, $cnj);

    $NNNNNNN = false;
    $DD = false;
    $AAAA = false;
    $J = false;
    $TR = false;
    $OOOO = false;

    if (preg_match($notNumber, $cnj) && preg_match($cnjRegExp, $cnj) && sizeof($splitted) === 6)
    {
      $NNNNNNN = $this->pad_string(preg_replace($notNumber, '', $splitted[0]), 7);
      $DD = $this->pad_string(preg_replace($notNumber, '', $splitted[1]), 2);
      $AAAA = $this->pad_string(preg_replace($notNumber, '', $splitted[2]), 4);
      $J = $this->pad_string(preg_replace($notNumber, '', $splitted[3]), 1);
      $TR = $this->pad_string(preg_replace($notNumber, '', $splitted[4]), 2);
      $OOOO = $this->pad_string(preg_replace($notNumber, '', $splitted[5]), 4);
    }

    $standard = $NNNNNNN && $DD && $AAAA && $J && $TR && $OOOO
      && strlen($NNNNNNN) <= 7
      && strlen($DD) <= 2
      && strlen($AAAA) <= 4
      && strlen($J) <= 1
      && strlen($TR) <= 2
      && strlen($OOOO) <= 4;

    if (!$standard) {
      $number = $this->pad_string(preg_replace($notNumber, '', $cnj), 20);
      
      $NNNNNNN = substr($number, 0, 7);
      $DD = substr($number, 7, 2);
      $AAAA = substr($number, 9, 4);
      $J = substr($number, 13, 1);
      $TR = substr($number, 14, 2);
      $OOOO = substr($number, 16, 4);
    }

    return [$NNNNNNN, $DD, $AAAA, $J, $TR, $OOOO];
  }

  public function is_cnj ($value)
  {
    $cnj = $this->split($value);
    return $this->check_validator($cnj[0], $cnj[1], $cnj[2], $cnj[3], $cnj[4], $cnj[5]);
  }

  public function sanitize_values ($NNNNNNN, $DD, $AAAA, $J, $TR, $OOOO)
  {
    $nnnnnnn = strlen($NNNNNNN) == 7 ? $NNNNNNN : $this->pad_string($NNNNNNN, 7);
    $dd = strlen($DD) == 2 ? $DD : $this->pad_string($DD, 2);
    $aaaa = strlen($AAAA) == 4 ? $AAAA : $this->pad_string($AAAA, 4);
    $j = strlen($J) == 1 ? $J : $this->sub_string($J);
    $tr = strlen($TR) == 2 ? $TR : $this->pad_string($TR, 2);
    $oooo = strlen($OOOO) == 4 ? $OOOO : $this->pad_string($OOOO, 4);

    $values = array(
      'nnnnnnn' => $nnnnnnn,
      'dd' => $dd,
      'aaaa' => $aaaa,
      'j' => $j,
      'tr' => $tr,
      'oooo' => $oooo
    );

    return $values;
  }

  public function format_cnj ($NNNNNNN, $DD, $AAAA, $J, $TR, $OOOO)
  {
    $values = $this->sanitize_values($NNNNNNN, $DD, $AAAA, $J, $TR, $OOOO);

    $nnnnnnn = $values['nnnnnnn'];
    $dd = $values['dd'];
    $aaaa = $values['aaaa'];
    $j = $values['j'];
    $tr = $values['tr'];
    $oooo = $values['oooo'];

    return $this->concat_values(array($nnnnnnn, '-', $dd, '.', $aaaa, '.', $j, '.', $tr, '.', $oooo));
  }

  public function mod_value ($value)
  {
    return ((int) $value) % 97;
  }

  public function pad_string ($value, $pad_lenght)
  {
    return str_pad($value, $pad_lenght, '0', STR_PAD_LEFT);
  }

  public function sub_string ($value)
  {
    return substr($value, 0, 1);
  }

  public function concat_values ($array)
  {
    return implode('', $array);
  }
}