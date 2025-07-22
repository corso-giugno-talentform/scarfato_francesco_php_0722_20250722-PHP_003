<?php

abstract class Categoria
{
}

abstract class News extends Categoria
{
    abstract public function getMyCategory();
}

abstract class Sport extends Categoria
{
    abstract public function getMyCategory();
}

abstract class Gossip extends Categoria
{
    abstract public function getMyCategory();
}

abstract class Storia extends Categoria
{
    abstract public function getMyCategory();
}


