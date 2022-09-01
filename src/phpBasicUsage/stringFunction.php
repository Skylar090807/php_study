<h2>String Function</h2>
<hr>

<h3>strlen() - Return the Length of a String</h3>
<?php
echo strlen("Hello world!"); // outputs 12
?>
<hr>

<h3>str_wordk_count()</h3>
<?php
echo str_word_count("Hello world!"); // outputs 2
?>
<hr>

<h3>strrev() - Reverse a String</h3>
<?php
echo strrev("Hello world!"); // outputs !dlrow olleH
?>
<hr>

<h3>strpos() - Search For a Text Within a String</h3>
<?php
echo strpos("Hello world!", "world"); // outputs 6
?>
<hr>

<h3>str_replace() - Replace Text Within a String</h3>
<?php
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
?>
<hr>