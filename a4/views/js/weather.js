$(document).ready(function(){
    $('#submitWeather').click(function(){
        
        var city = $("#city").val();
        
        if(city != ''){
            
            $.ajax({
               
                url: 'http://api.openweathermap.org/data/2.5/weather?q=' + city + "&units=imperial" + 
                        "&APPID=35b52b6cea4d19c85a19e549891efd86",
                type: "GET",
                dataType: "jsonp",
                success: function(data){
                    console.log(data);
                    var widget = show(data);
                    
                    $("#show").html(widget);
                    
                    $("#city").val('');
                }
                
                
            });
            
            
        }else{
            $("#error").html('Field cannot be empty');
            
            
        }
            
        
        
        
    });
    
       
    
});

function show(data){
    return "<p>Weather: "+ data.weather[0].main +"</p>" +
            "<p>Description: "+ data.weather[0].description +"</p>" +
            "<p>Minimum Temp: "+ data.main.temp_min +"</p>" +
            "<p>Maximum Temp: "+ data.main.temp_max +"</p>" +
            "<p>Current Temp: "+ data.main.temp +"</p>";
}