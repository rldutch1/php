&lt;?php<br />
    function process_something1($a){<br />
        foreach($a as $value){<br />
            //$something = &#039;Some math or other logic here&#039;;<br />
            echo $something = $value . &quot;&lt;br /&gt;&quot;;<br />
        }<br />
        return $something;<br />
    }<br />
    //$input=[]; // An array of some kind<br />
    $input=[&quot;Robert&quot; =&gt; &quot;Holland&quot;, &quot;Hubba&quot; =&gt; &quot;Bubba&quot;];<br />
    process_something1($input);<br />
    <br />
    function process_something2($a){<br />
        foreach($a as $key =&gt; $value){<br />
            //$something = &#039;Some math or other logic here&#039;;<br />
            echo $something = $key . &quot;---&quot; . $value . &quot;&lt;br /&gt;&quot;;<br />
        }<br />
        return $something;<br />
    }<br />
    //$input=[]; // An array of some kind<br />
    $input=[&quot;Robert&quot; =&gt; &quot;Holland&quot;, &quot;Hubba&quot; =&gt; &quot;Bubba&quot;];<br />
    process_something2($input);<br />
    <br />
    function process_something3($a){<br />
        foreach($a as $key =&gt; $value){<br />
            //$something = &#039;Some math or other logic here&#039;;<br />
            echo $something = $key . &quot;---&quot; . $value . &quot;&lt;br /&gt;&quot;;<br />
        }<br />
        return $something;<br />
    }<br />
      $cars = array(<br />
          &quot;Honda&quot; =&gt; &quot;Odessey&quot;,<br />
          &quot;Saturn&quot; =&gt; &quot;Vue&quot;,<br />
          &quot;GMC&quot; =&gt; &quot;Yukon&quot;,<br />
          &quot;Nissan&quot; =&gt; &quot;Xterra&quot;,<br />
          &quot;Chevrolet&quot; =&gt; &quot;Suburban&quot;,<br />
          &quot;Moneymaker&quot; =&gt; 1,<br />
      );<br />
    process_something3($cars);<br />
?&gt;