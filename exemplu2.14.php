<?php
$my_class = 'lunch';
$html = '<span class="class1">Fried Bean Curd</span><span class="class1">oil-Soaked Fish</span>';
print str_replace('class1', $my_class, $html);