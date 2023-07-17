<?php

namespace TestTaskLikeIT;

class Matrix
{
    private array $matrix;
    private $sizeMatrix;
    private $rageRandom;
    private bool $calculateSumOfDiagonals;
    private int $sumLeftDiagonal = 0;
    private int $sumRightDiagonal = 0;

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
     * @return \stdClass Return array matrix
     */
    function getMatrix(): \stdClass
    {
        $this->fillMatrix();
        $obj = new \stdClass();
        $obj->matrix = $this->matrix;
        if ($this->calculateSumOfDiagonals) {
            $this->getSumDiagonal();
            $obj->sumLeftDiagonal = $this->sumLeftDiagonal;
            $obj->sumRightDiagonal = $this->sumRightDiagonal;
        }
        return $obj;
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

    /**
     * Set calculate the sum of the diagonals
     */
    public function calculateSumOfDiagonals()
    {
        $this->calculateSumOfDiagonals = true;
        return $this;
    }

    private function getSumDiagonal()
    {
        for ($i = 0; $i < $this->sizeMatrix; $i++) {
            $this->sumLeftDiagonal += $this->matrix[$i][$i];
            $this->sumRightDiagonal += $this->matrix[$i][($i ^ $this->sizeMatrix) - 1];
        }
    }
}