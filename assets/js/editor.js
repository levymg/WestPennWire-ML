$(function(){
    $("body").on("click", ".launch-modal", function(){
        var route = $(this).data("route");
        if($(this).data("resource")) {
            var resource = $(this).data("resource");
        } else {
            var resource = null;
        }
         $.ajax({
                method: "POST",
                dataType: "json",
                data: {resource: resource, token: token},
                url: "http://www.westpennwiremarketing.com/"+route,
                error: function(jqXHR, xhr, responseText) {
                            console.log(jqXHR.responseText);
                },
                success: function(jqXHR, xhr, responseText) {
                            $(".modal-title").html(jqXHR.title);
                            $(".modal-body").html(jqXHR.view);
                            $(".modal-footer").html(jqXHR.footer);
                            $(".modal").modal("show");
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
                        var data = JSON.parse(jqXHR.responseText);
                        var message = data.message;
                        $(".modal-content").find(".form-errors").addClass("show");
                        $(".errors").html(message);
          }
      });
   });
});

$(function(){
   $(".modal").on("hidden.bs.modal", function(){
       $(".modal-title").html("");
       $(".modal-body").html("");
       $(".modal-footer").html(""); 
   }); 
});