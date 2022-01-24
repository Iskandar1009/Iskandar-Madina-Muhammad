<?php
/*
Cutlets Recipe:
 1 carrots,
 1 egg,
 100 ml milk,
 20 gr butter,
 55 gr manka,
 1 ch lozh salt,
*/


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

function cookCutlets
(int $carrots,
 int $egg,
 int $milk,
 int $butter,
 int $manka,
 int $salt,
 string $wishes)
{
	echo 
	"1.Peel the $carrots, grate on a small grater. <br>
	 2.In a suitable size pan, melt $butter. <br>
	 3.Simmer $carrots on moderate heat <br>
	 4.Pour $milk into the pan, $salt a little, stir <br>
	 5.Cool $carrots. <br>
	 6.Add the whipped $egg to the cooled $carrot mass. <br>
	 7.It turns out a thick, viscous mass. It practically does not stick to the hands and cutlets are easy to form.<br>
	 $wishes";
	 /*Serve carrot cutlets warm or cooled as an independent dish. 
     It can be with sour cream or with milk or cream sauce. Enjoy your meal!*/
 }	 
 cookCutlets(1, 1, 100, 20, 55, 1, 'Bon appetit');

