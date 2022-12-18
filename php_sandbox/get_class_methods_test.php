<?php
//https://www.php.net/manual/en/function.get-class-methods.php
class C
{
    private function privateMethod()
    {
       
    }
    public function publicMethod()
    {
       
    }
    public function __construct()
    {
        echo '$this:';
        var_dump(get_class_methods($this));
        echo 'C (inside class):';
        var_dump(get_class_methods('C'));
    }
}
$c = new C;
echo '$c:';
var_dump(get_class_methods($c));
echo 'C (outside class):';
var_dump(get_class_methods('C'));
?>
