<?php

//ogólna klasa typu posiłków
class Food {
    public string $type;

    public function __construct(string $type) {
        $this->type = $type;
    }
}

//Typy posiłków
$meat = new Food("mięso");
$plant = new Food("rośliny");

//Bazowa klasa - zwierząt
class Animal {
    public string $name;
    public string $species;
    public string $diet; // "mięsożerne", "roślinożerne", "wszystkożerne"
    public bool $hasFur; // Czy zwierzę ma futro

    public function __construct(string $name, string $species, string $diet, bool $hasFur = false) {
        $this->name = $name;
        $this->species = $species;
        $this->diet = $diet;
        $this->hasFur = $hasFur;
    }

    public function __toString(): string {
        return "{$this->species} {$this->name}";
    }

    //dieta
    public function eat(Food $food): string {
        if ($this->diet === "mięsożerne" && $food->type !== "mięso") {
            return "{$this} nie je roślin!<br>";
        } elseif ($this->diet === "roślinożerne" && $food->type !== "rośliny") {
            return "{$this} nie je mięsa!<br>";
        }
        return "{$this} zjada {$food->type}.";
    }

    public function groom(): ?string {
        if ($this->hasFur) {
            return "{$this} jest czesany.<br>";
        }
        return null;
    }
}

//Klasy zwięrząt
class Tiger extends Animal {
    public function __construct(string $name) {
        parent::__construct($name, "Tygrys", "mięsożerne", true);
    }
}

class Elephant extends Animal {
    public function __construct(string $name) {
        parent::__construct($name, "Słoń", "roślinożerne");
    }
}

class Rhino extends Animal {
    public function __construct(string $name) {
        parent::__construct($name, "Nosorożec", "roślinożerne");
    }
}

class Fox extends Animal {
    public function __construct(string $name) {
        parent::__construct($name, "Lis", "wszystkożerne", true);
    }
}

class SnowLeopard extends Animal {
    public function __construct(string $name) {
        parent::__construct($name, "Irbis śnieżny", "mięsożerne", true);
    }
}

class Rabbit extends Animal {
    public function __construct(string $name) {
        parent::__construct($name, "Królik", "roślinożerne", true);
    }
}

// Klasa ZOO do zarządzania zwierzętami
class Zoo {
    private array $animals = [];

    public function addAnimal(Animal $animal): void {
        $this->animals[] = $animal;
        echo "{$animal} został dodany do ZOO.<br>";
    }

    public function feedAll(Food $food): void {
        foreach ($this->animals as $animal) {
            echo $animal->eat($food) . "<br>";
        }
    }

    public function groomAll(): void {
        foreach ($this->animals as $animal) {
            $groomingResult = $animal->groom();
            if ($groomingResult) {
                echo $groomingResult . "<br>";
            }
        }
    }
}


$zoo = new Zoo();

$tiger = new Tiger("Leon");
$elephant = new Elephant("Paweł");
$rhino = new Rhino("Patrycja");
$fox = new Fox("Jan");
$snowLeopard = new SnowLeopard("Karol");
$rabbit = new Rabbit("Adam");

//Dodawanie
$zoo->addAnimal($tiger);
$zoo->addAnimal($elephant);
$zoo->addAnimal($rhino);
$zoo->addAnimal($fox);
$zoo->addAnimal($snowLeopard);
$zoo->addAnimal($rabbit);

$zoo->feedAll($meat);  // Karmienie mięsem
$zoo->feedAll($plant); // Karmienie roślinami
$zoo->groomAll();      // Czesanie zwierząt
