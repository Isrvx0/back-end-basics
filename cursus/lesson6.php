<?php

    /* ARRAY IN PHP*/

    // we use it to storge couple of names together.
    $names = array("Jimin","Barka","Felix");
        # to call a specifc name, we use it index.
        # we can change an array element by just calling the index and give it a new  value:
    $names[2] = "Hyunjin";
    echo ($names[2]."<hr>");

        # This is the way for making dic in php! we give eacht key a value by using "=>":
    $list = array( "a"=>"Jimin" , "b"=>"Barka" , "c"=>"Felix");
    echo ($list["c"]);
?>