<?php

/*
  Recipe for one pan of okroshka (3 litres):
  4 big potatoes
  2 eggs
  1 cucumber
  500 g sausage
  4 radish
  1 bunch fresh dill
  8 tablespoons of chaka
  1000 ml of cold boiled water
  5 g salt
*/

function cookOkroshka
(int $potatoes,
 int $eggs,
 int $cucumber,
 int $sausage,
 int $radish,
 int $dill,
 int $chaka,
 int $water,
 int $salt
 string $wishes)
{
	echo 
	"1.Boil potatoes $potatoes and $eggs eggs until tender. Peel potatoes, peel eggs. <br>
	 2.Wash $cucumber cucumber, $radish radish and $dill bunch fresh dill. <br>
	 3.Potatoes, eggs, cucumber, $sausage sausage and radish cut into small cubes. <br>
	 4.Chop the dill and add to the chopped vegetables and eggs. <br>
	 5.Add $chaka chaka. <br>
	 6.Add $salt salt and mix thoroughly. <br>
	 7.While stirring, gradually add $water water.<br>
	 $wishes";
	 /*Mix the okroshka well until the salt dissolves completely. To taste. 
	 If there is not enough salt, add and mix again. 
	 Put the finished tasty okroshka  in the refrigerator for an hour.*/
 }	 
cookOkroshka(4, 2, 1, 500, 4, 1, 8, 1000, 5, 'Bon Appetit');	 
