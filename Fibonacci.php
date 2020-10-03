<?php
declare(strict_types=1);


class Fibonacci
{
    private int $current = 1;
    private int $previous = 0;
    private int $new;

    public function getCurrent(): int
    {
        return $this->current;
    }

    public function getPrevious(): int
    {
        return $this->previous;
    }

    public function getNew(): int
    {
        return $this->new;
    }

    public function setCurrent(int $current): void
    {
        $this->current = $current;
    }

    public function setPrevious(int $previous): void
    {
        $this->previous = $previous;
    }

    public function setNew(int $new): void
    {
        $this->new = $new;
    }

    public function find(int $number): int
    {
        for ($i = 0; $i < $number; $i++) {
            if ($i === 0){
                echo $this->getPrevious() . PHP_EOL;
            }
            if ($i === 1){
                echo $this->getCurrent() . PHP_EOL;
            }
            $new = $this->getCurrent() + $this->getPrevious();
            $this->setNew($new);
            $previous = $this->getCurrent();
            $this->setPrevious($previous);
            $current = $this->getNew();
            $this->setCurrent($current);
            if ($this->getCurrent() > $number) {
                break;
            }
            echo $this->getCurrent() . PHP_EOL;
        }
        return $this->getCurrent();
    }
}

$fibonacci = new Fibonacci;
$fibonacci->find(100);