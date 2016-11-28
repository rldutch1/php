<?php
//http://www.ibm.com/developerworks/library/os-php-7oohabits/
class Person
{
    private $prefix;
    private $givenName;
    private $familyName;
    private $suffix;
    
    
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
    }
    
    public function getPrefix()
    {
        return $this->prefix;
    }
    
    public function setGivenName($gn)
    {
        $this->givenName = $gn;
    }
    
    public function getGivenName()
    {
        return $this->givenName;
    }
    
    public function setFamilyName($fn)
    {
        $this->familyName = $fn;
    }
    
    public function getFamilyName() 
    {
        return $this->familyName;
    }
    
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;
    }
    
    public function getSuffix()
    {
        return $suffix;
    }
    
}

$person = new Person();
$person->setPrefix("Mr.");
$person->setGivenName("Robert");
$person->setFamilyName("Holland");

$pre = $person->getPrefix()." ";
$first = $person->getGivenName()." ";
$last = $person->getFamilyName().".\r\n";

//echo($person->getPrefix()." ".$person->getGivenName()." ".$person->getFamilyName().".\r\n");
echo $pre, $first , $last;
?>