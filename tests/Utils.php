<?php

class Utils extends PHPUnit\Framework\TestCase
{
  public function test_split ()
  {
    $tools = new Codilo\CnjTools;

    $this->assertEquals(['0000000', '00', '0000', '0', '00', '0000'], $tools->split(null));
    $this->assertEquals(['0000001', '59', '2001', '1', '00', '0001'], $tools->split('0000001-59.2001.1.00.0001'));
    $this->assertEquals(['0000000', '00', '0000', '0', '00', '0001'], $tools->split('1'));
  }

  public function test_clean ()
  {
    $tools = new Codilo\CnjTools;

    $this->assertEquals('00000000000000000001', $tools->clean('1'));
    $this->assertEquals('00000015920011000001', $tools->clean('0000001-59.2001.1.00.0001'));
  }

  public function test_mount_cnj ()
  {
    $tools = new Codilo\CnjTools;

    $this->assertEquals('0000000-00.0000.0.00.0001', $tools->mount_cnj('00000000000000000001'));
    $this->assertEquals('0000001-59.2001.1.00.0001', $tools->mount_cnj('00000015920011000001'));
  }
}