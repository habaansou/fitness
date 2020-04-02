<?php
/**
 * Created by PhpStorm.
 * User: David Ansoumane HABA
 * Date: 21/01/20
 * Time: 17:00
 */

if(isset($_SESSION['fitness']) AND !empty($_SESSION['fitness'])){
    unset($_SESSION['fitness']);
    security();
}
