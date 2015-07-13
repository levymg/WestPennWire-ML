var api = "http://www.westpennwiremarketing.com/api/";

$(function(){
   
    $(".change-category").click(function(){
           
            var category_id = $(this).data('category_id');
            
            $(".dynamic-view").html("<div class='margintop-5'><center><h1><i class='fa fa-spinner fa-spin'></i> <strong><em>Loading materials...</em></strong></center></h1></div>");
            $.ajax({
                method: "GET",
                type: "json",
                url: api+"items/items/category_id/"+category_id,
                success: function(jqXHR, xhr, responseText) {
                                    $.ajax({
                                        method: "POST",
                                        type: "json",
                                        url: "http://www.westpennwiremarketing.com/loader/index",
                                        data: {data: jqXHR, category_id: category_id},
                                        success: function(jqXHR, xhr, responseText) {
                                             $(".dynamic-view").html(jqXHR.html);
                                        }
                                    });
                        }
            });
            
            return false;
    });
});

$(function(){
    
    $("body").on("submit", ".add", function() {
            var data = $(this).serialize();
            $.ajax({
                method: "POST",
                type: "json",
                data: data,
                url: api+"bin/add",
                success: function(jqXHR, xhr, responseText) {
                    console.log(JSON.stringify(jqXHR));
                },
                fail: function(jqXHR, xhr, responseText) {
                    console.log(JSON.stringify(jqXHR));
                }
            });
        return false;
    });
});
