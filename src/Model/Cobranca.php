<?php

namespace Umbrella\Ya\RetornoBoleto\Model;

class Cobranca
{
    protected $qtdTitulos;
    protected $valorTotal;
    protected $numAviso;

    public function getQtdTitulos()
    {
        return $this->qtdTitulos;
    }

    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    public function getNumAviso()
    {
        return $this->numAviso;
    }

    /**
     * @param string $qtdTitulos
     */
    public function setQtdTitulos($qtdTitulos)
    {
        $this->qtdTitulos = $qtdTitulos;
        return $this;
    }

    public function setValorTotal($valorTotal)
    {
        $this->valorTotal = $valorTotal;
        return $this;
    }

    /**
     * @param string $numAviso
     */
    public function setNumAviso($numAviso)
    {
        $this->numAviso = $numAviso;
        return $this;
    }
}
