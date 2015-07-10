var api = "http://www.westpennwiremarketing.com/api/";

$(function(){
   
    $(".change-category").click(function(){
           
            var category_id = $(this).data('category_id');
            
            $.ajax({
                method: "GET",
                type: "json",
                url: api+"items/items/category_id/"+category_id,
                success: function(jqXHR, xhr, responseText) {
                                console.log(jqXHR);
                              
                        }
                });
    });
});
