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

document.querySelector(".add-btn").addEventListener("click", function(){
    var location = document.querySelector(".address").value;

    var ip = '<div class="entered-location"><div class="location"><p name="destination">'+location+'</p></div><div class="remove-con"><span class="remove-btn"></span></div></div>';

    var x =  document.querySelector(".date-con");
    x.insertAdjacentHTML("beforebegin",ip);
});


const a = document.querySelectorAll(".remove-btn");
const z = document.querySelectorAll(".entered-location");

a.forEach((element,index) => {
    element.addEventListener("click", function(){
        console.log("1");
        z[index].parentNode.removeChild(z[index]);
    })
})

{
    var d = new Date();
    var date = d.getDate();
    var m = d.getMonth() + 1;
    var year = d.getFullYear(); 
    var cDate;
    if(m<10)
    {
        cDate = year+"-0"+m+"-"+date;
    }
    else
    cDate = year+"-"+m+"-"+date;
    document.querySelector(".date-start").setAttribute("min",cDate);
    document.querySelector(".date-end").setAttribute("min",cDate);
}