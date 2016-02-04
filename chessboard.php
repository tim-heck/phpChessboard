<?php
/**
 * Created by PhpStorm.
 * User: tih99924
 * Date: 2/2/16
 * Time: 3:03 PM
 */

require_once '/Users/tih99924/Desktop/phpChessboard/vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('/Users/tih99924/Desktop/phpChessboard/twig/');
$twig = new Twig_Environment($loader);

//Creates color array
$color_array = array();

//Fills color array with 'p' for pink or 'y' for yellow
for ($row = 0; $row < 8; $row++) {
    for ($col = 0; $col < 8; $col++) {
        //Every even numbered row & column are pink, odd are yellow
        if (($row + $col) % 2 == 0) {
            $color_array[$row][$col] = 'p';
        }
        else {
            $color_array[$row][$col] = 'y';
        }
    }
}


$html = $twig->render('chessboard.html', array(
    'color_array' => $color_array
));

echo $html;
?>