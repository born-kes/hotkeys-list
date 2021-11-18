<?php

$locationMessage = [
    '' => 'Hello %s',
    'kes' => 'Born-KES'
];

function t(string $str, $params='', $inject_translate=true): string
{
    $newStr = translate($str);
    if($params==='' || count($params)===0)
        return $newStr;

    $newParams = (array) (
    $inject_translate
        ? translate($params)
        : $params);

    return @vsprintf($newStr, $newParams);
}

function translate($params)
{
    $map = function (array $params, $callback) :array
    {
        $newParams = [];
        foreach ($params as $param) {
            $newParams[] = $callback($param);
        }
        return $newParams;
    };
    return (!is_array($params)) 
	? reLocationMessage($params) 
	: ( count($params) == 0 ? '' 
	: $map($params, 'reLocationMessage'));
}

function reLocationMessage($param = '') :string
{
    global $locationMessage;
    return isset($locationMessage[$param]) 
        ? $locationMessage[$param] 
        : $param;
}

return;
echo '<pre>';
echo t('test %s www', []);
echo PHP_EOL;
echo t('', ['mama']);
echo PHP_EOL;
echo t('', ['kes']);
echo PHP_EOL;
echo t('', ['kes'], false);
echo PHP_EOL;
echo t('',['']);
echo PHP_EOL;
echo t('next test','');
echo PHP_EOL;
echo t('params null %s test');
