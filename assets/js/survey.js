$(function(){

        $(".country").change(function(){
            
            if($(".country").val() !== "US")
                $(".state").val("NA").prop("disabled", true);
            else
                $(".state").val("").prop("disabled", false);
        });
        
        $(".toggle").click(function(){
                
                if($(this).hasClass("single")){
                    $(this).parent("ul").find(".on").removeClass("on");
                }
                
                if(!$(this).hasClass("on")) {
                    $(this).addClass("on");
                }
                else {
                    $(this).removeClass("on");
                }
                
                var name = $(this).data("name");
                var value = $(this).data("value");
               
                
        });
        
        $("#survey").submit(function(){
            
            var fields = $("#survey").serialize();
            
            var selections = "";
            var ln = $("#markets").find(".on").length;
             
            $("#markets").find(".on").each(function(index) {
                
                    var value = $(this).data("value");
                    if (index + 1 === ln) 
                        selections += value;
                    else
                        selections += value + ",";
                
            });
            
            fields += "&markets="+selections;
            var selections = "";
            var ln = $("#applications").find(".on").length;
             
            $("#applications").find(".on").each(function(index) {
               
                    var value = $(this).data("value");
                    
                    if (index + 1 === ln) 
                        selections += value;
                    else
                        selections += value + ",";
                    
            });
            
            fields += "&applications="+selections;
            var selections = "";
           
            $("#employees").find(".on").each(function(index) {
                
                    var value = $(this).data("value");
                
                    fields += "&employees=" +value;
            
            });
            
            $("#cable").find(".on").each(function(index) {
                
               var value = $(this).data("value");
                
               fields += "&cable=" + value;
                    
            });
            
            if($("#fiber").length > 0) {
                var uri = "/index.php/customer_survey/submit_survey";
                $("#fiber").find(".on").each(function(index) {
                   var value = $(this).data("value");
                   fields += "&fiber=" + value;
                });
                
            } else {
                 var uri = "/index.php/info_comm_survey/submit_survey";
            }
            
            console.log(fields);
            
            $.ajax({
                method: "POST",
                dataType: "json",
                data: fields,
                url: uri
                
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