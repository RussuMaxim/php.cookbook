<?php
if ($_POST['user']) {
    print "Hello";
    print $_POST['user'];
    print "!";

} else {
    print <<<_HTML_
<from method="post" action="$_SERVER[PHP_SELF]">
Your Name: <input type="text" name="user" />
<br/>
<button type="submit">Say Hello</button>
</form>
_HTML_;
}