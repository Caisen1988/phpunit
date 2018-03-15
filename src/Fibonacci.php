<?php

namespace Src;

class Fibonacci
{

    public function result($userInput)
    {

        if ($userInput <= 0) {

            return 0;

        } elseif ($userInput == 1) {

            return 1;

        } else {

            return (self::result($userInput - 1)) + (self::result($userInput - 2));

        }

    }

}
