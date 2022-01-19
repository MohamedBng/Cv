 function erreur() {
    var mail = $('#mail').val();
    var confirmationMail = $('#confirmationMail').val();
    var contenu = $('#contenu').val();
    var nom = $('#nom').val();
    var sujet = $('#sujet').val();

    if (mail!=confirmationMail) {
         event.preventDefault();
      alert("Le mail et la confirmation doivent etre identique");
      stopImmediatePropagation();
     }
   
     $.ajax({
       type : 'post',
       url : 'mail.php',
       
       data :{ 
              mail: mail,
              confirmationMail: confirmationMail,
              nom:nom,
              message: contenu, 
              sujet: sujet
           },
});
    
  

return false;
}