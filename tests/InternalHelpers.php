<?php

class InternalHelpersTest extends PHPUnit\Framework\TestCase
{
  private $TOTAL_TESTS = 50;

  public function test_mod_value ()
  {
    $tools = new Codilo\CnjTools;

    // Se um valor null é informado, ele é tratado como zero
    $this->assertEquals(0, $tools->mod_value(null));

    for ($i = 0; $i < $this->TOTAL_TESTS; $i++) {
      $value = rand();
      $result = $value % 97;
  
      $this->assertEquals($result, $tools->mod_value($value));
      $this->assertEquals($result, $tools->mod_value((string) $value));
      
      // Se $value for número ou string, o resultado deve ser o mesmo.
      $this->assertEquals($tools->mod_value($value), $tools->mod_value((string) $value));
    }
  }

  public function test_pad_string ()
  {
    $tools = new Codilo\CnjTools;

    // Se o tamanho do $pad_length for menor do que o $value, o $value é retornado.
    $this->assertEquals('5000', $tools->pad_string('5000', 2));

    // Teste com $value sendo número
    for ($i = 0; $i < $this->TOTAL_TESTS; $i++) {
      // $value aleatório entre 1 e 100, ou seja, no mínimo 1 caractere e no máximo 3.
      $value = rand(1, 100);

      // $pad_length aleatório entre 5 e 10, ou seja, sempre maior do que a quantidade de caracteres do $value.
      $pad_length = rand(5, 10);
      $padded_value = $tools->pad_string($value, $pad_length);
  
      // A string final deve possuir a mesma quantidade de caracteres do $pad_length.
      $this->assertEquals($pad_length, strlen($padded_value));
    }

    // Teste com $value sendo string
    for ($i = 0; $i < $this->TOTAL_TESTS; $i++) {
      // $value aleatório entre 1 e 100, ou seja, no mínimo 1 caractere e no máximo 3.
      $value = (string) rand(1, 100);

      // $pad_length aleatório entre 5 e 10, ou seja, sempre maior do que a quantidade de caracteres do $value.
      $pad_length = rand(5, 10);
      $padded_value = $tools->pad_string($value, $pad_length);
  
      // A string final deve possuir a mesma quantidade de caracteres do $pad_length.
      $this->assertEquals($pad_length, strlen($padded_value));
    }
  }

  public function test_sub_string ()
  {
    $tools = new Codilo\CnjTools;

    for ($i = 0; $i < $this->TOTAL_TESTS; $i++) {
      $value = (string) rand(1, 5000);
      $char = substr($value, 0, 1);

      // O resultado deve sempre ser o primeiro caractere da string $value
      $this->assertEquals($char, $tools->sub_string($value));
    }
  }

  public function test_concat_values ()
  {
    $tools = new Codilo\CnjTools;

    // Deve concatenar os elementos da array, independente da quantidade.
    $this->assertEquals('hello', $tools->concat_values(['hello']));
    $this->assertEquals('helloworld', $tools->concat_values(['hello', 'world']));
    $this->assertEquals('hello-world', $tools->concat_values(['hello', '-', 'world']));
    $this->assertEquals('hello-world1', $tools->concat_values(['hello', '-', 'world', '1']));
    $this->assertEquals('hello-world12', $tools->concat_values(['hello', '-', 'world', '1', 2]));
    $this->assertEquals('hello-world123', $tools->concat_values(['hello', '-', 'world', '1', 2, '3']));
  }

  public function test_format_cnj ()
  {
    $tools = new Codilo\CnjTools;

    $this->assertEquals('0000067-12.0002.1.00.0004', $tools->format_cnj('67', '12', '2', '1', '0', '4'));
    $this->assertEquals('0000001-59.2001.1.00.0001', $tools->format_cnj('1', '59', '2001', '1', '00', '1'));
    $this->assertEquals('0000001-35.0001.1.01.0001', $tools->format_cnj('0000001', '35', '0001', '1', '01', '0001'));
  }

  public function test_sanitize_values () {
    $tools = new Codilo\CnjTools;

    // Adiciona os zeros no começo de cada item para manter o seu padrão.
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