function checkform ()
    {
        //Nom
        var regnom = /^[a-zA-Z]+$/;
        var nom = document.getElementById("nom").value;
    
        if (!regnom.test(nom))
        {
            document.getElementById("enom").innerHTML = "Veuillez saisir un nom valide ";
            return false;
        }
    
        else 
        {
            
        document.getElementById("nom").innerHTML = "";
        }
    
    
        //Prénom
        var regprenom = /^[a-zA-Z]+$/;
        var prenom = document.getElementById("prenom").value;
    
        if(!regprenom.test(prenom))
        {
            document.getElementById("eprenom").innerHTML = "Veuillez saisir un prenom valide.<br>";
            return false;
        }
    
        else 
        {
            document.getElementById("prenom").innerHTML = "";
        }
    
    
    
    
        //Email
        var regmail = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,3}$/
        var mail = document.getElementById("email").value;
    
        if (!regmail.test(mail))
        {
            document.getElementById("eemail").innerHTML = "Renseignez une adresse mail @";
            return false;
        }
    
        else
        {
            document.getElementById("email").innerHTML = "";
        }
    
    
        // Question 
        if (document.getElementById("question").value == "")
    
        {
            document.getElementById("equestion").innerHTML = "Vous n'avez saisi aucune question <br>";
            return false;
        }
    
        else 
        {
            document.getElementById("question").innerHTML = "";
        }
    
    
    }