<?php
$kategories = array('marken'	=> 'brands',
    'bad'		=> 'bathroom',
    'kueche'	=> 'kitchen',
    'leuchten'	=> 'lights',
    'wohnen'	=> 'living',
    'heizung'	=> 'heating',
    'garten'	=> 'garden',
);

foreach ($kategories as $kategorie => $translation) {
    $contentVar = array();
    @include_once('de/megamenu/'.$kategorie.'/content.php');
    $php_content .= '		\'' . $translation . '\' => \'' . addcslashes($contentVar['megamenu'],"'\\") . '\',' . PHP_EOL;

    echo 'include megamenu ' . $kategorie . PHP_EOL;

}