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
// test use function
echo '<pre>' . PHP_EOL; ?>

 <?= t('test %s www', []);?>
 
 <?= t('', ['mama']);?>
 
 <?= t('', ['kes']);?>
 
 <?= t('', ['kes'], false);?>
 
 <?= t('',['']);?>
 
 <?= t('next test','');?>
 
 <?= t('params null %s test');?>
 
<?php die;?>
