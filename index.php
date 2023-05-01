<?php declare(strict_types=1);

$dom = new DOMDocument();

$htmlTemplate = file_get_contents('page.php');

$dom->loadHTML($htmlTemplate);

$elements = $dom->getElementsByTagName('*');
foreach($elements as $element) {
    $click_elm = $element->getAttribute('polar:click');

    if($click_elm) {
        $id = uniqid('polar_');
        $element->setAttribute('id', $id);

        $js = "templateElements['$id'] = '$click_elm';";

        $fragment = $dom->createDocumentFragment();
        $fragment->appendChild($dom->createTextNode($js));

        $script = $dom->getElementById('templateElms');
        $script->appendChild($fragment);
    }
}

echo $dom->saveHTML();
?>