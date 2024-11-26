<?php
 echo "&lt;?php<br />
// ----------------------------------------------------------------------------<br />
// Script Author: Robert Holland <br />
// Script Name: arrayitemmatch.php<br />
// Creation Date: Fri Nov 22 2024 11:01:29 GMT-0700 (MST)<br />
// Last Modified: <br />
// Copyright (c)2024<br />
// Version: 1.0.0 <br />
// Purpose: Match items between two arrays. Similar to my radiation_onc function.<br />
// ----------------------------------------------------------------------------<br />
<br />
//The function arrayitemmatch will display matching items between two arrays. <br />
//It takes two options 1, or 2. Default is 1.<br />
//Option 1 will display the matching items and a blank space for items that do not match.<br />
//Option 2 will display the matching items only.<br />
function arrayitemmatch(&#36;array1itemname, &#36;array2, &#36;array2itemname1, &#36;array2itemname2, &#36;array2itemname3, &#36;option = 1) {<br />
    if (&#36;option == 1) {<br />
        foreach (&#36;array2 as &#36;array2item) {<br />
            if (&#36;array2item[&#36;array2itemname1] == &#36;array1itemname) { // If treatment code matches the radiation code.<br />
                return &quot;&lt;tr&gt;&lt;td&gt;&quot; . &#36;array2item[&#36;array2itemname3] . &quot;&lt;/td&gt;&lt;td&gt;&quot; . &#36;array2item[&#36;array2itemname2] . &quot;&lt;/td&gt;&lt;td&gt;&quot; . &#36;array2item[&#36;array2itemname1] . &quot;&lt;/td&gt;&lt;/tr&gt;&quot;; // Return the treatment date and result.<br />
            }<br />
        }<br />
        return &quot;&lt;tr&gt;&lt;td&gt;&amp;nbsp;&lt;/td&gt;&lt;td&gt;&amp;nbsp;&lt;/td&gt;&lt;td&gt;&amp;nbsp;&lt;/td&gt;&lt;/tr&gt;&quot;; // If no match, return empty.<br />
    } elseif (&#36;option == 2) {<br />
        foreach (&#36;array2 as &#36;array2item) {<br />
            if (&#36;array2item[&#36;array2itemname1] == &#36;array1itemname) { // If treatment code matches the radiation code.<br />
                return &quot;&lt;tr&gt;&lt;td&gt;&quot; . &#36;array2item[&#36;array2itemname3] . &quot;&lt;/td&gt;&lt;td&gt;&quot; . &#36;array2item[&#36;array2itemname2] . &quot;&lt;/td&gt;&lt;td&gt;&quot; . &#36;array2item[&#36;array2itemname1] . &quot;&lt;/td&gt;&lt;/tr&gt;&quot;; // Return the treatment date and result.<br />
            }<br />
        }<br />
        // return &quot;&quot;; // If no match, return empty.<br />
    }<br />
}<br />
<br />
// Example arrays BEGIN:<br />
&#36;dateGroup = [ // dateGroup array.<br />
    [&quot;TREATMENTDATE&quot; =&gt; &quot;2024-11-22&quot;, &quot;TREATMENTRESULT&quot; =&gt; &quot;Result1&quot;, &quot;TREATMENTCD&quot; =&gt; &quot;A123&quot;],<br />
    [&quot;TREATMENTDATE&quot; =&gt; &quot;2024-11-21&quot;, &quot;TREATMENTRESULT&quot; =&gt; &quot;Result2&quot;, &quot;TREATMENTCD&quot; =&gt; &quot;B456&quot;],<br />
    [&quot;TREATMENTDATE&quot; =&gt; &quot;2024-11-20&quot;, &quot;TREATMENTRESULT&quot; =&gt; &quot;Result3&quot;, &quot;TREATMENTCD&quot; =&gt; &quot;C789&quot;],<br />
    [&quot;TREATMENTDATE&quot; =&gt; &quot;2024-11-21&quot;, &quot;TREATMENTRESULT&quot; =&gt; &quot;Result4&quot;, &quot;TREATMENTCD&quot; =&gt; &quot;B457&quot;],<br />
    [&quot;TREATMENTDATE&quot; =&gt; &quot;2024-11-20&quot;, &quot;TREATMENTRESULT&quot; =&gt; &quot;Result5&quot;, &quot;TREATMENTCD&quot; =&gt; &quot;E654&quot;]<br />
];<br />
<br />
&#36;radiationCodes = [ // radiationCodes array.<br />
    [&quot;RAD_CD&quot; =&gt; &quot;A123&quot;, &quot;RAD_THERAPY_TYPE&quot; =&gt; &quot;XRAY&quot;],<br />
    [&quot;RAD_CD&quot; =&gt; &quot;B456&quot;, &quot;RAD_THERAPY_TYPE&quot; =&gt; &quot;PROTON&quot;],<br />
    [&quot;RAD_CD&quot; =&gt; &quot;C788&quot;, &quot;RAD_THERAPY_TYPE&quot; =&gt; &quot;PHOTON&quot;],<br />
    [&quot;RAD_CD&quot; =&gt; &quot;D321&quot;, &quot;RAD_THERAPY_TYPE&quot; =&gt; &quot;PROTON&quot;],<br />
    [&quot;RAD_CD&quot; =&gt; &quot;E654&quot;, &quot;RAD_THERAPY_TYPE&quot; =&gt; &quot;PHOTON&quot;]<br />
];<br />
// Example arrays END:<br />
<br />
// Example usage BEGIN:<br />
echo &quot;&lt;table border=&#039;1&#039;&gt;&quot;;<br />
foreach (&#36;radiationCodes as &#36;rcode) { // Each item in the radiationCodes array.<br />
//  echo arrayitemmatch(&#36;rcode[&#039;columnname&#039;], &#36;dateGroup, &quot;columnname3&quot;, &quot;columnname2&quot;, &quot;columnname1&quot;, 2); // Match each item in the radiationCodes array with &#36;dateGroup.<br />
    echo arrayitemmatch(&#36;rcode[&#039;RAD_CD&#039;], &#36;dateGroup, &quot;TREATMENTCD&quot;, &quot;TREATMENTRESULT&quot;, &quot;TREATMENTDATE&quot;, 1); // Match each item in the radiationCodes array with &#36;dateGroup.<br />
}<br />
echo &quot;&lt;/table&gt;&quot;;<br />
//arrayitemmatch(&#36;rcode[&#039;columnname&#039;], &#36;dateGroup, &quot;columnname3&quot;, &quot;columnname2&quot;, &quot;columnname1&quot;, 2);<br />
// Example usage END:<br />
?&gt;";
?>