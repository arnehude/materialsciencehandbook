<?php
function replace_placeholders($content,$language){
    foreach ($language as $key => $value) {
        $content = preg_replace('{{{'.$key.'}}}', $value, $content);
    }
    return $content;
}

function parse_language($to_parse, $language = 'en')
{
    switch ($language) {
        case 'en':
            require './language/english.php';
            $content = replace_placeholders($to_parse, $en);
            break;
        case 'de':
            require './language/german.php';
            $content = replace_placeholders($to_parse, $en);
            break;
        case 'fr':
            require './language/french.php';
            $content = replace_placeholders($to_parse, $en);
            break;

        default:
            require './language/english.php';
            $content = replace_placeholders($to_parse, $en);
            break;
    }
    return $content;
}
