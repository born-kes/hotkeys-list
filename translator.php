<?php

$locationMessage = [
    '' => 'Hello %s',
];

function t(string $str, array $params): string
{
    $newStr = translate($str);
    $newParams = (array)translate($params);

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

echo '<pre>';
echo t('test %s www', []);
echo PHP_EOL;
echo t('', ['mama']);
echo PHP_EOL;
echo t('',['']);