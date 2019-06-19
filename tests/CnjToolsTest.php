<?php

class CnjToolsTest extends PHPUnit\Framework\TestCase
{ 
  public function test_check_validator ()
  {
    $tools = new Codilo\CnjTools;
    $this->assertEquals(true, $tools->check_validator('1', '59', '2001', '1', '00', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '75', '2001', '2', '00', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '91', '2001', '3', '00', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '05', '2001', '4', '90', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '80', '2001', '4', '01', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '53', '2001', '4', '02', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '26', '2001', '4', '03', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '96', '2001', '4', '04', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '69', '2001', '4', '05', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '47', '2001', '5', '10', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '20', '2001', '5', '11', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '90', '2001', '5', '12', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '63', '2001', '5', '13', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '36', '2001', '5', '14', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '09', '2001', '5', '15', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '79', '2001', '5', '16', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '52', '2001', '5', '17', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '25', '2001', '5', '18', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '95', '2001', '5', '19', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '68', '2001', '5', '20', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '41', '2001', '5', '21', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '14', '2001', '5', '22', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '84', '2001', '5', '23', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '57', '2001', '5', '24', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '21', '2001', '5', '90', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '26', '2001', '5', '00', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '96', '2001', '5', '01', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '69', '2001', '5', '02', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '42', '2001', '5', '03', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '15', '2001', '5', '04', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '85', '2001', '5', '05', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '58', '2001', '5', '06', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '31', '2001', '5', '07', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '04', '2001', '5', '08', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '74', '2001', '5', '09', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '63', '2001', '6', '10', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '36', '2001', '6', '11', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '09', '2001', '6', '12', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '79', '2001', '6', '13', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '52', '2001', '6', '14', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '25', '2001', '6', '15', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '95', '2001', '6', '16', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '68', '2001', '6', '17', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '41', '2001', '6', '18', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '14', '2001', '6', '19', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '84', '2001', '6', '20', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '57', '2001', '6', '21', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '30', '2001', '6', '22', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '03', '2001', '6', '23', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '73', '2001', '6', '24', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '46', '2001', '6', '25', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '19', '2001', '6', '26', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '89', '2001', '6', '27', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '42', '2001', '6', '00', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '15', '2001', '6', '01', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '85', '2001', '6', '02', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '58', '2001', '6', '03', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '31', '2001', '6', '04', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '04', '2001', '6', '05', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '74', '2001', '6', '06', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '47', '2001', '6', '07', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '20', '2001', '6', '08', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '90', '2001', '6', '09', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '79', '2001', '7', '10', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '52', '2001', '7', '11', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '25', '2001', '7', '12', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '58', '2001', '7', '00', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '31', '2001', '7', '01', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '04', '2001', '7', '02', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '74', '2001', '7', '03', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '47', '2001', '7', '04', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '20', '2001', '7', '05', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '90', '2001', '7', '06', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '63', '2001', '7', '07', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '36', '2001', '7', '08', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '09', '2001', '7', '09', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '95', '2001', '8', '10', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '68', '2001', '8', '11', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '41', '2001', '8', '12', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '14', '2001', '8', '13', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '84', '2001', '8', '14', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '57', '2001', '8', '15', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '30', '2001', '8', '16', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '03', '2001', '8', '17', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '73', '2001', '8', '18', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '46', '2001', '8', '19', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '19', '2001', '8', '20', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '89', '2001', '8', '21', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '62', '2001', '8', '22', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '35', '2001', '8', '23', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '08', '2001', '8', '24', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '78', '2001', '8', '25', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '51', '2001', '8', '26', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '24', '2001', '8', '27', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '47', '2001', '8', '01', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '20', '2001', '8', '02', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '90', '2001', '8', '03', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '63', '2001', '8', '04', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '36', '2001', '8', '05', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '09', '2001', '8', '06', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '79', '2001', '8', '07', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '52', '2001', '8', '08', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '25', '2001', '8', '09', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '30', '2001', '9', '13', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '08', '2001', '9', '21', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '67', '2001', '9', '26', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '32', '2001', '1', '01', '1'));
    $this->assertEquals(true, $tools->check_validator('1', '35', '1', '1', '01', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '1', '00', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '2', '00', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '3', '00', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '4', '90', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '4', '01', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '4', '02', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '4', '03', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '4', '04', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '4', '05', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '10', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '11', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '12', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '13', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '14', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '15', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '16', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '17', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '18', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '19', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '20', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '21', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '22', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '23', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '24', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '90', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '00', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '01', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '02', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '03', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '04', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '05', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '06', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '07', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '08', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '5', '09', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '10', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '11', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '12', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '13', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '14', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '15', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '16', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '17', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '18', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '19', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '20', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '21', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '22', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '23', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '24', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '25', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '26', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '27', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '00', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '01', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '02', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '03', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '04', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '05', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '06', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '07', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '08', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '6', '09', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '7', '10', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '7', '11', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '7', '12', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '7', '00', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '7', '01', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '7', '02', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '7', '03', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '7', '04', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '7', '05', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '7', '06', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '7', '07', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '7', '08', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '7', '09', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '10', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '11', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '12', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '13', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '14', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '15', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '16', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '17', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '18', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '19', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '20', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '21', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '22', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '23', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '24', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '25', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '26', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '27', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '01', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '02', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '03', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '04', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '05', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '06', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '07', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '08', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '8', '09', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '9', '13', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '9', '21', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '9', '26', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '2001', '1', '01', '1'));
    $this->assertEquals(false, $tools->check_validator('1', '00', '1', '1', '01', '1'));
  }

  public function test_gen_validator ()
  {
    $tools = new Codilo\CnjTools;

    /* TODO: Adicionar mais cnjs para testes mais extensivos */
    $this->assertEquals('0000001-59.2001.1.00.0001', $tools->gen_validator('0000001', '2001', '1', '00', '0001'));
  }

  public function test_split ()
  {
    $tools = new Codilo\CnjTools;

    $this->assertEquals(['0000000', '00', '0000', '0', '00', '0000'], $tools->split(null));
    $this->assertEquals(['0000001', '59', '2001', '1', '00', '0001'], $tools->split('0000001-59.2001.1.00.0001'));
    $this->assertEquals(['0000000', '00', '0000', '0', '00', '0001'], $tools->split('1'));
  }

  public function test_is_cnj ()
  {
    $tools = new Codilo\CnjTools;

    $this->assertEquals(false, $tools->is_cnj('1'));   
    $this->assertEquals(true, $tools->is_cnj('0000001-59.2001.1.00.0001'));   
  }

  public function test_clean ()
  {
    $tools = new Codilo\CnjTools;

    $this->assertEquals('00000000000000000001', $tools->clean('1'));
    $this->assertEquals('00000015920011000001', $tools->clean('0000001-59.2001.1.00.0001'));
  }

  public function test_mod_value ()
  {
    $tools = new Codilo\CnjTools;

    $value = rand();
    $result = $value % 97;

    $this->assertEquals($result, $tools->mod_value($value));
    $this->assertEquals($result, $tools->mod_value((string) $value));
  }

  public function test_pad_string ()
  {
    $tools = new Codilo\CnjTools;

    $value = rand(1, 100);
    $pad_length = rand(5, 10);
    $padded_value = $tools->pad_string($value, $pad_length);

    $this->assertEquals($pad_length, strlen($padded_value));
  }

  public function test_sub_string ()
  {
    $tools = new Codilo\CnjTools;

    $value = (string) rand(1, 1000);
    $char = substr($value, 0, 1);

    $this->assertEquals($char, $tools->sub_string($value));
  }

  public function test_concat_values ()
  {
    $tools = new Codilo\CnjTools;

    $values = array('hello', '-', 'world');
    $this->assertEquals('hello-world', $tools->concat_values($values));
  }

  public function test_format_cnj ()
  {
    $tools = new Codilo\CnjTools;

    $this->assertEquals('0000001-59.2001.1.00.0001', $tools->format_cnj('1', '59', '2001', '1', '00', '1'));
  }

  public function test_sanitize_values () {
    $tools = new Codilo\CnjTools;

    $values = $tools->sanitize_values('1', '59', '2001', '1', '00', '1');

    $nnnnnnn = $values['nnnnnnn'];
    $dd = $values['dd'];
    $aaaa = $values['aaaa'];
    $j = $values['j'];
    $tr = $values['tr'];
    $oooo = $values['oooo'];

    $this->assertEquals(7, strlen($nnnnnnn));
    $this->assertEquals(2, strlen($dd));
    $this->assertEquals(4, strlen($aaaa));
    $this->assertEquals(1, strlen($j));
    $this->assertEquals(2, strlen($tr));
    $this->assertEquals(4, strlen($oooo));
  }
}