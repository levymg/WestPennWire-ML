$(function(){

        $(".country").change(function(){
            
            if($(".country").val() !== "US")
                $(".state").val("NA").prop("disabled", true);
            else
                $(".state").val("").prop("disabled", false);
        });
        
         $("#order").submit(function(){
            
            var fields = $("#order").serialize();
            console.log(fields);
             $.ajax({
                method: "POST",
                dataType: "json",
                data: fields,
                url: '/index.php/catalog/submit_order'
                
            })
            
                .success(function(jqXHR, xhr, responseText) {
                                
                                var position = $("div#errors").position();
                                scroll(0,position.top);
                                $("div#intro-p").html(jqXHR.message);
                                $("form").remove();
                        
            })
    
                .fail(function(jqXHR, xhr, responseText){
                                console.log(JSON.stringify(jqXHR));
                                var data = JSON.parse(jqXHR.responseText);
                                var position = $("div#errors").position();
                                scroll(0,position.top);
                                $("div#errors").html(data.message);
            });
            
            return false;
            
         });

});
