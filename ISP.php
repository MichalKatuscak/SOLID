<?php

// interface segregation principle - bad example
interface IWorker {
	public function work();
	public function eat();
}

class People implements IWorker{
	public function work() {
		echo 'People work';
	}
	public function eat() {
		echo 'People eat';
	}
}

class Robot implements IWorker{
	public function work() {
		echo 'Robot work';
	}

    public function eat() {
        echo 'Robot eat';
    }
}

class Manager {
    private $worker;

	public function setWorker(IWorker $w) {
		$this->worker = $w;
	}

	public function manage() {
        $this->worker->work();
	}
}

//Main process
$robot = new Robot();
$manager = new Manager();

$manager->setWorker($robot);
$manager->manage();
