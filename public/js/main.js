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
                  div_msg.innerHTML = 'Successfully registered';
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
                                  box+= `<img src="img/${image.image}" alt="sky" class="img-fluid">`;
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


