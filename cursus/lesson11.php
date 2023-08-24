<!DOCTYPE html>
<html>
    <style>
        h1 {
            text-align: center;
        }
        div {
            border: 5px solid #018749;
            padding: 5px;
            background-color: #ACE1AF;
            align-items: center;
        }
        textarea {
            width: 100%;
            height: 150px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            resize: none;
        }
    </style>    
    <body>
        <?php
            //$text = "";

            if ($_SERVER["REQUEST_METHOD"]=='POST') {
                // $myfile = fopen("myfile.txt",'r');
                // $text = fread($myfile,filesize("myfile.txt"));
                // fclose($myfile);
                //         # 'fopen' will open the file, the 'r' is for 'read'. then 'fread' will read the fill (print it), then we'll close it with 'fclose'.
                //         # 'filesize' returns how many characters are in the text file. 
                $myfile = fopen ("newfile.txt",'w');
                        # 'w' here means for w in 'write.' 
                fwrite($myfile, $_POST["textfile"]);
                fclose($myfile);
            
            
            }
        ?>
        <form method="post">
            <div>
                <h1> Write file form </h1>

                <label> File content </label>
                <textarea name="textfile" placeholder="type.."></textarea>
                <button>submit</button>
            </div>  
        </form>
    </body>