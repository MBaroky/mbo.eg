
$(function(){
var myjson;
$.getJSON(""+absPath+"/lang/lang.json", function(json){
    myjson = json;
         var lang = $("html").attr("lang");
    var test = $("[data-trans]");
    if(test.length){
        test.each(function(index , element){
            var search = $(this).attr("data-trans").replace(".","");
            var heading = $(this).find("h3.text-center")
            if(heading.length){
              heading.eq(0).text(myjson[lang][search]);  
            }else{
                $(this).text(myjson[lang][search]);
            }
            
            console.log(search); 
        });
       
    }else{
        console.log("nothing to translate"); 
    }  
});

 

});
