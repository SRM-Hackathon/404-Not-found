const radioInput = document.querySelectorAll(".prefer-con input");

const msg = ['You have not planned the trip yet and plan the trip accordingly by view the availability.','You have planned the trip and then looking for the compaions for the trip.', 'You are on the trip and you then looking for a companion.'];

radioInput.forEach((element,index) => {
    element.addEventListener("click", function(){
        console.log(index);
        document.querySelector(".continue-btn").style.display = "block";
        document.querySelector(".type-des").innerHTML = msg[index];
    })
})

function activatePlacesSearch(){
    var input = document.getElementById("search");
    var autocomplete = new google.maps.places.Autocomplete(input);
}


{
    var d = new Date();
    var date = d.getDate();
    var m = d.getMonth() + 1;
    var year = d.getFullYear(); 
    var cDate;
    if(m<10)
        cDate = year+"-0"+m+"-"+date;
    else
        cDate = year+"-"+m+"-"+date;
    document.querySelector(".date-start").setAttribute("min",cDate);
    document.querySelector(".date-start").value = cDate;
   // date=date+1;
    //cDate = year+"-"+m+"-"+date;
    document.querySelector(".date-end").setAttribute("min",cDate);
    document.querySelector(".date-end").value = cDate;
}
{
    console.log("start-js");
}

document.querySelector(".date-start").addEventListener("input" , function(){
    var dateInput = document.querySelector(".date-start").value;
    console.log(dateInput);
    document.querySelector(".date-end").value = dateInput;
})
