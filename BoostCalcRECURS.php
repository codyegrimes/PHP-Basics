<form method="POST" action="BoostCalcRECURS.php">
  Starting SR:<br>
  <input type="text" name = "SSR" value="<?php if (isset($_POST['SSR'])) echo $_POST['SSR']; ?>"><br>
  Desired SR:<br>
  <input type="text" name="DSR" value="<?php if (isset($_POST['DSR'])) echo $_POST['DSR']; ?>"><br><br>
   Discount %:<br>
  <input type="text" name="discount" value="<?php if (isset($_POST['discount'])) echo $_POST['discount']; ?>"><br><br>
  <input type="submit" value="Submit">
</form>

<?php
$startingSR = $_POST['SSR'];
$targetSR = $_POST['DSR'];
$price = 0;
global $tierPrice;


function calc($startingSR, $targetSR, $price)
{
global $tierPrice;

if($targetSR <= $startingSR) //end condition, start from ending SR and subtract down to starting SR
{
return $price - (($startingSR - $targetSR) * $tierPrice);	//Does appropriate math so that the final if-block does not result in max range (i.e. 500 as opposed to 100)
}
  else{
  if($targetSR > 4450)
    {
		$tierPrice = 2.8;
	  $foo = $targetSR - 4450;
      $price += $foo * $tierPrice;
	  $targetSR = $targetSR - $foo;
	  
	  echo "The amount of SR priced in the 4450 - 4500 tier is: " . $foo . "<br/>";
	  echo "The calculated price for " . $foo . " SR in this tier is: " . $foo . ' * ' . $tierPrice . ' = ' .($foo * $tierPrice) . "<br/> <br/>";
	  
		return calc($startingSR, $targetSR, $price);
	}
	

  
  if($targetSR > 4400)
    {
		$tierPrice = 2.6;
	  $foo = $targetSR - 4400;
      $price += $foo * $tierPrice;
	  $targetSR = $targetSR - $foo;
	  
	  echo "The amount of SR priced in the 4400 - 4450 tier is: " . $foo . "<br/>";
	  echo "The calculated price for " . $foo . " SR in this tier is: " . ($foo * $tierPrice) . "<br/> <br/>";
	  
		return calc($startingSR, $targetSR, $price);
    }
	
  if($targetSR > 4350)
    {
		$tierPrice = 2.4;
	  $foo = $targetSR - 4350;
      $price += $foo * $tierPrice;
	  $targetSR = $targetSR - $foo;
	  
	  echo "The amount of SR priced in the 4300 - 4350 tier is: " . $foo . "<br/>";
	  echo "The calculated price for " . $foo . " SR in this tier is: " . ($foo * $tierPrice) . "<br/> <br/>";
	  
		return calc($startingSR, $targetSR, $price);
    }
	
	 if($targetSR > 4300)
    {
		$tierPrice = 2.3;
	  $foo = $targetSR - 4300;
      $price += $foo * $tierPrice;
	  $targetSR = $targetSR - $foo;
		return calc($startingSR, $targetSR, $price);
    }
  
   if($targetSR > 4250)
    {
		$tierPrice = 2.0;
	  $foo = $targetSR - 4250;
      $price += $foo * $tierPrice;
	  $targetSR = $targetSR - $foo;
		return calc($startingSR, $targetSR, $price);
    }

	 if($targetSR > 4200)
    {
		$tierPrice = 1.2;
	  $foo = $targetSR - 4200;
      $price += $foo * $tierPrice;
	  $targetSR = $targetSR - $foo;
		return calc($startingSR, $targetSR, $price);
    }
	
	 if($targetSR > 4150)
    {
		$tierPrice = 1.1;
	  $foo = $targetSR - 4150;
      $price += $foo * $tierPrice;
	  $targetSR = $targetSR - $foo;
		return calc($startingSR, $targetSR, $price);
    }
	
	 if($targetSR > 4100)
    {
		$tierPrice = .9;
	  $foo = $targetSR - 4100;
      $price += $foo * $tierPrice;
	  $targetSR = $targetSR - $foo;
		return calc($startingSR, $targetSR, $price);
    }
	
	 if($targetSR > 4050)
    {
		$tierPrice = .8;
	  $foo = $targetSR - 4050;
      $price += $foo * $tierPrice;
	  $targetSR = $targetSR - $foo;
		return calc($startingSR, $targetSR, $price);
    }
	
	 if($targetSR > 4000)
    {
		$tierPrice = .6;
	  $foo = $targetSR - 4000;
      $price += $foo * $tierPrice;
	  $targetSR = $targetSR - $foo;
		return calc($startingSR, $targetSR, $price);
    }
	
	 if($targetSR > 3750)
    {
		$tierPrice = .48;
	  $foo = $targetSR - 3750;
      $price += $foo * $tierPrice;
	  $targetSR = $targetSR - $foo;
		return calc($startingSR, $targetSR, $price);
    }
	
	 if($targetSR > 3500)
    {
		$tierPrice = .36;
	  $foo = $targetSR - 3500;
	  $price += $foo * $tierPrice;
	  $targetSR = $targetSR - $foo;
		return calc($startingSR, $targetSR, $price);
    }
	
	 if($targetSR > 3250)
    {
		$tierPrice = .26;
	  $foo = $targetSR - 3250;
      $price += $foo * $tierPrice;
	  $targetSR = $targetSR - $foo;
		return calc($startingSR, $targetSR, $price);
    }
	
	 if($targetSR > 3000)
    {
		$tierPrice = .22;
	  $foo = $targetSR - 3000;
      $price += $foo * $tierPrice;
	  $targetSR = $targetSR - $foo;
		return calc($startingSR, $targetSR, $price);
    }
	
	 if($targetSR > 2750)
    {
		$tierPrice = .18;
	  $foo = $targetSR - 2750;
      $price += $foo * $tierPrice;
	  $targetSR = $targetSR - $foo;
		return calc($startingSR, $targetSR, $price);
    }
	
	 if($targetSR > 2500)
    {
		$tierPrice = .14;
	  $foo = $targetSR - 2500;
      $price += $foo * $tierPrice;
	  $targetSR = $targetSR - $foo;
		return calc($startingSR, $targetSR, $price);
    }
	
	 if($targetSR > 2000)
    {
		$tierPrice = .1;
	  $foo = $targetSR - 2000;
      $price += $foo * $tierPrice;
	  $targetSR = $targetSR - $foo;
		return calc($startingSR, $targetSR, $price);
    }
	
	 if($targetSR > 1500)
    {
		$tierPrice = .08;
	  $foo = $targetSR - 1500;
	  $price += $foo * $tierPrice;
	  $targetSR = $targetSR - $foo;
		return calc($startingSR, $targetSR, $price);
    }
	
	 if($targetSR > 1000)
    {
		$tierPrice = .05;
	  $foo = $targetSR - 1000;
      $price += $foo * $tierPrice;
	  $targetSR = $targetSR - $foo;
		return calc($startingSR, $targetSR, $price);
    }
	
	 if($targetSR > 500)
    {
		$tierPrice = .04;
	  $foo = $targetSR - 500;
      $price += $foo * $tierPrice;
	  $targetSR = $targetSR - $foo;
		return calc($startingSR, $targetSR, $price);
    }
	
	 if($targetSR > 1)
    {
		$tierPrice = .04;
	  $foo = $targetSR - 1;
      $price += $foo * $tierPrice;
	  $targetSR = $targetSR - $foo;
		return calc($startingSR, $targetSR, $price);
    }
	
	
	
	
  }

}//end function calc

$priceOfOrder = calc($startingSR, $targetSR, $price);
echo ("The standard price is: " . $priceOfOrder);
echo "</br>";

if (isset($_POST['discount']))
{
	$d = $_POST['discount'];
	$disc = $d / 100;
	$dAmount = $priceOfOrder * $disc;
	$discountedPrice = $priceOfOrder - $dAmount;
	echo("The discounted price is: " . $discountedPrice);
}


?>
