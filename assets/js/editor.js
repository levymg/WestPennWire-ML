$(function(){
    $("body").on("click", ".launch-modal", function(){
        var route = $(this).data("route");
        if($(this).data("type")) {
            var type = $(this).data("type");
        } else {
            var type = null;
        }
        if($(this).data("resource")) {
            var resource = $(this).data("resource");
        } else {
            var resource = null;
        }
         $.ajax({
                method: "POST",
                dataType: "json",
                data: {resource: resource, type: type, token: token},
                url: "http://www.westpennwiremarketing.com/"+route,
                error: function(jqXHR, xhr, responseText) {
                            console.log(jqXHR.responseText);
                },
                success: function(jqXHR, xhr, responseText) {
                            $(".modal-title").html(jqXHR.title);
                            $(".modal-body").html(jqXHR.view);
                            $(".modal-footer").html(jqXHR.footer);
                            $(".modal").modal("show");
                            if($("#dropzone").length > 0) {
                                  var myDropzone = new Dropzone("#dropzone", 
                                                    { 
                                                        url: 'http://www.westpennwiremarketing.com/manage_content/change_thumbnail',
                                                        paramName: "file",
                                                        acceptedFiles: ".jpeg,.jpg,.png,.gif",
                                                        maxFilesize: 20000,
                                                        init: function () {
                                                            var _this = this;
                                                            this.on("sending", function(file, xhr, data) {
                                                                data.append("file_id", $("body").find(".item-id").val());
                                                            });
                                                            this.on("error", function(file){if (!file.accepted) this.removeFile(file);});
                                                        },
                                                        accept: function(file, done) {
                                                          done(); 
                                                          $(".modal-footer").html("<button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>");
                                                        }
                                                    }
                                    );
                            }
                }
        });
    });
});

$(function(){
   $("body").on("click", ".submit", function(){
      var form = $(this).data("form-id");
      var route = $("#"+form).data("route");
      var formData = $("#"+form).serialize();
      $.ajax({
          method: "POST",
          dataType: "json",
          data: formData,
          url: route,
          error: function(jqXHR, xhr, responseText) {
                        console.log(JSON.stringify(jqXHR));
                        var data = JSON.parse(jqXHR.responseText);
                        var error = data.message;
                        $(".modal-content").find(".form-errors").addClass("show");
                        $(".errors").html(error);
          },
          success: function(jqXHR, xhr, responseText) {
              if(jqXHR.message == "upload") {
                  
                  $(".modal-title").html(jqXHR.title);
                  $(".modal-body").html(jqXHR.body);
                  $(".modal-footer").html("Uploading to /library-assets/"+jqXHR.path+" : Item ID: " + jqXHR.item_id);
                  
                  var myDropzone = new Dropzone("#dropzone", 
                                                    { 
                                                        url: 'http://www.westpennwiremarketing.com/manage_content/upload_file',
                                                        paramName: "file",
                                                        acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf",
                                                        maxFilesize: 9999999999999,
                                                        init: function () {
                                                            var _this = this;
                                                            this.on("sending", function(file, xhr, data) {
                                                                data.append("path", jqXHR.path);
                                                                data.append("file_id", jqXHR.item_id);
                                                            });
                                                            this.on("error", function(file){if (!file.accepted) this.removeFile(file);});
                                                        },
                                                        accept: function(file, done) {
                                                          done(); 
                                                          $(".modal-footer").html("<button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>");
                                                        }
                                                    }
                                    );
                   
                  
              } else {
                  
                   $(".modal-content").find(".form-errors").addClass("show");
                   $(".errors").html(jqXHR.message);
                   $(".modal-footer").find(".submit").remove();
                   $(".modal-footer").find(".btn-danger").html("Close");
                  
              }
          }
      });
   });
});

$(function(){
    $('#selecctall').click(function(event) {
        if(this.checked) {
            $('.checkbox1').each(function() {
                this.checked = true;               
            });
        }else{
            $('.checkbox1').each(function() {
                this.checked = false;                     
            });         
        }
    });
});

$(function(){
    $(".delete-record").click(function(){
        
        var resources = [];
        var type;
            $("body").find(".checkbox1").each(function(){
                if(this.checked) {
                    resources.push($(this).val());
                    type = $(this).data("type");
                }
            });
        
        if(resources.length === 0 )
            return false;
        else {
            $(".modal-header").html("Delete Record(s)");
            $(".modal-body").html("Confirm Delete.");
            $(".modal-footer").html("<button id='delete' class='btn btn-danger' data-resource=" + resources + " data-type=" + type + ">DELETE</button> <button class='btn btn-default' data-dismiss='modal'>CLOSE</button>");
            $(".modal").modal("show");
        }
    });
});

$(function(){
    
    $("#delete").click(function(){
        
        
        
    });
});

$(function(){
   $(".modal").on("hidden.bs.modal", function(){
       $(".modal-title").html("");
       $(".modal-body").html("");
       $(".modal-footer").html(""); 
       location.reload();
   }); 
});