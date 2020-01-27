  function validateString(candidate){
    let emailRegex = new RegExp("^[A-Za-z éèàçù~_+-]+[']?[A-Za-zéèàçù~_-]+$",'i');
    //^[A-Za-z éèàçù~_+-]+[']?[A-Za-z éèàçù~_-]+$
    return emailRegex.test(candidate);
  }
  function validateAdresse(candidate){
    if(candidate=="" || candidate.length<=3){
      return false;
    }else {
      return true;
    }
  }
  function validateEmail(candidate){
    let emailRegex = new RegExp("^[0-9a-zA-Z._ éèàçù~^¨-]+@[0-9a-zA-Z_éàù-]{2,}\.[- a-z_]{2,6}$",'i');
    return emailRegex.test(candidate);
  }
  function validatePhone(candidate){
    let emailRegex = new RegExp("^[+]?[0-9]+$");
    let taille = candidate.length >3;
    let reg = emailRegex.test(candidate);
    if(taille== true && reg==true){
      return true;
    }else {
      return false;
    }
  }
  function validateCompany(candidate){
    let emailRegex = new RegExp("^[A-Za-z0-9 éèàçù~_+-]+[']?[A-Za-z0-9éèàçù~_-]+$",'i');
    //^[A-Za-z éèàçù~_+-]+[']?[A-Za-z éèàçù~_-]+$
    return emailRegex.test(candidate);
  }
  function validateCountry(candidate){
    let emailRegex = new RegExp("^[A-Za-z éèàçù~_+-]+[']?[A-Za-zéèàçù~_-]+$",'i');
    //^[A-Za-z éèàçù~_+-]+[']?[A-Za-z éèàçù~_-]+$
    return emailRegex.test(candidate);
  }
  function validatePostal(candidate){
    let emailRegex = new RegExp("^[a-zA-Z0-9]+$",'i');
    let taille = candidate.length >3;
    let reg= emailRegex.test(candidate);
    if(taille== true && reg==true){
      return true;
    }else {
      return false;
    }
  }
  function validatePays(candidate){
    if(candidate!="Pays"){
      return true;
    }else {
      return false;
    }
  }
  function submitForm(){
    var formulaire = $('#formulaire');
      var form = formulaire.serialize();
      $.ajax({
          type: "POST",
          dataType: "json",
          url: $('#formulaire').attr( 'action' ),
          data: form,
          reponseType:'json',
          beforeSend: function () {
            $("#formulaire").hide();
            $(".chargement").show();
          },
          success: function (data) {
            var obj=data;
            if(obj=="ok"){
              $("#message_alert").hide();
              $("#message_success").show();
            }else {
              $("#message_alert").text("");
              for(o in obj){
                if(obj[o]==false){
                  let champ = o;
                  if(o=="tel"){
                    champ="téléphone";
                  }
                  $("#message_alert").append("<p>Il y a une erreure de saissie sur le champ <b>"+champ+"</b></p>");
                }
                
              }
            }
          },
          complete: function () {
            $(".chargement").hide();
            $("#formulaire").show();
          },
          error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            $(".alert-secondary").append("<p>"+jqXHR + " :: " + textStatus + " :: " + errorThrown+"</p>");
          }
      });
  }