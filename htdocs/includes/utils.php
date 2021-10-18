<?php

function isItemExistsInArray($item, $array)
{
    $checked = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($item === $array[$i]) {
            return true;
        } else {
            if ($checked === count($array))
                return false;
        }
    }
}

function rdbEncrypt($data)
{
    $cipherCode = array(
        'a' => '05i1', 'b' => '2B4s', 'c' => '850E', 'd' => '62A0', 'e' => 'w042', 'f' => '5w67', 'g' => 'V8V9', 'h' => 'C85h', 'i' => '102D', 'j' => 'u00R', 'k' => '7aZ0', 'l' => '01C3', 'm' => 't40r', 'n' => 'H65R', 'o' => '1su0', 'p' => '8rA2', 'q' => 'oa41', 'r' => 'bU7Y', 's' => '74k2', 't' => 'A002', 'u' => '7xz8', 'v' => '549w', 'w' => '82u7', 'x' => 'MU81', 'y' => 'M8B5', 'z' => '8s27',
        'A' => 'i0f9', 'B' => '1J76', 'C' => 'i6I2', 'D' => '20M0', 'E' => '31a9', 'F' => 'G3T2', 'G' => '5V10', 'H' => '41Ls', 'I' => '1T6j', 'J' => '32i7', 'K' => '6N1n', 'L' => '44y6', 'M' => '52k3', 'N' => '1s97', 'O' => 'FA0t', 'P' => '802H', 'Q' => '723D', 'R' => '7a04', 'S' => '6C58', 'T' => '8Q5s', 'U' => '66NQ', 'V' => '5pI4', 'W' => '952H', 'X' => 'O0q7', 'Y' => '494Y', 'Z' => '442D',
        '_0' => 'd0u6', '_1' => '636E', '_2' => '64B8', '_3' => '26z3', '_4' => 'g3Yy', '_5' => 'xp21', '_6' => 'sm5g', '_7' => 'W0x4', '_8' => '40A8', '_9' => '66i4',
        'backQuote' => '25d2', 'tilde' => 'Ln61', 'exclaimation' => 'I942', 'at' => 'Mz02', 'hash' => '598u', 'dollar' => '34j2', 'percent' => '1i12', 'caret' => '4C13', 'amperstand' => '4y40', 'asterisk' => 'i758', 'openParenthesis' => '89N3', 'closeParenthesis' => 't946', 'minus' => 'eQ0x', 'underscore' => 'bH72', 'equal' => 'g57A', 'plus' => 'E137', 'openBracket' => 'Uk14', 'closeBracket' => 'j410',
        'openBrace' => '36Ib', 'closeBrace' => 'G814', 'backSlash' => '7q3D', 'verticalBar' => '5NF7', 'semicolon' => '536u', 'colon' => '16r7', 'singleQuote' => 'C058', 'doubleQuote' => 'K9Y3', 'comma' => '27dq', 'lessThan' => 'ZJl1', 'period' => 'Q292', 'moreThan' => 'z356', 'forwardSlash' => '865u', 'questionMark' => '916T', 'space' => 'm0g9'
    );

    $output = '';
    $dataLength = strlen($data);

    for ($i = 0; $i < $dataLength; $i++) {
        switch ($data[$i]) {
            case 'a':
                $output += $cipherCode['a'];
                break;
            case 'b':
                $output += $cipherCode['b'];
                break;
            case 'c':
                $output += $cipherCode['c'];
                break;
            case 'd':
                $output += $cipherCode['d'];
                break;
            case 'e':
                $output += $cipherCode['e'];
                break;
            case 'f':
                $output += $cipherCode['f'];
                break;
            case 'g':
                $output += $cipherCode['g'];
                break;
            case 'h':
                $output += $cipherCode['h'];
                break;
            case 'i':
                $output += $cipherCode['i'];
                break;
            case 'j':
                $output += $cipherCode['j'];
                break;
            case 'k':
                $output += $cipherCode['k'];
                break;
            case 'l':
                $output += $cipherCode['l'];
                break;
            case 'm':
                $output += $cipherCode['m'];
                break;
            case 'n':
                $output += $cipherCode['n'];
                break;
            case 'o':
                $output += $cipherCode['o'];
                break;
            case 'p':
                $output += $cipherCode['p'];
                break;
            case 'q':
                $output += $cipherCode['q'];
                break;
            case 'r':
                $output += $cipherCode['r'];
                break;
            case 's':
                $output += $cipherCode['s'];
                break;
            case 't':
                $output += $cipherCode['t'];
                break;
            case 'u':
                $output += $cipherCode['u'];
                break;
            case 'v':
                $output += $cipherCode['v'];
                break;
            case 'w':
                $output += $cipherCode['w'];
                break;
            case 'x':
                $output += $cipherCode['x'];
                break;
            case 'y':
                $output += $cipherCode['y'];
                break;
            case 'z':
                $output += $cipherCode['z'];
                break;
            case 'A':
                $output += $cipherCode['A'];
                break;
            case 'B':
                $output += $cipherCode['B'];
                break;
            case 'C':
                $output += $cipherCode['C'];
                break;
            case 'D':
                $output += $cipherCode['D'];
                break;
            case 'E':
                $output += $cipherCode['E'];
                break;
            case 'F':
                $output += $cipherCode['F'];
                break;
            case 'G':
                $output += $cipherCode['G'];
                break;
            case 'H':
                $output += $cipherCode['H'];
                break;
            case 'I':
                $output += $cipherCode['I'];
                break;
            case 'J':
                $output += $cipherCode['J'];
                break;
            case 'K':
                $output += $cipherCode['K'];
                break;
            case 'L':
                $output += $cipherCode['L'];
                break;
            case 'M':
                $output += $cipherCode['M'];
                break;
            case 'N':
                $output += $cipherCode['N'];
                break;
            case 'O':
                $output += $cipherCode['O'];
                break;
            case 'P':
                $output += $cipherCode['P'];
                break;
            case 'Q':
                $output += $cipherCode['Q'];
                break;
            case 'R':
                $output += $cipherCode['R'];
                break;
            case 'S':
                $output += $cipherCode['S'];
                break;
            case 'T':
                $output += $cipherCode['T'];
                break;
            case 'U':
                $output += $cipherCode['U'];
                break;
            case 'V':
                $output += $cipherCode['V'];
                break;
            case 'W':
                $output += $cipherCode['W'];
                break;
            case 'X':
                $output += $cipherCode['X'];
                break;
            case 'Y':
                $output += $cipherCode['Y'];
                break;
            case 'Z':
                $output += $cipherCode['Z'];
                break;
            case '0':
                $output += $cipherCode['_0'];
                break;
            case '1':
                $output += $cipherCode['_1'];
                break;
            case '2':
                $output += $cipherCode['_2'];
                break;
            case '3':
                $output += $cipherCode['_3'];
                break;
            case '4':
                $output += $cipherCode['_4'];
                break;
            case '5':
                $output += $cipherCode['_5'];
                break;
            case '6':
                $output += $cipherCode['_6'];
                break;
            case '7':
                $output += $cipherCode['_7'];
                break;
            case '8':
                $output += $cipherCode['_8'];
                break;
            case '9':
                $output += $cipherCode['_9'];
                break;
            case '`':
                $output += $cipherCode['backQuote'];
                break;
            case '~':
                $output += $cipherCode['tilde'];
                break;
            case '!':
                $output += $cipherCode['exclaimation'];
                break;
            case '@':
                $output += $cipherCode['at'];
                break;
            case '#':
                $output += $cipherCode['hash'];
                break;
            case '$':
                $output += $cipherCode['dollar'];
                break;
            case '%':
                $output += $cipherCode['percent'];
                break;
            case '^':
                $output += $cipherCode['caret'];
                break;
            case '&':
                $output += $cipherCode['amperstand'];
                break;
            case '*':
                $output += $cipherCode['asterisk'];
                break;
            case '(':
                $output += $cipherCode['openParenthesis'];
                break;
            case ')':
                $output += $cipherCode['closeParenthesis'];
                break;
            case '-':
                $output += $cipherCode['minus'];
                break;
            case '_':
                $output += $cipherCode['underscore'];
                break;
            case '=':
                $output += $cipherCode['equal'];
                break;
            case '+':
                $output += $cipherCode['plus'];
                break;
            case '[':
                $output += $cipherCode['openBracket'];
                break;
            case '{':
                $output += $cipherCode['openBrace'];
                break;
            case ']':
                $output += $cipherCode['closeBracket'];
                break;
            case '}':
                $output += $cipherCode['closeBrace'];
                break;
            case '\\':
                $output += $cipherCode['backSlash'];
                break;
            case '|':
                $output += $cipherCode['verticalBar'];
                break;
            case ';':
                $output += $cipherCode['semicolon'];
                break;
            case ':':
                $output += $cipherCode['colon'];
                break;
            case "'":
                $output += $cipherCode['singleQuote'];
                break;
            case '"':
                $output += $cipherCode['doubleQuote'];
                break;
            case ',':
                $output += $cipherCode['comma'];
                break;
            case '<':
                $output += $cipherCode['lessThan'];
                break;
            case '.':
                $output += $cipherCode['period'];
                break;
            case '>':
                $output += $cipherCode['moreThan'];
                break;
            case '/':
                $output += $cipherCode['backSlash'];
                break;
            case '?':
                $output += $cipherCode['questionMark'];
                break;
            case ' ':
                $output += $cipherCode['space'];
                break;
            default:
                return null;
        }
    }

    return $output;
}

function rdbDecrypt($cipher)
{
    $cipherCode = array(
        'a' => '05i1', 'b' => '2B4s', 'c' => '850E', 'd' => '62A0', 'e' => 'w042', 'f' => '5w67', 'g' => 'V8V9', 'h' => 'C85h', 'i' => '102D', 'j' => 'u00R', 'k' => '7aZ0', 'l' => '01C3', 'm' => 't40r', 'n' => 'H65R', 'o' => '1su0', 'p' => '8rA2', 'q' => 'oa41', 'r' => 'bU7Y', 's' => '74k2', 't' => 'A002', 'u' => '7xz8', 'v' => '549w', 'w' => '82u7', 'x' => 'MU81', 'y' => 'M8B5', 'z' => '8s27',
        'A' => 'i0f9', 'B' => '1J76', 'C' => 'i6I2', 'D' => '20M0', 'E' => '31a9', 'F' => 'G3T2', 'G' => '5V10', 'H' => '41Ls', 'I' => '1T6j', 'J' => '32i7', 'K' => '6N1n', 'L' => '44y6', 'M' => '52k3', 'N' => '1s97', 'O' => 'FA0t', 'P' => '802H', 'Q' => '723D', 'R' => '7a04', 'S' => '6C58', 'T' => '8Q5s', 'U' => '66NQ', 'V' => '5pI4', 'W' => '952H', 'X' => 'O0q7', 'Y' => '494Y', 'Z' => '442D',
        '_0' => 'd0u6', '_1' => '636E', '_2' => '64B8', '_3' => '26z3', '_4' => 'g3Yy', '_5' => 'xp21', '_6' => 'sm5g', '_7' => 'W0x4', '_8' => '40A8', '_9' => '66i4',
        'backQuote' => '25d2', 'tilde' => 'Ln61', 'exclaimation' => 'I942', 'at' => 'Mz02', 'hash' => '598u', 'dollar' => '34j2', 'percent' => '1i12', 'caret' => '4C13', 'amperstand' => '4y40', 'asterisk' => 'i758', 'openParenthesis' => '89N3', 'closeParenthesis' => 't946', 'minus' => 'eQ0x', 'underscore' => 'bH72', 'equal' => 'g57A', 'plus' => 'E137', 'openBracket' => 'Uk14', 'closeBracket' => 'j410',
        'openBrace' => '36Ib', 'closeBrace' => 'G814', 'backSlash' => '7q3D', 'verticalBar' => '5NF7', 'semicolon' => '536u', 'colon' => '16r7', 'singleQuote' => 'C058', 'doubleQuote' => 'K9Y3', 'comma' => '27dq', 'lessThan' => 'ZJl1', 'period' => 'Q292', 'moreThan' => 'z356', 'forwardSlash' => '865u', 'questionMark' => '916T', 'space' => 'm0g9'
    );

    $output = '';
    $cipherLength = strlen($cipher);

    for ($i = 0; $i < $cipherLength; $i += 4) {
        switch (substr($cipher, $i, 4)) {
            case $cipherCode['a']:
                $output += 'a';
                break;
            case $cipherCode['b']:
                $output += 'b';
                break;
            case $cipherCode['c']:
                $output += 'c';
                break;
            case $cipherCode['d']:
                $output += 'd';
                break;
            case $cipherCode['e']:
                $output += 'e';
                break;
            case $cipherCode['f']:
                $output += 'f';
                break;
            case $cipherCode['g']:
                $output += 'g';
                break;
            case $cipherCode['h']:
                $output += 'h';
                break;
            case $cipherCode['i']:
                $output += 'i';
                break;
            case $cipherCode['j']:
                $output += 'j';
                break;
            case $cipherCode['k']:
                $output += 'k';
                break;
            case $cipherCode['l']:
                $output += 'l';
                break;
            case $cipherCode['m']:
                $output += 'm';
                break;
            case $cipherCode['n']:
                $output += 'n';
                break;
            case $cipherCode['o']:
                $output += 'o';
                break;
            case $cipherCode['p']:
                $output += 'p';
                break;
            case $cipherCode['q']:
                $output += 'q';
                break;
            case $cipherCode['r']:
                $output += 'r';
                break;
            case $cipherCode['s']:
                $output += 's';
                break;
            case $cipherCode['t']:
                $output += 't';
                break;
            case $cipherCode['u']:
                $output += 'u';
                break;
            case $cipherCode['v']:
                $output += 'v';
                break;
            case $cipherCode['w']:
                $output += 'w';
                break;
            case $cipherCode['x']:
                $output += 'x';
                break;
            case $cipherCode['y']:
                $output += 'y';
                break;
            case $cipherCode['z']:
                $output += 'z';
                break;
            case $cipherCode['A']:
                $output += 'A';
                break;
            case $cipherCode['B']:
                $output += 'A';
                break;
            case $cipherCode['C']:
                $output += 'C';
                break;
            case $cipherCode['D']:
                $output += 'D';
                break;
            case $cipherCode['E']:
                $output += 'E';
                break;
            case $cipherCode['F']:
                $output += 'F';
                break;
            case $cipherCode['G']:
                $output += 'G';
                break;
            case $cipherCode['H']:
                $output += 'H';
                break;
            case $cipherCode['I']:
                $output += 'I';
                break;
            case $cipherCode['J']:
                $output += 'J';
                break;
            case $cipherCode['K']:
                $output += 'K';
                break;
            case $cipherCode['L']:
                $output += 'L';
                break;
            case $cipherCode['M']:
                $output += 'M';
                break;
            case $cipherCode['N']:
                $output += 'N';
                break;
            case $cipherCode['O']:
                $output += 'O';
                break;
            case $cipherCode['P']:
                $output += 'P';
                break;
            case $cipherCode['Q']:
                $output += 'Q';
                break;
            case $cipherCode['R']:
                $output += 'R';
                break;
            case $cipherCode['S']:
                $output += 'S';
                break;
            case $cipherCode['T']:
                $output += 'T';
                break;
            case $cipherCode['U']:
                $output += 'U';
                break;
            case $cipherCode['V']:
                $output += 'V';
                break;
            case $cipherCode['W']:
                $output += 'W';
                break;
            case $cipherCode['X']:
                $output += 'X';
                break;
            case $cipherCode['Y']:
                $output += 'Y';
                break;
            case $cipherCode['Z']:
                $output += 'Z';
                break;
            case $cipherCode['_0']:
                $output += '0';
                break;
            case $cipherCode['_1']:
                $output += '1';
                break;
            case $cipherCode['_2']:
                $output += '2';
                break;
            case $cipherCode['_3']:
                $output += '3';
                break;
            case $cipherCode['_4']:
                $output += '4';
                break;
            case $cipherCode['_5']:
                $output += '5';
                break;
            case $cipherCode['_6']:
                $output += '6';
                break;
            case $cipherCode['_7']:
                $output += '7';
                break;
            case $cipherCode['_8']:
                $output += '8';
                break;
            case $cipherCode['_9']:
                $output += '9';
                break;
            case $cipherCode['backQuote']:
                $output += '`';
                break;
            case $cipherCode['tilde']:
                $output += '~';
                break;
            case $cipherCode['exclaimation']:
                $output += '!';
                break;
            case $cipherCode['at']:
                $output += '@';
                break;
            case $cipherCode['hash']:
                $output += '#';
                break;
            case $cipherCode['dollar']:
                $output += '$';
                break;
            case $cipherCode['percent']:
                $output += '%';
                break;
            case $cipherCode['caret']:
                $output += '^';
                break;
            case $cipherCode['amperstand']:
                $output += '&';
                break;
            case $cipherCode['asterisk']:
                $output += '*';
                break;
            case $cipherCode['openParenthesis']:
                $output += '(';
                break;
            case $cipherCode['closeParenthesis']:
                $output += ')';
                break;
            case $cipherCode['minus']:
                $output += '-';
                break;
            case $cipherCode['underscore']:
                $output += '_';
                break;
            case $cipherCode['equal']:
                $output += '=';
                break;
            case $cipherCode['plus']:
                $output += '+';
                break;
            case $cipherCode['openBracket']:
                $output += '[';
                break;
            case $cipherCode['openBrace']:
                $output += '{';
                break;
            case $cipherCode['closeBracket']:
                $output += ']';
                break;
            case $cipherCode['closeBrace']:
                $output += '}';
                break;
            case $cipherCode['backSlash']:
                $output += '\\';
                break;
            case $cipherCode['verticalBar']:
                $output += '|';
                break;
            case $cipherCode['semicolon']:
                $output += ';';
                break;
            case $cipherCode['colon']:
                $output += ':';
                break;
            case $cipherCode['singleQuote']:
                $output += "'";
                break;
            case $cipherCode['doubleQuote']:
                $output += '"';
                break;
            case $cipherCode['comma']:
                $output += ',';
                break;
            case $cipherCode['lessThan']:
                $output += '<';
                break;
            case $cipherCode['period']:
                $output += '.';
                break;
            case $cipherCode['moreThan']:
                $output += '>';
                break;
            case $cipherCode['forwardSlash']:
                $output += '/';
                break;
            case $cipherCode['questionMark']:
                $output += '?';
                break;
            case $cipherCode['space']:
                $output += ' ';
                break;
            default:
                return null;
        }
    }

    return $output;
}
