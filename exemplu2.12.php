<?php
$_POST['comments'] = "The Fresh Fish with Rice Noodle was delicious,
but I didn't like the Beef Tripe.";
print substr($_POST['comments'], 0, 30);
print '...';