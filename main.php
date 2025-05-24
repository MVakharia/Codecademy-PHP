<?php

echo "Hello world!";

echo "\n";

function generateStory($singular_noun, $verb, $color, $distance_unit) {
    $story = "\n The ${singular_noun}s are lovely, ${color}, and deep.\n
But I have promises to keep,\n
And ${distance_unit} to go before I ${verb},\n
And ${distance_unit} to go before I sleep.\n";

    return $story;
}

function helloWorld() {
    echo "Hello worlds!";
}

helloWorld();

echo generateStory("cat", "play", "black", "kilometres");

echo generateStory("dog", "run", "orange", "miles");

echo generateStory("horse", "gallop", "brown", "light years");