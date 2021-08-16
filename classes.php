<?php

class dados
{
    function dados()
    {
        $this->a = 1;
        $this->b = 12;
        $this->c = -13;
        $this->delta = null;
        $this->x1 = null;
        $this->x2 = null;
    }
}

class calculo_deltas
{
    function calculo_delta()
    {
        $this->delta = $this->b * $this->b - (4 * $this->a * $this->c);
    }
}

class calculo_xs
{
    function calculo_x1()
    {
        $this->x1 = (-$this->b + sqrt($this->delta)) / (2 * $this->a);
    }

    function calculo_x2()
    {
        $this->x2 = (-$this->b - sqrt($this->delta)) / (2 * $this->a);
    }
}