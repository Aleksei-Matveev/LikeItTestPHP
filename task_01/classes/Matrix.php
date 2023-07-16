<?php

namespace TestTaskLikeIT;

class Matrix
{
    private $matrix;
    private $sizeMatrix;
    private $rageRandom;

    public function __construct()
    {
        $this->sizeMatrix();
        $this->rageRandom();
    }

    /**
     * @param int $size Set size matrix. Default 7
     * @return $this return this object
     */
    function sizeMatrix(int $size = 7): static
    {
        $this->sizeMatrix = $size;
        return $this;
    }

    /**
     * @param array $rage Set rage for random item. Default [10, 99]
     * @return $this return this object
     */
    function rageRandom(array $rage = [10, 99]): static
    {
        $this->rageRandom = $rage;
        return $this;
    }

    /**
     * @return array Return array matrix
     */
    function getMatrix(): array
    {
        $this->fillMatrix();
        return $this->matrix;
    }

    /**
     *  Fill matrix random integer
     */
    private function fillMatrix()
    {
        for ($n = 0; $n < $this->sizeMatrix; $n++) {
            for ($m = 0; $m < $this->sizeMatrix; $m++) {
                $this->matrix[$n][$m] = $this->randomItem();
            }
        }
    }

    /**
     * @return int return random integer
     */
    private function randomItem(): int
    {
        return rand($this->rageRandom[0], $this->rageRandom[1]);
    }
}