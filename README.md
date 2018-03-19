##### Directory Structure
```
│  README.pdf                   //read me pdf
│  CarSaleSystem.png            //card sal system UML pic
│  composer.json
│  phpunit.xml
│  README.md
├─src
│  │  autoload.php              //phpunit autoload class
│  │  Fibonacci.php             //case 3
│  │
│  ├─controller                 //api code
│  │      Car.php
│  │      Customer.php
│  │      MyController.php     //all contorller must extends it
│  │      Order.php
│  │      Seller.php
│  │      User.php
│  │
│  ├-model                     // db management code
│  │     Car.class.php
│  │     Order.class.php
│  │     User.class.php
│  ├-view                     // view page files
├─tests                       //phpunit test code
│      FibonaciiTest.php  
│
└─uml
        CarSaleSystem.puml   //car sale system UML file


```