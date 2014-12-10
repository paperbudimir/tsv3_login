// custom tracking code triggers
//$("a").click(function(e){
    //e.preventDefault();
    //if($(this).data('track')) {
        //track(e, "topJoinButton", "someValue2", "someOtherValue2");
    //}
//});

// standardized predefined function for DRY approach
function track(eventType, someElement, someKey, someOtherKey) {
    //e.preventDefault();
    data = {
        "eventData" : {
            "eventType" : eventType,
            "data" : {
                "someElement" : someElement,
                "someKey" : someKey,
                "someOtherKey" : someOtherKey
            }
        }
    };
    $.ajax({
        type: "POST",
        url: "http://tracking.teamskeet.com/event.json?api_key=12345",
        data: data,
        success: function(){
            //$("#message").html('Success');
            alert("Tracking data sent succesfully!");
        },
        dataType: "json"
    });
    console.log(event.target.nodeName);
/*
    $(document).ajaxComplete(function(){
        window.location.replace(e.target.href);
    });
*/
};

// Goran's example function
/*
$("#topJoinButton").click(function(event){
    event.preventDefault();
    data = {
        "eventData" : {
            "eventType" : "click",
            "data" : {
                "someElement" : "topJoinButton",
                "someKey" : "someValue2",
                "someOtherKey" : "someOtherValue2"
            }
        }
    };
    $.ajax({
        type: "POST",
        url: "http://tracking.teamskeet.com/event.json?api_key=12345",
        data: data,
        success: function(){
            //$("#message").html('Success');
            alert("Tracking data sent succesfully!");
        },
        dataType: "json"
    });
});
*/