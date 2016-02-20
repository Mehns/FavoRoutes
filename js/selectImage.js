




function fileSelect(evt) {

    if (window.File && window.FileReader && window.FileList && window.Blob) {
        var files = evt.target.files;
 
        var result = '';
        var file;
        for (var i = 0; file = files[i]; i++) {
            // if the file is not an image, continue
            if (!file.type.match('image.*')) {
                continue;
            }
 
            reader = new FileReader();
            reader.onload = (function (tFile) {
                return function (evt) {
                    /*var div = document.createElement('div');
                    div.innerHTML = '<img style="width: 90px;" src="' + evt.target.result + '" />';*/

                    var image = document.getElementById('titleImage');
                    image.src = evt.target.result;
                    /*image.width = "100px";*/

                    /*if(child.hasChildNodes()){
                    	child.removeChild(div);
                    	child.appendChild(div);
                    }
                    	
                    else
                    	child.appendChild(div);*/
                   
                    
                };
            }(file));
            reader.readAsDataURL(file);
        }
    } else {
        alert('The File APIs are not fully supported in this browser.');
    }
}


 
/*document.getElementById('imageSelector').addEventListener('change', fileSelect(), false);*/

