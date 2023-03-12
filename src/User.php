<?php
// FQCN : App\User
// App correspond à src/, donc mon nom de fichier résolu devient : src/User.php

namespace App;

use InvalidArgumentException;

// User porte le même nom (strictement, à la majuscule près) que le fichier
// PascalCase : Tous les mots commencent par une majuscule
// camelCase  : Tous les mots commencent par une majuscule (tolérance pour le premier mot)
abstract class User
{
  // Un trait sert à composer une classe d'autres extraits de classe
  // Dans ce cas, on sera plus sur de la composition que de l'héritage
  use IdTrait;
  protected string $name;

  abstract public function getInformations(): string;

  public function getName(): string
  {
    return strtoupper($this->name);
  }

  /**
   * @param string $name
   * @return static
   * @throws InvalidArgumentException if name is empty
   */
  public function setName(string $name): static
  {
    if ($name === '') {
      throw new InvalidArgumentException("Le nom ne peut être vide");
    }
    $this->name = $name;

    return $this;
  }
}
