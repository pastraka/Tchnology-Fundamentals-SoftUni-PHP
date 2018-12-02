<?php

class Box
{
    private $serialNumber;
    private $item;
    private $quantity;
    private $itemPrice;
    private $priceForBox;

    /**
     * @return mixed
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * Box constructor.
     * @param $serialNumber
     * @param $item
     * @param $quantity
     * @param $itemPrice
     * @param $priceForBox
     */
    public function __construct($serialNumber, $item, $quantity, $itemPrice, $priceForBox)
    {
        $this->serialNumber = $serialNumber;
        $this->item = $item;
        $this->quantity = $quantity;
        $this->itemPrice = $itemPrice;
        $this->priceForBox = $priceForBox;
    }

    /**
     * @return mixed
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * @return mixed
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return mixed
     */
    public function getPriceForBox()
    {
        return $this->priceForBox;
    }
}

$finalList = [];
$input = readline();

while ($input != "end") {

    $tokens = explode(" ", $input);
    $serialNumber = $tokens[0];
    $item = $tokens[1];
    $quantity = intval($tokens[2]);
    $itemPrice = floatval($tokens[3]);
    $priceForBox = $quantity * $itemPrice;

    $boxList = new Box($serialNumber, $item, $quantity, $itemPrice, $priceForBox);
    array_push($finalList, $boxList);


    $input = readline();
}

usort($finalList, function ($a, $b) {

    return ($b->getPriceForBox() - $a->getPriceForBox());
});

foreach ($finalList as $item) {

    echo $item->getSerialNumber() . PHP_EOL;

    echo "-- " . $item->getItem() . " - $" . number_format($item->getItemPrice(), 2, ".", "") . ": " . $item->getQuantity() . PHP_EOL;

    echo "-- $" . number_format($item->getPriceForBox(), 2, ".", "") . PHP_EOL;
}
