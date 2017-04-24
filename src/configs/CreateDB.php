<?php
/**
 * Created by PhpStorm.
 * User: mishabehey
 * Date: 4/18/17
 * Time: 2:34 PM
 */
namespace HMRTeam\hw4;
require_once ("Config.php");

$hostname = \HMRTeam\hw4\Config::host.":".\HMRTeam\hw4\Config::port;

$db = new \mysqli($hostname, \HMRTeam\hw4\Config::user, \HMRTeam\hw4\Config::password);

if ($db -> connect_error)
{
    die('Could not connect to the database');
}

echo "successfully connection\n";