<?php
class SportsCar {
    public $make;
    public $model;
    public $maxSpeed;
    
    public function __construct($make, $model, $maxSpeed) {
        $this->make = $make;
        $this->model = $model;
        $this->maxSpeed = $maxSpeed;
    }
    
    public function accelerate() {
        return "The $this->make $this->model accelerates quickly!";
    }
    
    public function getMaxSpeed() {
        return "The maximum speed of $this->make $this->model is $this->maxSpeed km/h.";
    }
}

class LuxuryCar extends SportsCar {
    public $leatherSeats;
    public $soundSystem;
    public $ambientLighting;
    
    public function __construct($make, $model, $maxSpeed, $leatherSeats, $soundSystem, $ambientLighting) {
        parent::__construct($make, $model, $maxSpeed);
        $this->leatherSeats = $leatherSeats;
        $this->soundSystem = $soundSystem;
        $this->ambientLighting = $ambientLighting;
    }
    
    // Override the accelerate method
    public function accelerate() {
        return "The $this->make $this->model accelerates smoothly with refined power and elegance!";
    }
    
    // Additional luxury car features
    public function activateMassageSeats() {
        return "Activating massage feature on the $this->leatherSeats leather seats.";
    }
    
    public function playSoundSystem() {
        return "Playing audio through the $this->soundSystem sound system.";
    }
    
    public function setAmbientLighting($color) {
        return "Setting ambient lighting to $color.";
    }
}

// Create a LuxuryCar instance
$luxuryCar = new LuxuryCar("Mercedes-Benz", "S-Class", 250, "Nappa Leather", "Burmester 3D Surround", true);

// Demonstrate method overriding
echo $luxuryCar->accelerate(); // Calls the overridden accelerate method
echo "<br>";

// Demonstrate unique methods
echo $luxuryCar->activateMassageSeats();
echo "<br>";
echo $luxuryCar->playPremiumSoundSystem();
echo "<br>";
echo $luxuryCar->setAmbientLighting("soft blue");
echo "<br>";

// Access inherited method
echo $luxuryCar->getMaxSpeed();
