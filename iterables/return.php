<?php

function getIterable(): iterable
{
	return ["a", "b", "c"];
}

$myIterable = getIterable();
foreach ($myIterable as $item) {
	echo $item;
}

?>