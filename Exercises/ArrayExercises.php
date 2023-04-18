<!--


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Learning</title>
	<style>
		header {
			background: #e3e3e3;
			padding: 2em;
			text-align: center;
		}
	</style>
</head>
<body>
	<li>
		 
		echo '1. If you have an array $a = array( 0, 1, 2, 3, 4 );, how do you extract the value 3 from the array?';
		$a = array( 0, 1, 2, 3, 4 );
		echo '<br />';
		echo $a[3];

		echo '<br />';
		echo '<br />';

		echo '2. If you have an array $a = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 );, how do you extract the value 3 from the array?';
		$b = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 );
		echo '<br />';
		echo $b['three'];


		echo '<br />';
		echo '<br />';

		echo '3. If you have the following array, how do you extract the value 3 from the array?';

		$c = array(
		    array(
		        0,
		        1
		    ),
		    array(
		        2,
		        array(
		            3
		        )
		    )
		);
		echo '<br />';
		echo '<pre>';
		var_dump($c);
		echo '</pre>';

		echo $c[1][1][0];

		echo '<br />';
		echo '<br />';

		echo '4. If you have the following array, how do you extract the value 3 from the array?';

		$d = array(
		    "a"=>array(
		        "b"=>0,
		        "c"=>1,
		    ),
		    "b"=>array(
		        "e"=>2,
		        "o"=>array(
		            "b"=>3
		        ),
		    ),
		);

		echo '<br />';
		echo $d['b']['o']['b'];


		echo '<br />';
		echo '<br />';
		echo '5. Create a new array with each comma-separated value as its own array element from the string $a = "a,b,c,d,e,f"';
		$e = "a,b,c,d,e,f";

		echo '<br />';
		$result5 = explode(",", $e);
		echo '<pre>';
		var_dump($result5);
		echo '</pre>';

		echo '<br />';
		echo '<br />';
		echo '6. With the result array from 5, create a new array where each element is both key and value. In other words, the result should be:';
		echo '<br />';
		$result6 = array_combine($result5, $result5);
		echo '<pre>';
		var_dump($result6);
		echo '</pre>';

		echo '<br />';
		echo '<br />';
		echo '7. You have two arrays like the following. One contains field labels, the other contains field values. Write a program to output the third array.';
		$keys = array(
		    "field1"=>"first",
		    "field2"=>"second",
		    "field3"=>"third"
		);
		$values = array(
		    "field1value"=>"dinosaur",
		    "field2value"=>"pig",
		    "field3value"=>"platypus"
		);

		echo '<br />';

		$keysAndValues = array_combine($keys, $values);
		echo '<pre>';
		var_dump($keysAndValues);
		echo '</pre>';

		$keysAndValues = array_combine($values, $keys);
		echo '<pre>';
		var_dump($keysAndValues);
		echo '</pre>';

		echo '<br />';
		echo '<br />';
		echo '8. You have an array of transactions, each of which has a debit and credit amount. Find the absolute value of the transaction amount (i.e. abs( debit - credit )) and add it as a new key=>value pair to each transaction.';
		$transactions = array(
		    array(
		        "debit"=>2,
		        "credit"=>3
		    ),
		    array(
		        "debit"=>15,
		        "credit"=>14
		    )
		);
		//// outputs
		// $transactions = array(
		//     array(
		//         "debit"=>2,
		//         "credit"=>3,
		//         "amount"=>1
		//     ),
		//     array(
		//         "debit"=>15,
		//         "credit"=>14,
		//         "amount"=>1
		//     )
		// );
		echo '<pre>';
		var_dump($transactions);
		echo '</pre>';


		echo '<br />';
		$transactions[0]['amount'] = abs($transactions[0]["credit"] - $transactions[0]["debit"]);
		$transactions[1]['amount'] = abs($transactions[1]["credit"] - $transactions[1]["debit"]);
		echo '<pre>';
		var_dump($transactions);
		echo '</pre>';

		echo '<br />';
		echo '<br />';
		echo '9. Find the sum of this array of numbers $a = array( 0, 1, 2, 3, 4, 5, 6 );.';
		$a9 = array( 0, 1, 2, 3, 4, 5, 6 );

		echo '<br />';
		$sum = 0;
		foreach ($a9 as $number) {
			$sum += $number;
		}

		echo $sum;

		?>
	</li>
</body>
</html>




 -->