<?php
class clientClass {

    public $id;
    public $client;
    public $nomContact;
    public $adresse;
    public $codePostal;
    public $ville;
    public $telephone;
    public $mail;
    public $description;

    public function hydrate(array $donnees)
    {
      foreach ($donnees as $key => $value)
      {
        // On récupère le nom du setter correspondant à l'attribut.
        $method = 'set'.ucfirst($key);
        var_dump($value);
            
        // Si le setter correspondant existe.
        if (method_exists($this, $method))
        {
          // On appelle le setter.
          $this->$method($value);
        }
      }
    }

    // public function __construct($client, $nomContact){
    //     $this->setClient($client);
    //     $this->setNomContact($nomContact);
    //   }

// Getters
public function id()
{
    return $this->id;
}

public function client()
{
    return $this->client;
}

public function nomContact()
{
    return $this->nomContact;
}
public function adresse()
{
    return $this->adresse;
}

public function codePostal()
{
    return $this->codePostal;
}

public function ville()
{
    return $this->ville;
}

public function telephone()
{
    return $this->telephone;
}

public function mail()
{
    return $this->mail;
}

public function description()
{
    return $this->description;
}

// Liste des setters
  
public function setId($id){
  // On convertit l'argument en nombre entier.
  // Si c'en était déjà un, rien ne changera.
  // Sinon, la conversion donnera le nombre 0 (à quelques exceptions près, mais rien d'important ici).
  $id = (int) $id;
  
  // On vérifie ensuite si ce nombre est bien strictement positif.
  if ($id > 0) {
    // Si c'est le cas, c'est tout bon, on assigne la valeur à l'attribut correspondant.
    $this->_id = $id;
  }
}

public function setClient($client){
  // On vérifie qu'il s'agit bien d'une chaîne de caractères.
  if (is_string($client)) {
    $this->client = $client;
  }
}

public function setNomContact($nomContact){
    if (is_string($nomContact)){
        $this->nomContact = $nomContact;
    }
}

public function setAdresse($adresse){
    if (is_string($adresse)){
        $this->adresse = $adresse;
    }
}

public function setCodePostal($codePostal){
    if (is_string($codePostal)){
        $this->codePostal = $codePostal;
    }
}

public function setVille($ville){
    if (is_string($ville)){
        $this->ville = $ville; 
    }
}

public function setTelephone($telephone){
    if (is_string($telephone)){
        $this->telephone = $telephone;
    }
}

public function setMail($mail){
    if (is_string($mail)){
        $this->mail = $mail;
    }
}

public function setDescription($description){
    if (is_string($description)){
        $this->description = $description;
    }
}

}
?>