<?php
if(!function_exists('t')){ function t($a){return $a;} }
define('ALT', t('Alt') );
define('CTRL', t('Ctrl') );
define('SHIFT', t('Shift') );
define('SPACE', t('Space') );
define('ENTER', t('Enter') );
define('INSERT', t('Insert') );
define('TAB', t('Tab') );
define('WIN', t('Window-key') );
define('DOWN_ARROW', t('↓') );
define('UPWARDS_ARROW', t('↑') );
define('LEFTWARDS_ARROW', t('←') );
define('RIGHTWARDS_ARROW', t('→') );
define('BACKSPACE', t('Backspace') );

return ( [
	t('System') => [
		t('Unlogging from windows') => t('%s + %s' ,[ WIN, t('L')]),
		t('Hidden all windows, show desktop') => t('%s + %s', [WIN, t('d')]), 
	],
    t('all editor text') => [
		t('Select all words') => t('%s + %s', [CTRL, t('a')]),
		t('Undo the last change') => t('%s + %s', [CTRL, t('z') ]), 
		t('Undo the last back change') => t('%s + %s', [CTRL, t('y') ]), 
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
		t('Change the cell format') => t('%s + %s + ( %s )',[CTRL, SHIFT, t('numeric 1-6 or `')]),
    ],
    t('PhpStrom') => [
        t('Autotext') => t('%s + %s', [CTRL, SPACE]),
        t('Reformat code') => t('Ctrl + Alt + L'),
		t('Show suggested or options auto-suggestions ') => t('%s + %s', [ALT, ENTER]),
    ],
    t('Netbeans') => [
		t('Navigate to file') => t('%s + %s + %s', [CTRL, ALT, 'o']),
		t('Go to line') => t('%s + %s', [CTRL, 'g']),
        t('Reformat code') => t('%s + %s +s',[ALT, SHIFT, 'F']),
        t('Open / Navigate to declaration') => t('%s + %s', [CTRL, 'B']),
        t('Open file in brower') => t('%s', ['F6']),
		t('Search excerpt text') => t('%s + %s',[CTRL, t('F3')]),
		t('Search class and open edit') => t('%s + %s',[CTRL, t('o')]),
		t('Back to last edit place') => t('%s + %s', [CTRL, 'Q']),
		t('Add ; to the end of the line') => t('%s + %s', [CTRL, t(';')]),
		t('Add ; to the end of the line and enter to new line') => t('%s + %s + %s', [CTRL, SHIFT, t(';')]),
		t('Show suggested or options auto-suggestions ') => t('%s + %s', [ALT, ENTER]),
		t('Recent files') => t('%s + %s + %s', [CTRL, SHIFT, t('t')]),
		t('File switcher') => t('%s + %s', [CTRL, TAB]),
		t('Switcher navigation') => t('%s + %s + %s', [CTRL, SHIFT, TAB]),
		t('Carry over a piece of code up') => t('%s + %s + %s', [ALT, SHIFT, UPWARDS_ARROW]),
		t('Carry over a piece of code down') => t('%s + %s + %s', [ALT, SHIFT, DOWN_ARROW]),
		t('Carry over a piece of code left') => t('%s + %s + %s', [ALT, SHIFT, LEFTWARDS_ARROW]),
		t('Carry over a piece of code right') => t('%s + %s + %s', [ALT, SHIFT, RIGHTWARDS_ARROW]),
		t('Go to/back to lase edit') => t('%s + %s', [ALT, LEFTWARDS_ARROW]),
		t('Go to/back to lase edit') => t('%s + %s', [ALT, RIGHTWARDS_ARROW]),
		
		t('Organiation inport or fix namespace') => t('%s + %s + %s', [CTRL, SHIFT, 'i']),
		t('Toggles comment for current line') => t('%s + %s + %s', [CTRL, SHIFT, 'c']),
		t('Toggles comment for current line') => t('%s + %s', [CTRL, '/']),
		t('Show context menu') => t('%s + %s', [ALT, INSERT]),
		t('Select in projects/files/favorites') => t('%s + %s + %s', [CTRL, SHIFT, '1']),
		t('Select in projects/files/favorites') => t('%s + %s + %s', [CTRL, SHIFT, '2']),
		t('Select in projects/files/favorites') => t('%s + %s + %s', [CTRL, SHIFT, '3']),
		
		t('Run Unit test') => t('%s + %s', [CTRL, 'F6']),
		t('Run Unit test') => t('%s + %s', [ALT, 'F6']),
		t('Delete row') => t('%s + %s', [CTRL, 'e']),
		t('Delete word') => t('%s + %s', [SHIFT, 'BACKSPACE']),
    ],
]);