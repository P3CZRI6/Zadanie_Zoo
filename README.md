# Zadanie_Zoo

## Features
**Animal Class Hierarchy:**
- A base class Animal that defines common properties and methods.
- Various animal subclasses, including Tiger, Elephant, Rhino, Fox, SnowLeopard, and Rabbit, each initialized with specific attributes.

**Diet Management:**
- Animals can be carnivorous, herbivorous, or omnivorous, affecting their food consumption behavior.

**Grooming System:**
- Animals with fur can be groomed, showcasing different behaviors based on their fur presence.

**Zoo Management:**
- The Zoo class manages a collection of animals, allowing for adding animals, feeding them, and grooming them in a batch.

## Getting Started
**Prerequisites**
- PHP installed on your machine.

**Installation**
- Clone the repository or download the files.
- Place the files in your local server's root directory (e.g., `htdocs` for XAMPP).
- Open the PHP file in your web browser.

## Code Explanation
**Food Class:**
- Represents types of food (e.g., meat and plants).
- Constructed with a type property.

**Animal Class:**
- Base class for all animals.
- Properties include name, species, diet type, and whether they have fur.
- Methods:
-   ```eat(Food $food)```: Determines if an animal can eat the provided food based on its diet.
-   ```groom()```: Groom the animal if it has fur.
-   ```__toString()```: Returns a string representation of the animal.

**Animal Subclasses:**
- Inherit from the `Animal` class and initialize with specific attributes:
-   Tiger
-   Elephant
-   Rhino
-   Fox
-   SnowLeopard
-   Rabbit

**Zoo Class:**
- Manages a collection of `Animal` objects.
- Methods include:
-   ```addAnimal(Animal $animal)```: Adds an animal to the zoo.
-   ```feedAll(Food $food)```: Feeds all animals in the zoo the specified food.
-   ```groomAll()```: Groom all animals in the zoo.

## Example Usage
The main execution script at the bottom of the PHP file demonstrates how to:
- Create a zoo instance.
- Create and add various animals to the zoo.
- Feed the animals with different food types (meat and plants).
- Groom all animals that have fur.
```$zoo = new Zoo();
$tiger = new Tiger("Leon");
$zoo->addAnimal($tiger);
$zoo->feedAll($meat);
$zoo->groomAll();
```
## Output
When the code is executed, it will print messages indicating which animals were added to the zoo, what they ate, and any grooming actions performed.
