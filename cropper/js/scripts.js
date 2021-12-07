$(document).ready(function(){
   
    // creating canvas  variables
    var $canvas = $('#canvas'),
         context = $canvas.getContext('2d');

         // waiting  for a file to be selected
         
         $('#img_file').on('change',function() {

            if (this.files && this.files[0]){
                if (this.files[0].type.match(/^image\//) ) {
                    // valid image file is selected
                    //process image

                    var reader = new FileReader();

                    reader.onload = function(e){
                        var img = new Image();
                        img.onload = function() {

                            context.canvas.width = img.width;
                            context.canvas.height = img.height;
                            context.drawImage(img,0,0);
                        };
                        img.src = e.target.result;
                    };


                    reader.readAsDataURL(this.files[0]);


                } else{
                    alert('Invalid File Type!');
                }
            } else{
                alert('Please select a file');

            }

        });
});