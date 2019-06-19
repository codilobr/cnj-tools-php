<?php

class OriginCnjTest extends PHPUnit\Framework\TestCase
{
  public function test_invalid ()
  {
    $tools = new Codilo\CnjTools;

    $this->assertEquals(false, $tools->origin_cnj('0000001-32.2001.1.01.0001'));
    $this->assertEquals(false, $tools->origin_cnj('0000001-35.0001.1.01.0001'));
    $this->assertEquals(false, $tools->origin_cnj('1-32.2001.1.01.0001'));
    $this->assertEquals(false, $tools->origin_cnj('1-35.0001.1.01.0001'));
    $this->assertEquals(false, $tools->origin_cnj('1-32.2001.1.01.1'));
    $this->assertEquals(false, $tools->origin_cnj('1-35.0001.1.01.1'));
    $this->assertEquals(false, $tools->origin_cnj('1-32.2001.1.1.1'));
    $this->assertEquals(false, $tools->origin_cnj('1-35.0001.1.1.1'));
    $this->assertEquals(false, $tools->origin_cnj('1-35.1.1.1.1'));
    $this->assertEquals(false, $tools->origin_cnj('00000013220011010001'));
    $this->assertEquals(false, $tools->origin_cnj('13220011010001'));
    $this->assertEquals(false, $tools->origin_cnj('0000001-01.2001.1.01.0001'));
    $this->assertEquals(false, $tools->origin_cnj('1-01.2001.1.01.0001'));
    $this->assertEquals(false, $tools->origin_cnj('1-01.2001.1.01.1'));
    $this->assertEquals(false, $tools->origin_cnj('1-01.2001.1.1.1'));
    $this->assertEquals(false, $tools->origin_cnj('00000010120011010001'));
    $this->assertEquals(false, $tools->origin_cnj('10120011010001'));
    $this->assertEquals(false, $tools->origin_cnj('999999/SP'));
  }

  public function test_unknown ()
  {
    $tools = new Codilo\CnjTools;

    $this->assertEquals(false, $tools->origin_cnj('0000001-32.2001.1.01.0001'));
    $this->assertEquals(false, $tools->origin_cnj('0000001-48.2001.2.01.0001'));
    $this->assertEquals(false, $tools->origin_cnj('0000001-64.2001.3.01.0001'));
    $this->assertEquals(false, $tools->origin_cnj('0000001-42.2001.4.06.0001'));
    $this->assertEquals(false, $tools->origin_cnj('0000001-30.2001.5.25.0001'));
    $this->assertEquals(false, $tools->origin_cnj('0000001-62.2001.6.28.0001'));
    $this->assertEquals(false, $tools->origin_cnj('0000001-95.2001.7.13.0001'));
    $this->assertEquals(false, $tools->origin_cnj('0000001-94.2001.8.28.0001'));
    $this->assertEquals(false, $tools->origin_cnj('0000001-40.2001.9.27.0001'));
  }

  public function test_formatted ()
  {
    $tools = new Codilo\CnjTools;

    $this->assertEquals('Supremo Tribunal Federal', $tools->origin_cnj('0000001-59.2001.1.00.0001'));
    $this->assertEquals('Conselho Nacional de Justiça', $tools->origin_cnj('0000001-75.2001.2.00.0001'));
    $this->assertEquals('Superior Tribunal de Justiça', $tools->origin_cnj('0000001-91.2001.3.00.0001'));
    $this->assertEquals('Conselho da Justiça Federal', $tools->origin_cnj('0000001-05.2001.4.90.0001'));
    $this->assertEquals('Tribunal Regional Federal da 1ª Região', $tools->origin_cnj('0000001-80.2001.4.01.0001'));
    $this->assertEquals('Tribunal Regional Federal da 2ª Região', $tools->origin_cnj('0000001-53.2001.4.02.0001'));
    $this->assertEquals('Tribunal Regional Federal da 3ª Região', $tools->origin_cnj('0000001-26.2001.4.03.0001'));
    $this->assertEquals('Tribunal Regional Federal da 4ª Região', $tools->origin_cnj('0000001-96.2001.4.04.0001'));
    $this->assertEquals('Tribunal Regional Federal da 5ª Região', $tools->origin_cnj('0000001-69.2001.4.05.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 10ª Região', $tools->origin_cnj('0000001-47.2001.5.10.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 11ª Região', $tools->origin_cnj('0000001-20.2001.5.11.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 12ª Região', $tools->origin_cnj('0000001-90.2001.5.12.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 13ª Região', $tools->origin_cnj('0000001-63.2001.5.13.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 14ª Região', $tools->origin_cnj('0000001-36.2001.5.14.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 15ª Região', $tools->origin_cnj('0000001-09.2001.5.15.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 16ª Região', $tools->origin_cnj('0000001-79.2001.5.16.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 17ª Região', $tools->origin_cnj('0000001-52.2001.5.17.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 18ª Região', $tools->origin_cnj('0000001-25.2001.5.18.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 19ª Região', $tools->origin_cnj('0000001-95.2001.5.19.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 20ª Região', $tools->origin_cnj('0000001-68.2001.5.20.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 21ª Região', $tools->origin_cnj('0000001-41.2001.5.21.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 22ª Região', $tools->origin_cnj('0000001-14.2001.5.22.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 23ª Região', $tools->origin_cnj('0000001-84.2001.5.23.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 24ª Região', $tools->origin_cnj('0000001-57.2001.5.24.0001'));
    $this->assertEquals('Conselho Superior da Justiça do Trabalho', $tools->origin_cnj('0000001-21.2001.5.90.0001'));
    $this->assertEquals('Tribunal Superior do Trabalho', $tools->origin_cnj('0000001-26.2001.5.00.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 1ª Região', $tools->origin_cnj('0000001-96.2001.5.01.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 2ª Região', $tools->origin_cnj('0000001-69.2001.5.02.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 3ª Região', $tools->origin_cnj('0000001-42.2001.5.03.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 4ª Região', $tools->origin_cnj('0000001-15.2001.5.04.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 5ª Região', $tools->origin_cnj('0000001-85.2001.5.05.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 6ª Região', $tools->origin_cnj('0000001-58.2001.5.06.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 7ª Região', $tools->origin_cnj('0000001-31.2001.5.07.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 8ª Região', $tools->origin_cnj('0000001-04.2001.5.08.0001'));
    $this->assertEquals('Tribunal Regional do Trabalho da 9ª Região', $tools->origin_cnj('0000001-74.2001.5.09.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral do Maranhão', $tools->origin_cnj('0000001-63.2001.6.10.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral do Mato Grosso', $tools->origin_cnj('0000001-36.2001.6.11.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral do Mato Grosso do Sul', $tools->origin_cnj('0000001-09.2001.6.12.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral de Minas Gerais', $tools->origin_cnj('0000001-79.2001.6.13.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral do Pará', $tools->origin_cnj('0000001-52.2001.6.14.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral da Paraíba', $tools->origin_cnj('0000001-25.2001.6.15.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral do Paraná', $tools->origin_cnj('0000001-95.2001.6.16.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral de Pernambuco', $tools->origin_cnj('0000001-68.2001.6.17.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral do Piauí', $tools->origin_cnj('0000001-41.2001.6.18.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral do Rio de Janeiro', $tools->origin_cnj('0000001-14.2001.6.19.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral do Rio Grande do Norte', $tools->origin_cnj('0000001-84.2001.6.20.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral do Rio Grande do Sul', $tools->origin_cnj('0000001-57.2001.6.21.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral de Rondônia', $tools->origin_cnj('0000001-30.2001.6.22.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral de Roraima', $tools->origin_cnj('0000001-03.2001.6.23.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral de Santa Catarina', $tools->origin_cnj('0000001-73.2001.6.24.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral de Sergipe', $tools->origin_cnj('0000001-46.2001.6.25.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral de São Paulo', $tools->origin_cnj('0000001-19.2001.6.26.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral de Tocantins', $tools->origin_cnj('0000001-89.2001.6.27.0001'));
    $this->assertEquals('Tribunal Superior Eleitoral', $tools->origin_cnj('0000001-42.2001.6.00.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral do Acre', $tools->origin_cnj('0000001-15.2001.6.01.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral de Alagoas', $tools->origin_cnj('0000001-85.2001.6.02.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral do Amapá', $tools->origin_cnj('0000001-58.2001.6.03.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral do Amazonas', $tools->origin_cnj('0000001-31.2001.6.04.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral da Bahia', $tools->origin_cnj('0000001-04.2001.6.05.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral do Ceará', $tools->origin_cnj('0000001-74.2001.6.06.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral do Distrito Federal e dos Territórios', $tools->origin_cnj('0000001-47.2001.6.07.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral do Espírito Santo', $tools->origin_cnj('0000001-20.2001.6.08.0001'));
    $this->assertEquals('Tribunal Regional Eleitoral de Goiás', $tools->origin_cnj('0000001-90.2001.6.09.0001'));
    $this->assertEquals('10ª Circunscrição Judiciária Militar', $tools->origin_cnj('0000001-79.2001.7.10.0001'));
    $this->assertEquals('11ª Circunscrição Judiciária Militar', $tools->origin_cnj('0000001-52.2001.7.11.0001'));
    $this->assertEquals('12ª Circunscrição Judiciária Militar', $tools->origin_cnj('0000001-25.2001.7.12.0001'));
    $this->assertEquals('Superior Tribunal Militar', $tools->origin_cnj('0000001-58.2001.7.00.0001'));
    $this->assertEquals('1ª Circunscrição Judiciária Militar', $tools->origin_cnj('0000001-31.2001.7.01.0001'));
    $this->assertEquals('2ª Circunscrição Judiciária Militar', $tools->origin_cnj('0000001-04.2001.7.02.0001'));
    $this->assertEquals('3ª Circunscrição Judiciária Militar', $tools->origin_cnj('0000001-74.2001.7.03.0001'));
    $this->assertEquals('4ª Circunscrição Judiciária Militar', $tools->origin_cnj('0000001-47.2001.7.04.0001'));
    $this->assertEquals('5ª Circunscrição Judiciária Militar', $tools->origin_cnj('0000001-20.2001.7.05.0001'));
    $this->assertEquals('6ª Circunscrição Judiciária Militar', $tools->origin_cnj('0000001-90.2001.7.06.0001'));
    $this->assertEquals('7ª Circunscrição Judiciária Militar', $tools->origin_cnj('0000001-63.2001.7.07.0001'));
    $this->assertEquals('8ª Circunscrição Judiciária Militar', $tools->origin_cnj('0000001-36.2001.7.08.0001'));
    $this->assertEquals('9ª Circunscrição Judiciária Militar', $tools->origin_cnj('0000001-09.2001.7.09.0001'));
    $this->assertEquals('Tribunal de Justiça do Maranhão', $tools->origin_cnj('0000001-95.2001.8.10.0001'));
    $this->assertEquals('Tribunal de Justiça do Mato Grosso', $tools->origin_cnj('0000001-68.2001.8.11.0001'));
    $this->assertEquals('Tribunal de Justiça do Mato Grosso do Sul', $tools->origin_cnj('0000001-41.2001.8.12.0001'));
    $this->assertEquals('Tribunal de Justiça de Minas Gerais', $tools->origin_cnj('0000001-14.2001.8.13.0001'));
    $this->assertEquals('Tribunal de Justiça do Pará', $tools->origin_cnj('0000001-84.2001.8.14.0001'));
    $this->assertEquals('Tribunal de Justiça da Paraíba', $tools->origin_cnj('0000001-57.2001.8.15.0001'));
    $this->assertEquals('Tribunal de Justiça do Paraná', $tools->origin_cnj('0000001-30.2001.8.16.0001'));
    $this->assertEquals('Tribunal de Justiça de Pernambuco', $tools->origin_cnj('0000001-03.2001.8.17.0001'));
    $this->assertEquals('Tribunal de Justiça do Piauí', $tools->origin_cnj('0000001-73.2001.8.18.0001'));
    $this->assertEquals('Tribunal de Justiça do Rio de Janeiro', $tools->origin_cnj('0000001-46.2001.8.19.0001'));
    $this->assertEquals('Tribunal de Justiça do Rio Grande do Norte', $tools->origin_cnj('0000001-19.2001.8.20.0001'));
    $this->assertEquals('Tribunal de Justiça do Rio Grande do Sul', $tools->origin_cnj('0000001-89.2001.8.21.0001'));
    $this->assertEquals('Tribunal de Justiça de Rondônia', $tools->origin_cnj('0000001-62.2001.8.22.0001'));
    $this->assertEquals('Tribunal de Justiça de Roraima', $tools->origin_cnj('0000001-35.2001.8.23.0001'));
    $this->assertEquals('Tribunal de Justiça de Santa Catarina', $tools->origin_cnj('0000001-08.2001.8.24.0001'));
    $this->assertEquals('Tribunal de Justiça de Sergipe', $tools->origin_cnj('0000001-78.2001.8.25.0001'));
    $this->assertEquals('Tribunal de Justiça de São Paulo', $tools->origin_cnj('0000001-51.2001.8.26.0001'));
    $this->assertEquals('Tribunal de Justiça de Tocantins', $tools->origin_cnj('0000001-24.2001.8.27.0001'));
    $this->assertEquals('Tribunal de Justiça do Acre', $tools->origin_cnj('0000001-47.2001.8.01.0001'));
    $this->assertEquals('Tribunal de Justiça de Alagoas', $tools->origin_cnj('0000001-20.2001.8.02.0001'));
    $this->assertEquals('Tribunal de Justiça do Amapá', $tools->origin_cnj('0000001-90.2001.8.03.0001'));
    $this->assertEquals('Tribunal de Justiça do Amazonas', $tools->origin_cnj('0000001-63.2001.8.04.0001'));
    $this->assertEquals('Tribunal de Justiça da Bahia', $tools->origin_cnj('0000001-36.2001.8.05.0001'));
    $this->assertEquals('Tribunal de Justiça do Ceará', $tools->origin_cnj('0000001-09.2001.8.06.0001'));
    $this->assertEquals('Tribunal de Justiça do Distrito Federal e dos Territórios', $tools->origin_cnj('0000001-79.2001.8.07.0001'));
    $this->assertEquals('Tribunal de Justiça do Espírito Santo', $tools->origin_cnj('0000001-52.2001.8.08.0001'));
    $this->assertEquals('Tribunal de Justiça de Goiás', $tools->origin_cnj('0000001-25.2001.8.09.0001'));
    $this->assertEquals('Tribunal de Justiça Militar de Minas Gerais', $tools->origin_cnj('0000001-30.2001.9.13.0001'));
    $this->assertEquals('Tribunal de Justiça Militar do Rio Grande do Sul', $tools->origin_cnj('0000001-08.2001.9.21.0001'));
    $this->assertEquals('Tribunal de Justiça Militar de São Paulo', $tools->origin_cnj('0000001-67.2001.9.26.0001'));
  }

  public function test_unformatted ()
  {
    $tools = new Codilo\CnjTools;

    $this->assertEquals(false, $tools->origin_cnj('string'));
    $this->assertEquals(false, $tools->origin_cnj('string string string string'));
    $this->assertEquals('Tribunal de Justiça do Mato Grosso', $tools->origin_cnj('00011268-83.2012.811.0055'));
    $this->assertEquals('Tribunal de Justiça de Goiás', $tools->origin_cnj('506354-19.2011.08.09.0051'));
  }
}