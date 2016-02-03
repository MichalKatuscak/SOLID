<?php
// interface segregation principle - good example
interface IWorker extends IWorkable, IFeedable {
}

interface IWorkable {
	public function work();
}

interface IFeedable{
	public function eat();
}


class Worker implements IWorkable,IFeedable{
	public function work() {
		echo 'Worker work';
	}

	public function eat() {
        echo 'Worker eat';
	}
}

class Robot implements IWorkable{
	public function work() {
        echo 'Robot work';
	}
}

class SuperWorker implements IWorker{
    public function work() {
        echo 'SuperWorker work';
    }

    public function eat() {
        echo 'SuperWorker eat';
    }
}

class Manager {
	private $worker;

	public function setWorker(IWorkable $w) {
		$this->worker = $w;
	}

	public function manage() {
        $this->worker->work();
	}
}

//Main process
$robot = new Robot();
//$worker = new Worker();
//$superworker = new SuperWorker();
$manager = new Manager();

$manager->setWorker($robot);
//$manager->setWorker($worker);
//$manager->setWorker($superworker);
$manager->manage();