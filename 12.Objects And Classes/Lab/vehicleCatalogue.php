<?php

class Truck
{
    private $brand;
    private $modelTruck;
    private $weight;

    /**
     * Truck constructor.
     * @param $brand
     * @param $modelTruck
     * @param $weight
     */
    public function __construct($brand, $modelTruck, $weight)
    {
        $this->brand = $brand;
        $this->modelTruck = $modelTruck;
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->modelTruck;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }
}

class Car
{
    private $brand;
    private $modelCar;
    private $horsePower;

    /**
     * Car constructor.
     * @param $brand
     * @param $modelCar
     * @param $horsePower
     */
    public function __construct($brand, $modelCar, $horsePower)
    {
        $this->brand = $brand;
        $this->modelCar = $modelCar;
        $this->horsePower = $horsePower;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @return mixed
     */
    public function getModelCar()
    {
        return $this->modelCar;
    }

    /**
     * @return mixed
     */
    public function getHorsePower()
    {
        return $this->horsePower;
    }
}

class Catalog
{
    private $cars = [];
    private $trucks = [];

    /**
     * Catalog constructor.
     * @param $cars
     * @param $trucks
     */
    public function __construct($cars, $trucks)
    {
        $this->cars = $cars;
        $this->trucks = $trucks;
    }

    /**
     * @return mixed
     */
    public function getCars(): Array
    {
        return $this->cars;
    }

    /**
     * @return mixed
     */
    public function getTrucks(): Array
    {
        return $this->trucks;
    }
}

$input = readline();
$cars = [];
$trucks = [];

while ($input != "end") {

    $tokens = explode("/", $input);
    $type = $tokens[0];
    $brand = $tokens[1];
    $model = $tokens[2];
    $powerWeight = $tokens[3];

    if ($type == "Car") {

        $car = new Car($brand, $model, $powerWeight);
        array_push($cars, $car);

    } elseif ($type == "Truck") {

        $truck = new Truck($brand, $model, $powerWeight);
        array_push($trucks, $truck);
    }

    $input = readline();
}

usort($cars, function ($a, $b) {
    return $a->getBrand() <=> $b->getBrand();
});

usort($trucks, function ($a, $b) {
    return $a->getBrand() <=> $b->getBrand();
});

$result = [];

$catalog = new Catalog($cars, $trucks);
array_push($result, $catalog);

foreach ($result as $item) {

    if (count($item->getCars()) > 0) {

        echo "Cars:" . PHP_EOL;

        foreach ($item->getCars() as $value) {

            echo "{$value->getBrand()}: {$value->getModelCar()} - {$value->getHorsePower()}hp" . PHP_EOL;
        }
    }
    if (count($item->getTrucks()) > 0) {

        echo "Trucks:" . PHP_EOL;

        foreach ($item->getTrucks() as $value) {

            echo "{$value->getBrand()}: {$value->getModel()} - {$value->getWeight()}kg" . PHP_EOL;
        }
    }
}