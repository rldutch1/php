<?php
echo "
    &lt;?php  <br />
    function add(...\$numbers) {  <br />
        \$sum = 0;  <br />
        foreach (\$numbers as \$n) {  <br />
            \$sum += \$n;  <br />
        }  <br />
        return \$sum;  <br />
    }  <br />
      <br />
    echo add(1, 2, 3, 4, 5, 6) . &quot;\r\n&quot;;  <br />
    ?&gt;
";
