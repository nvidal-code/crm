<?php
// Le manager gére les differentes actions à réaliser en BDD
class clientManager
{
 public $dbh;
 

 public function __construct($dbh){
   $this->setDbh($dbh);
 }

  public function add(clientClass $client)
  {
    $sql = "INSERT INTO clients(enseigne, compte, nomContact, adresse, codePostal, ville, telephone, mail, description) VALUES (:enseigne, :compte, :nomContact, :adresse, :codePostal, :ville, :telephone, :mail, :description )";
    $stmt = $this->dbh->prepare($sql);
      $stmt->bindValue(':enseigne',  $client->enseigne());
      $stmt->bindValue(':compte', $client->compte());
      $stmt->bindValue(':nomContact', $client->nomContact());
      $stmt->bindValue(':adresse', $client->adresse());
      $stmt->bindValue(':codePostal', $client->codePostal());
      $stmt->bindValue(':ville', $client->ville());
      $stmt->bindValue(':telephone', $client->telephone());
      $stmt->bindValue(':mail', $client->mail());
      $stmt->bindValue(':description', $client->description());
      $stmt->execute();
  }

  public function delete(clientClass $client)
  {
    // Exécute une requête de type DELETE.
    $this->dbh->exec('DELETE FROM client WHERE id = '.$client->id());
  }

  public function get($id)
  {
    // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet ClientClass.
    $id = (int) $id;
    $stmt = $this->dbh->query('SELECT id, enseigne, compte, nomContact, adresse, codePostal, ville, telephone, mail, description  FROM clients WHERE id = '.$id);
    $donnees = $stmt->fetch(PDO::FETCH_ASSOC);
    return new clientClass($donnees);
  }

  public function getList()
  {
    // Retourne la liste de tous les clients.
    $clients = [];

    $stmt = $this->dbh->query('SELECT id, enseigne, compte, nomContact, adresse, codePostal, ville, telephone, mail, description  FROM clients ORDER BY enseigne');

    while ($donnees = $stmt->fetch(PDO::FETCH_ASSOC))
    {
      $clients[] = new clientClass($donnees);
    }

    return $clients;
  }

  public function update(clientClass $client)
  {
      $stmt = $this->dbh->prepare('UPDATE clients SET enseigne = :enseigne, compte = :compte, nomContact = :nomContact, adresse = :adresse, codePostal = :codePostal, ville = :ville, telephone = :telephone, mail = :mail, description = :description WHERE id = :id');
      $stmt->bindValue(':enseigne',  $client->enseigne());
      $stmt->bindValue(':compte',  $client->compte());
      $stmt->bindValue(':nomContact', $client->nomContact());
      $stmt->bindValue(':adresse', $client->adresse());
      $stmt->bindValue(':codePostal', $client->codePostal());
      $stmt->bindValue(':ville', $client->ville());
      $stmt->bindValue(':telephone', $client->telephone());
      $stmt->bindValue(':mail', $client->mail());
      $stmt->bindValue(':description', $client->description());

      $stmt->execute();
  }


  public function setDbh(PDO $dbh){
    $this->dbh = $dbh;
  }
}