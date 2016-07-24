<?php

// simples autoload para execícios deste curso
function __autoload($class)
{
    require_once $class . '.php';
}
