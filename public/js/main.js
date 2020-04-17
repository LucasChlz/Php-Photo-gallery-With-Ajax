window.onload = () => {

      var form_register = document.querySelector("#form-register");

      var div_msg = document.querySelector("#div-msg");

      var div_img = document.querySelector("#div-img");

      form_register.onsubmit = (e) => {

          e.preventDefault();

          var form = new FormData(form_register);

          xmlHttpPost('ajax/create', () => {
              
              beforeSend(() => {
                  div_msg.innerHTML = "Loading...";
              });

              success(() => {
                  var res = xhttp.responseText;
                  if(res == 'successfully registered') {
                      div_msg.innerHTML = 'Successfully registered';
                  }else if(res == 'error'){    
                      div_msg.innerHTML = 'Error invalid image';
                  }
                  listingImages();
              });

          },form);
          
      }

      const listingImages = () => {

          xmlHttpGet('ajax/listing', () => {

              success(() => {

                  var images = JSON.parse(xhttp.responseText);

                  var box = `<div class="container">`;
                      box+= `<div class="row">`;

                          images.forEach((image) => {
                              box+= `<div class="col-sm-4">`;
                                  box+= `<h1>${image.name}</h1>`;
                                  box+= `<img src="img/${image.image}" alt="${image.name}" class="img-fluid">`;
                              box+= `</div>`;
                          });

                      box+= `</div>`;
                  box+= `</div>`;

                  div_img.innerHTML = box;
              });

          });

      }

      listingImages();

}


