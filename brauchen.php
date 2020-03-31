<?php 

    class SpeichernKontakt()
    {
        //Test
    }

    class Hashing()
    {
        //Test
    }

    class Weitergeben()
    {
        //Test
    }

    class SQLDatenbank()
    {
        //Test
    }

    class BilderundTexte()
    {
        //Test
    }


    /*  Verschlüsseln duch Hashes*/

    class VerschlüsselnHashes()
    {
        //Hashen
        function verschlüsselnHash()
        {
             $hash = password_hash('passwort');
	               if(password_verify('passwort',$hash))
                        {
                            echo "passt!";
                        }
        }
       
        
    }

    /*Verschlüsseln mit mcrypt_encrypt decrypt  AES*/

    class Verschlüsselnmcrypt()
    {
        
        function verschüsseln ()
        {
            //Entschlüsseln
            $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB); 
            $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND); 
            echo mcrypt_encrypt(MCRYPT_RIJNDAEL_256, "passwort", "Ich bin geheim!", MCRYPT_MODE_ECB, $iv);
        }
        
        function entschlüsseln()
        {
            //Entschlüsseln
            
            echo mcrypt_decrypt(MCRYPT_RIJNDAEL_256, "passwort", $encrypted, MCRYPT_MODE_ECB,$iv); 
        }
        
    }


?>