<!DOCTYPE html>
    <html>
    <body style="text-align:center">



        <?php


            echo "
            <form action='' method='post'>

                Nominativo: <input type='text'  name='nominativo'><br><br>

                Genere: 
                <input type='radio' name='gender' value='male'> M 
                <input type='radio' name='gender' value='female'> F <br><br>


                Debiti:
                <input type='checkbox' name='gender' value'ITALIANO'> Italiano
                <input type='checkbox' name='gender' value'Matematica'> Matematica
                <input type='checkbox' name='gender' value'Telecomunicazioni'> Telecomunicazioni
                <input type='checkbox' name='gender' value'Informatica'> Informatica<br>

                
                <input type='submit' value'Esito scrutinio' > 
            </form>
            ";


        ?>



    </body>
    </html>
