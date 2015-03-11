var pages = {
    Home: {pageUrl: "index.php?page=home.php"},
    "About Us": {pageUrl: "index.php?page=about-us.php"},
    Services: {pageUrl: "index.php?page=services.php"},
    Contact: {pageUrl: "index.php?page=contact.php"}
};
/*var pages = {
    Home: {pageUrl: "pages/home.php", default: true},
    "About Us": {pageUrl: "pages/about-us.php"},
    Services: {pageUrl: "pages/services.php"},
    Contact: {pageUrl: "pages/contact.php"}
};*/

$(document).ready(function(){
    //buildNav();
});

function getContent(link){
    window.location=link;
    console.log(link);
    return;//temporily disable page loads
    $.get(link, function(data){
        $("#mainArea").html(data);
    });
}

function buildNav(){
    
    for(var key in pages){
        var newLi = $("<li><a>" + key + "</a></li>");
        newLi.on("click", "a", function(){
            getContent(pages[$(this).text()].pageUrl);
        });
        newLi.appendTo("#main-nav");
        
        if(pages[key].default){
            getContent(pages[key].pageUrl);
        }
    }
}