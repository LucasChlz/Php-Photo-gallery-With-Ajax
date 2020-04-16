window.onload = () => {


  var form_register = document.querySelector("#form-register");

  var div_msg = document.querySelector("#div-msg");

  form_register.onsubmit = (e) => {

      e.preventDefault();

      var form = new FormData(form_register);

      xmlHttpPost('ajax/create', () => {
          
          beforeSend(() => {
              div_msg.innerHTML = "Loading...";
          });

          success(() => {
              console.log(xhttp.responseText);
              div_msg.innerHTML = 'Successfully registered';
          });

      },form);
      
  }



}


