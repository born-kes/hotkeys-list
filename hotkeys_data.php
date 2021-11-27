<?php
if(!function_exists('t')){ function t($a){return $a;} }
define('CTRL', t('Ctrl') );
define('SHIFT', t('Shift') );
define('SPACE', t('Space') );
define('DOWN_ARROW', t('↓') );
define('UPWARDS_ARROW', t('↑') );
define('LEFTWARDS_ARROW', t('←') );
define('RIGHTWARDS_ARROW', t('→') );
define('BACKSPACE', t('Backspace') );

return ( [
    t('all editor text') => [
        t('select a word') => t('Ctrl + Shift + ->'),
        t('Delete a word') => t('%s + $s', [CTRL, BACKSPACE]),
        t('jump a word') => t('Ctrl + ->'),
    ],
    t('excel') => [
        t('Add Filter') => t('Ctrl + Shift + L'),
		t('Save as') => t('F12'),
		t('Select all to the first blank')=> t('%s + %s + %s', [CTRL, SHIFT, DOWN_ARROW]),
		t('Insert tables')=> t('%s + %s',[CTRL, t('T')]),
		t('Jump to the Active Cell')=> t('%s + %s',[CTRL, BACKSPACE]),
		t('Add or edit a cell') => t('%s + %s',[SHIFT, t('F2')]), 
    ],
    t('PhpStrom') => [
        t('Autotext') => t('%s + %s', [CTRL, SPACE]),
        t('Reformat code') => t('Ctrl + Alt + L'),
    ],
    t('Netbeans') => [
        t('Reformat code') => t('Alt + Shift + F'),
        t('Open / Navigate to declaration') => t('%s + %s', [CTRL, 'B']),
    ],
]);