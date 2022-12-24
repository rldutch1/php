<?php 
echo "
&lt;?php<br />
//http://www.ibm.com/developerworks/library/os-php-7oohabits/<br />
class Person<br />
{<br />
    private \$prefix;<br />
    private \$givenName;<br />
    private \$familyName;<br />
    private \$suffix;<br />
<br />
<br />
    public function setPrefix(\$prefix)<br />
    {<br />
        \$this-&gt;prefix = \$prefix;<br />
    }<br />
<br />
    public function getPrefix()<br />
    {<br />
        return \$this-&gt;prefix;<br />
    }<br />
<br />
    public function setGivenName(\$gn)<br />
    {<br />
        \$this-&gt;givenName = \$gn;<br />
    }<br />
<br />
    public function getGivenName()<br />
    {<br />
        return \$this-&gt;givenName;<br />
    }<br />
<br />
    public function setFamilyName(\$fn)<br />
    {<br />
        \$this-&gt;familyName = \$fn;<br />
    }<br />
<br />
    public function getFamilyName()<br />
    {<br />
        return \$this-&gt;familyName;<br />
    }<br />
<br />
    public function setSuffix(\$suffix)<br />
    {<br />
        \$this-&gt;suffix = \$suffix;<br />
    }<br />
<br />
    public function getSuffix()<br />
    {<br />
        return \$suffix;<br />
    }<br />
<br />
}<br />
<br />
\$person = new Person();<br />
\$person-&gt;setPrefix(\"Mr.\");<br />
\$person-&gt;setGivenName(\"Robert\");<br />
\$person-&gt;setFamilyName(\"Holland\");<br />
<br />
\$pre = \$person-&gt;getPrefix().\" \";<br />
\$first = \$person-&gt;getGivenName().\" \";<br />
\$last = \$person-&gt;getFamilyName().\".\r\n\";<br />
<br />
//echo(\$person-&gt;getPrefix().\" \".\$person-&gt;getGivenName().\" \".\$person-&gt;getFamilyName().\".\r\n\");<br />
echo \$pre, \$first , \$last;<br />
?&gt;
<hr />Results:<br />
";
?>
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
$last = $person->getFamilyName().". ";

//echo($person->getPrefix()." ".$person->getGivenName()." ".$person->getFamilyName().". ");
echo $pre, $first , $last;
?>