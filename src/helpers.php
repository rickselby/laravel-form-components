<?php

function toDotNotation($name)
{
    return preg_replace('/\[(.+)\]/U', '.$1', $name);
}
