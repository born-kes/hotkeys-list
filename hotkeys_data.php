<?php
if(!function_exists('t')){ function t($a){return $a;} }

return ( [
    t('all editor text') => [
        t('select a word') => t('Ctrl + Shift + ->'),
        t('jump a word') => t('Ctrl + ->'),
    ],
    t('excel') => [
        t('Add Filter') => t('Ctrl + Shift + L'),
		t('Save as') => t('Alt + F12'),
    ],
    t('PhpStrom') => [
        t('Reformat code') => t('Ctrl + Alt + L'),
    ],
    t('Netbeans') => [
        t('Reformat code') => t('Alt + Shift + F'),
    ],
]);