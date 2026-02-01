<?php
declare(strict_types=1);

/**
 * Calcula o salário anual com base no salário mensal.
 *
 * Utiliza a constante QTD_ANO para definir
 * a quantidade de meses no ano.
 *
 * @param float $salarioMensal Salário recebido por mês
 * @return float Salário anual
 */
function salarioAnual(float $salarioMensal): float
{
    return $salarioMensal * QTD_ANO;
}

/**
 * Calcula quantos anos faltam para a pessoa se aposentar.
 *
 * A idade mínima para aposentadoria é definida
 * pelas constantes:
 * - IDADE_PARA_APOSENTAR_MASCULINA
 * - IDADE_PARA_APOSENTAR_FEMININA
 *
 * @param int $idade Idade atual da pessoa
 * @param string $sexo Sexo da pessoa (M ou F)
 * @return int Anos restantes para aposentadoria
 */
function anosParaSeAposentar(int $idade, string $sexo): int
{
    $sexo = strtoupper($sexo);

    $idadeAposentadoria = $sexo === 'M'
        ? IDADE_PARA_APOSENTAR_MASCULINA
        : IDADE_PARA_APOSENTAR_FEMININA;

    $anos = $idadeAposentadoria - $idade;

    return $anos > 0 ? $anos : 0;
}

/**
 * Converte um número para o formato monetário brasileiro.
 *
 * Utiliza as constantes:
 * - QTD_DECIMAL  → quantidade de casas decimais
 * - SP_DECIMAL  → separador decimal
 * - SP_MILHAR   → separador de milhar
 *
 * @param float $valor Valor numérico a ser formatado
 * @return string Valor formatado em reais
 *
 * @example transformarEmReal(1234.5)
 * Retorna: 1.234,50
 */
function transformarEmReal(float $valor): string
{
    return number_format(
        $valor,
        QTD_DECIMAL,
        SP_DECIMAL,
        SP_MILHAR
    );
}
