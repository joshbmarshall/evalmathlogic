# EvalMath + Logic
PHP EvalMath with Logic equations

[![Build Status](https://travis-ci.com/joshbmarshall/evalmathlogic.svg?branch=master)](https://travis-ci.org/joshbmarshall/evalmathlogic)

This package is a composer-aware way to add the EvalMath package by Miles Kaufmann.
More information on the original at https://www.phpclasses.org/package/2695-PHP-Safely-evaluate-mathematical-expressions.html

Added to this is the ability to evaluate logic equations, as per the code by Lee Eden posted at https://www.phpclasses.org/discuss/package/2695/thread/4/

To use:

	<?php
		$math = new \Cognito\EvalMath;
		// basic evaluation:
		$result = $math->evaluate('2 + 2');
		// supports: order of operation; parentheses; negation; built-in functions
		$result = $math->evaluate('-8(5/2)^2 * (1 - sqrt(4)) - 8');
		// create your own variables
		$math->evaluate('a = e^(ln(pi))');
		// or functions
		$math->evaluate('f(x,y) = x^2 + y^2 - 2x*y + 1');
		// and then use them
		$result = $math->evaluate('3*f(42,a)');

		// Use the equations in logic strings
		$result = $math->evaluate('2 + 2 = 4'); // true
		$result = $math->evaluate('2 + 2 < 4'); // false
		$result = $math->evaluate('2 + 2 >= 4'); // true

		// Use dates as well, they are converted to seconds from epoch
		$result = $math->evaluate('date(y,m,d,h,m)');
