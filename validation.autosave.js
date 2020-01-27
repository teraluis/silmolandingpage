
$(document).ready(function(){
  var derouler=0;
$( "#derouler" ).click(function() {
  if(derouler==0){
    $( ".cachee" ).removeClass("animation");
  $( ".cachee" ).addClass("animation");
  $( "#derouler" ).html('Enrouler <i class="fas fa-sort-up"></i>');
  derouler=1;
  }else {
  $( ".cachee" ).removeClass("animation");
  $( ".cachee" ).addClass("animation2");
  $( "#derouler" ).html('Derouler <i class="fas fa-sort-down"></i>');
  derouler=0;
  }
});
  $("input.string").change( function (value){
      let valeur = $(this).val();
      $(this).css("border","solid 2px transparent");
      if(validateString(valeur)){
        $(this).css("border-color","green");
      }else {
        $(this).css("border-color","red");
      }
  });
  $("#mail").change( function (value){
      let valeur = $(this).val();
      $(this).css("border","solid 2px transparent");
      if(validateEmail(valeur)){
        $(this).css("border-color","green");
      }else {
        $(this).css("border-color","red");
      }
  });

  $("#tel").change( function (value){
      let valeur = $(this).val();
      $(this).css("border","solid 2px transparent");
      if(validatePhone(valeur)){
        $(this).css("border-color","green");
      }else {
        $(this).css("border-color","red");
      }
  });
  $("#mobile").change( function (value){
      let valeur = $(this).val();
      $(this).css("border","solid 2px transparent");
      if(validatePhone(valeur)){
        $(this).css("border-color","green");
      }else {
        $(this).css("border-color","red");
      }
  });
    $("#magasin").change( function (value){
      let valeur = $(this).val();
      $(this).css("border","solid 2px transparent");
      if(validateCompany(valeur)){
        $(this).css("border-color","green");
      }else {
        $(this).css("border-color","red");
      }
  });
  $("#adresse").change( function (value){
      let valeur = $(this).val();
      $(this).css("border","solid 2px transparent");
      if(validateAdresse(valeur)){
        $(this).css("border-color","green");
      }else {
        $(this).css("border-color","red");
      }
  });
  $("#postal").change( function (value){
      let valeur = $(this).val();
      $(this).css("border","solid 2px transparent");
      if(validatePostal(valeur)){
        $(this).css("border-color","green");
      }else {
        $(this).css("border-color","red");
      }
  });
  $('#pays').change( function (value){
    let pays = $('#pays option:selected').text();
    $(this).css("border","solid 2px transparent");
    if(pays=="Pays"){
      $(this).css("border-color","red");
    }else {
      $(this).css("border-color","green");
    }
  });
  $( "#formulaire" ).submit(function( event ) {
      event.preventDefault();
      submitForm();
      var validation_finale = validateString($("#nom").val())*
      validateString($("#prenom").val())*validateEmail($("#mail").val())*
      validatePhone($("#tel").val())*validatePhone($("#mobile").val())*validateCompany($("#magasin").val())*
      validateAdresse($("#adresse").val())*validatePostal($("#postal").val())*
      validatePays($('#pays option:selected').text())*validatePostal($("#postal").val());
    if(validation_finale==1 || validation_finale=="1"){
      //submitForm();
    }else {
      $("#message_alert").show();
    }
      $( "#pays" ).trigger( "change" );
      $( "#postal" ).trigger( "change" );
      $( "#mobile" ).trigger( "change" );
      $( "#tel" ).trigger( "change" );
      $( "#mail" ).trigger( "change" );
      $( "#adresse" ).trigger( "change" );
      $( "input.string" ).trigger( "change" );
  });
});
