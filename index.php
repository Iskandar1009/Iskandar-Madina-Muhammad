<?php

function cookRiceballs
(int $rice, 
 int $egg, 
 int $cheese, 
 int $dill, 
 int $salt, 
 int $vegetable_oil, 
 string $feedbacks)
{   echo
   "1. Boil $rice grams of rice normally. Cool and add $egg eggs. 
    2. We rub  $cheese grams of cheese on a fine grater. 
    3. Adding $salt grams of salt to rice. 
    4. Adding grated cheese. 
    5. Chop $dill branches of greens and also add to the rice.
    6. We form riceballs, bread them in flour.
    7. Fry them on both sides in $vegetable_oil milliliters of vegetable oil on both sides.
    Riceballs are ready.
    $feedbacks.";
}
cookRiceballs(250, 1, 100, 3, 30, 100, "That's grate");
