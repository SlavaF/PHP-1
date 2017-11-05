<?php

    function discriminant ($a, $b, $c)
    {
        return ($b * $b) - (4 * $a * $c);
    }

    assert (0 == discriminant(1, 2, 1));
    assert (25 == discriminant(2, 7, 3));
    assert ( -56 == discriminant(2, 4, 9));

    function gender ($name)
    {
        $i = substr($name, -4);
        if ('на' == $i || 'ия' == $i || 'ья' == $i){
            return 'Женский';
        }
        elseif ('ий' == $i || 'ав' == $i || 'ей' == $i) {
            return 'Мужской';
        }
        else {
            return null;
        }
    }

    assert ('Женский' == gender('Екатерина'));
    assert ('Женский' == gender('Валерия'));
    assert ('Женский' == gender('Софья'));
    assert ('Мужской' == gender('Ростислав'));
    assert ('Мужской' == gender('Виталий'));
    assert ('Мужской' == gender('Фаддей'));
    assert (null == gender('Ктото'));

?>
