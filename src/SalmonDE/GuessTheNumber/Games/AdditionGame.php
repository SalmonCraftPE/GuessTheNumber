<?php
declare(strict_types = 1);

namespace SalmonDE\GuessTheNumber\Games;

class AdditionGame extends NumberGame {

    public function __construct(string $name, array $options, array $prizes, string $playPermission, string $startPermission){
        parent::__construct($name, $prizes, $playPermission, $startPermission);

        $this->firstIntMin = (int) $options['min'];
        $this->firstIntMax = (int) $options['max'];

        $this->secondIntMin = &$this->firstIntMin;
        $this->secondIntMax = &$this->firstIntMax;
    }

    public function initGame(){
        $this->firstInt = random_int($this->firstIntMin, $this->firstIntMax);
        $this->secondInt = random_int($this->secondIntMin, $this->secondIntMax);

        $this->calculation = $this->firstInt.' + '.$this->secondInt;
        $this->solution = $this->firstInt + $this->secondInt;
    }

    public function resetGame(){
        $this->firstInt = null;
        $this->secondInt = null;

        $this->calculation = null;
        $this->solution = null;
    }

    public function getExample(): string{
        $firstInt = $this->firstInt;
        $secondInt = $this->secondInt;

        while($firstInt == $this->firstInt){
            $firstInt = random_int($this->firstIntMin, $this->firstIntMax);
        }

        while($secondInt == $this->secondInt){
            $secondInt = random_int($this->secondIntMin, $this->secondIntMax);
        }

        return $firstInt.' + '.$secondInt.' = '.($firstInt + $secondInt);
    }

}
