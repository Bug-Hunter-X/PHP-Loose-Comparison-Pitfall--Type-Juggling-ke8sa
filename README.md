# PHP Loose Comparison Pitfall: Type Juggling

This repository demonstrates a common error in PHP stemming from loose comparison (==) and type juggling.  Loose comparison does not check if the type of the variables is the same, it does the type juggling first and then the comparison.

The `bug.php` file contains a function demonstrating this unexpected behavior. The `bugSolution.php` shows the corrected version using strict comparison (===).