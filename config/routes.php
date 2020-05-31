<?php

return array (
    'home' => 'home/index',     // test/index = название контроллера и его екшен
    'test' => 'test/index',
    'test/([a-z]+)/([0-9]+)' => 'test/view/$1/$2'); // Первое регулярное выражение принимает в буквах второе в цыфрах
