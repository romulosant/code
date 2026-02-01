<?php


/// verificar idade


/**
 * Calcula a idade com base no ano de nascimento
 *
 * @param int $anoNascimento
 * @return int Idade atual
 */
     function verificarIdade( int $anoNarcimento) : int
     {
         $anoAtual = date("Y");
         $idadeAtual = $anoAtual - $anoNarcimento;

         return $idadeAtual;
     }


/// criando uma função para verificar se pode entrar na balada
    function entrarNaBalada(int $anoNarcimento, bool $estaAcompanhado = false) :string
    {
        $idadeParaEntrar = 18;
        $idadeAtual = verificarIdade($anoNarcimento);

        if($idadeAtual >= $idadeParaEntrar){
            return 'Voce pode entrar';
        }elseif ($estaAcompanhado ) {
            return 'voce pode entrar com o acompanhante ';
        } else {
            return 'voce não pode entrar';
        }
    }


