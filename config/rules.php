<?php

return [
    '@PSR2' => true,
    'array_syntax' => ['syntax' => 'short'],
    'trailing_comma_in_multiline_array' => true,
    'unary_operator_spaces' => true,
    'binary_operator_spaces' => true,
    'blank_line_after_namespace' => true,
    'blank_line_after_opening_tag' => true,
    'blank_line_before_statement' => [
        'statements' => ['break', 'continue', 'declare', 'return', 'throw', 'try'],
    ],
    'cast_spaces' => [
        'space' => 'single',
    ],
    'concat_space' => [
        'spacing' => 'one',
    ],
    'function_typehint_space' => true,
    'no_extra_blank_lines' => true,
    'no_trailing_comma_in_singleline_array' => true,
    'whitespace_after_comma_in_array' => true,
    'return_type_declaration' => true,
];
