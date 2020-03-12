<?php 
    
    $ordner = "Anfragendaten/anfrage.txt";

    if($_GET["email"] <> "")
    {
        date_default_timezone_set("Europe/Berlin");
        $timestamp = time();
        
        $datum = date("d.m.Y", $timestamp);
        $time = date("H:i", $timestamp);
        
        $handle = fopen ($ordner, "a");
        
        fwrite ($handle, $_GET["email"]);
        fwrite ($handle, " ");
        fwrite ($handle, $_GET["name"]);
        fwrite ($handle, " ");
        fwrite ($handle, $datum);
        fwrite ($handle, " ");
        fwrite ($handle, $time);
        fwrite ($handle, "/");
        fwrite($handle,"\r\n");
            
        fclose ($handle);
        echo "Datei wurde gespeichert und ich melde mich schnellstmöglich";
        exit;
    }
?>


