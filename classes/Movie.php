<?php 

class Movie{
    private string $nome;
    private int $durata;
    private int $anno;
    private float $budget;
    private array $genere;
    private string $lingua;
    private string $nazione;

    public function __construct($_nome,$_anno,$_lingua,$_nazione)
    {
        $this->setNome($_nome);
        $this->setAnno($_anno);
        $this->setLingua($_lingua);
        $this->setNazione($_nazione);
    }

    public function setGenere($_genere){
        $this->genre = $_genere;
    }
    
    public function setNome($_nome){
        $this->nome = $_nome;
    }
    
    public function setDurata($_durata){
        $this->durata = $_durata;
    }
    
    public function setAnno($_anno){
        $this->anno = $_anno;
    }
    
    public function setBudget($_budget){
        $this->budget = $_budget;
    }
    
    public function setLingua($_lingua){
        $this->lingua = $_lingua;
    }
    
    public function setNazione($_nazione){
        $this->nazione = $_nazione;
    }
    

    public function getGenere(){
        return $this->genere;
    }

    public function getName(){
        return $this->name;
    }

    public function getDurata(){
        return $this->durata;
    }

    public function getAnno(){
        return $this->anno;
    }

    public function getBudget(){
        return intval($this->budget);
    }

    public function getLingua(){
        return $this->lingua;
    }

    public function getNazione(){
        return $this->nazione;
    }

    public function getNomeAnno(){
        return "{$this->nome} {$this->anno}";
    }
}
?>