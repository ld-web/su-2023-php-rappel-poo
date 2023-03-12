<?php
// Classe, objet, [getters, setters](encapsulation), attributs/propriétés, constructeur, méthodes, constantes
// Héritage, polymorphisme, abstractions, classe abstraite, interfaces

require_once 'vendor/autoload.php';

use App\Customer;
use App\Employee;
use App\User;

/* Class abstraite User
  use App\User;

  $user = new User();
  var_dump($user);

  try {
    $user->setName("Bob");
    echo $user->getName();
  } catch (InvalidArgumentException $e) {
    echo "Une erreur est survenue : " . $e->getMessage();
  }
  var_dump($user);
*/


$client = new Customer();
$client
  ->setName('Johnny')
  ->setCustomerNumber('client-0123');
var_dump($client);
echo $client->getInformations();

$emp = new Employee();
$emp
  ->setEmpNumber('emp-4567')
  ->setName("Bobby");
var_dump($emp);
echo $emp->getInformations() . "<br />";

/**
 * Undocumented function
 *
 * @param User[] $users
 * @return void
 */
function displayUsersInfos(array $users): void
{
  foreach ($users as $u) {
    echo $u->getInformations() . "<br />";
  }
}

displayUsersInfos([$client, $emp]);
