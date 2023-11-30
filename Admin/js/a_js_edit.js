function LoadUserData(id){
  var arr = [];
  var result = $.ajax({
      type: 'POST',       
      url: window.location.href,
      data: {
        'grab':'userData',
        'id':id
      },
      dataType: 'txt',
      context: document.body,
      global: false,
      async:false,
      success: function(data) {
          return data;
      }
  }).responseText;
  sumt = JSON.parse(result);
  $.each(sumt, function(key, value) {
      arr[key] = value;
  });
  //console.log(arr);
  return arr[0];
}
function EditUserData(id,fname,lname,email,tel,pass){
  var arr = [];
  var result = $.ajax({
      type: 'POST',       
      url: window.location.href,
      data: {
        'edit':'userData',
        'id':id,
        'fname':fname,
        'lname':lname,
        'email':email,
        'tel':tel,
        'pass':pass
      },
      dataType: 'txt',
      context: document.body,
      global: false,
      async:false,
      success: function(data) {
          return data;
      }
  }).responseText;
  sumt = JSON.parse(result);
  $.each(sumt, function(key, value) {
      arr[key] = value;
  });
  //console.log(arr);
  return arr[0];
}
function DeleteUser(id){
  var arr = [];
  var result = $.ajax({
      type: 'POST',       
      url: window.location.href,
      data: {
        'edit':'delete',
        'id':id
      },
      dataType: 'txt',
      context: document.body,
      global: false,
      async:false,
      success: function(data) {
          return data;
      }
  }).responseText;
  sumt = JSON.parse(result);
  $.each(sumt, function(key, value) {
      arr[key] = value;
  });
  //console.log(arr);
  return arr[0];
}
function toggleModalWithData(id){
    var modal = document.getElementById("myModal");
    $("#disp_userid").val('');
    $("#disp_nom").val('');
    $("#disp_prenom").val('');
    $("#disp_email").val('');
    $("#disp_tel").val('');
    $("#disp_pass").val('');

    id = LoadUserData(id)['id'];
    fname = LoadUserData(id)['nom'];
    lname = LoadUserData(id)['prenom'];
    email = LoadUserData(id)['email'];
    tel = LoadUserData(id)['tel'];
    pass = LoadUserData(id)['pass'];

    $("#disp_userid").val(id);
    $("#disp_nom").val(fname);
    $("#disp_prenom").val(lname);
    $("#disp_email").val(email);
    $("#disp_tel").val(tel);
    $("#disp_pass").val(pass);

    modal.style.display = "block";
}
function toggleDeleteModalWithData(id){
  var modal = document.getElementById("DeleteModal");
  $("#_userid").val(id);

  modal.style.display = "block";
}
$( document ).ready(function() {
    console.log( "ready!" );
    var modal = document.getElementById("myModal");
    var modal2 = document.getElementById("DeleteModal");



window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}


$('.SaveDataBtn').click(function () {
  id =  $("#disp_userid").val();
  fname = $("#disp_nom").val();
  lname = $("#disp_prenom").val();
  email = $("#disp_email").val();
  tel = $("#disp_tel").val();
  pass = $("#disp_pass").val();
  
  if(EditUserData(id,fname,lname,email,tel,pass) == 'success'){
    location.reload(true);
  }else{
    alert("error");
  }
});

$('.ConfirmDeleteUserBtn').click(function () {
  id =  $("#_userid").val();
  
  if(DeleteUser(id) == 'success'){
    location.reload(true);
  }else{
    alert("error");
  }
});

});

