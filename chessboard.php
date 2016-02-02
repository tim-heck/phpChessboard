<?php
/**
 * Created by PhpStorm.
 * User: tih99924
 * Date: 2/2/16
 * Time: 3:03 PM
 */

require_once '/Users/tih99924/Desktop/phpChessboard/vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('/Users/tih99924/phpChessboard/twig/');
$twig = new Twig_Environment($loader);
$html = $twig->render('board.html', array(
    'color_array' => $color_array
));
echo $html;

$board = array(array());
for ($row = 0; $row < 8; $row++) {
    for ($col = 0; $col < 8; $col++) {
        if (($row + $col) % 2 == 0)
            $board[$row][$col] == 'w';
        else
            $board[$row][$col] == 'b';
    }
}

echo $board;
?>