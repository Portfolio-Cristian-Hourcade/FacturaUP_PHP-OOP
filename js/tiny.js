  if(tinymce.editors.length==0) {
        tinyMCE.init({
            plugins: "link",
            elements: "descripcion",
            menubar : false,
            mode : "exact",
            theme : "modern",
            toolbar: [
                      "undo redo | bold italic | link image | alignleft aligncenter alignright alignjustify | bullist numlist"
                  ]
         });
    }else{
        setTimeout(function() {  
            tinymce.EditorManager.execCommand('mceRemoveEditor',true, 'exampleModal');
            tinymce.EditorManager.execCommand('mceAddEditor',true, 'exampleModal');
        }, 1000);

    }