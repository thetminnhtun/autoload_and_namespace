<?php 

function today()
{
    echo 'Todoy is: '. date('d-M-Y', time()) . '<br>';
}

function tomorrow()
{
    echo 'Tomorrow is: '. date('d-M-Y', strtotime('+1 day')) . '<br>';
} 

function yesterday()
{
    echo 'Tomorrow is: '. date('d-M-Y', strtotime('-1 day')) . '<br>';
}