<?php

class View
{
    public function render(?string $calculate): void
    {
        include("templates/layout.php");
    }
}