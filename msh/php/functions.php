<?php
function replace_placeholders($content,$language){
    foreach ($language as $key => $value) {
        $content = preg_replace('{{{'.$key.'}}}', $value, $content);
    }
    return $content;
}
function controll_language($content){
    if(preg_match('{{{[A-Za-z_]*}}}', $content)){
        return parse_language($content, 'en');
    } else {
        return $content;
    }
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
            $content = replace_placeholders($to_parse, @$de);
            break;
        case 'fr':
            require './language/french.php';
            $content = replace_placeholders($to_parse, @$fr);
            break;

        default:
            require './language/english.php';
            $content = replace_placeholders($to_parse, $en);
            break;
    }
    $content = controll_language($content);
    return $content;
}
