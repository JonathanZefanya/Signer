
/*
 * Import file from dropbox
 */
	var options = {
        success: function(files) {
          files.forEach(function(file) {
            saveDropboxFile(file);
          });
        },
        cancel: function() {
          //optional
        },
        linkType: "direct", 
        multiselect: false, 
        extensions: (typeof dropboxExtesions !== 'undefined' ? dropboxExtesions : ['.pdf']),
    };
    
    var button = Dropbox.createChooseButton(options);
    document.getElementById("dropbox-container").appendChild(button);