<!-- Create a simple Class called Vehicles. 
This Class should have the properties: name, model, makeYear, color, fuelType. 
Use a constructor. Create a method which will return the name and the model of this vehicle.
Instantiate a new objects from this Class.
Once you have done creating these objects, create a new Class called Ships. 
This Class will extend the Vehicles Class. 
Add new properties and methods to this Class.
Instantiate a new objects from this Class. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Vihicles
    {
        public $name;
        public $model;
        public $makeYear;
        public $color;
        public $fuelType;

        function __construct($carName, $carModel, $carYear, $carColor, $carFuel)
        {
            $this->name = $carName;
            $this->model = $carModel;
            $this->makeYear = $carYear;
            $this->color = $carColor;
            $this->fuelType = $carFuel;
        }

        public function carModel()
        {
            return  "This is " . $this->name . " " . $this->model . " car <br>";
        }

        public function condition()
        {
            if ($this->makeYear > 2018) {
                return "This is " . $this->name . " " . $this->model . ", this car is new<br>";
            } else {
                return "This is " . $this->name . " " . $this->model . ", this car is old<br>";
            }
        }
    }

    $carInfo = new Vihicles("Toyota", "Land Cruiser", "2000", "Gold", "Diesel");
    echo $carInfo->carModel();
    $carCondition = new Vihicles("Mazda", "X5", "2023", "Red", "Benzin");
    echo $carCondition->condition();


    class Ships extends Vihicles
    {
        public $power;
        public $numPassangers;

        function __construct($carName, $carModel, $carYear, $carColor, $carFuel, $power, $numSeats)
        {
            $this->name = $carName;
            $this->model = $carModel;
            $this->makeYear = $carYear;
            $this->color = $carColor;
            $this->fuelType = $carFuel;
            $this->power = $power;
            $this->numPassangers = $numSeats;
        }

        public function BoatModel()
        {
            return  "This is " . $this->name . " " . $this->model . " boat has " . " " . $this->power . " horse power and " . $this->numPassangers . " person can fit there <br>";
        }
    }

    $BoatInfo = new Ships("Princecraft", "Jazz", "2015", "White", NULL, "180", "9");
    echo $BoatInfo->BoatModel();

    ?>
</body>

</html>