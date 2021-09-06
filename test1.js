
var petInfo = [["photos/browseCat1.jpg", "Leo", "Russian Blue", 11, "Male", true, true, "An interesting, independent and                         groovy cat."],
                ["photos/browseCat2.jpg", "Scotty", "Mixed", 3, "Female", true, true, "A curious and caring cat who loves to play." ],
                ["photos/browseCat3.jpg", "William", "Sphinx", 6, "Male", false, false, "Plays piano and hunts squirrels on his spare time. Does not like people and other animals." ],
                ["photos/browseDog1.jpg", "Bruce", "Labrador", 3, "Female", true, true, "A man's best friend, Bruce makes for the perfect companion."],
                ["photos/browseDog2.jpg", "Marcus", "Mixed", 2, "Male", true, false, "The most interesting dog in the world."]];
                
function displayPets()
{
    var filter = document.getElementById("browseSelect").value;  
    var div = document.getElementById("browsePets");
    
    
    if(filter == "All")
        filter = /./;
    else if(filter == "Cats")
        filter = /Cat/;
    else
        filter = /Dog/;
 
    
    
    for(var i = 0; i < petInfo.length; i++)
    {
        
        if(petInfo[i][0].match(filter))
            buildPet(petInfo[i], div);
            
    }
}


function buildPet(petInfo, div)
{
 
    html = "";
    html += "<img class = \"polaroid\" src = \"" + petInfo[0] + "\"/>" +
    "<table class = \"description\">" + 
    "<tr><td><h2>" + petInfo[1] + "</h2></td>" + 
    "<tr><td><h3>" + petInfo[3] + " years, " + petInfo[4] + "</h3></td>"; 
    if(petInfo[5])
        html += "<td rowspan = \"2\"><img class = \"friendlyIcon\" src = \"photos/childFriendly.png\" /></td>";
    if(petInfo[6])
        html += "<td rowspan = \"2\"><img class = \"friendlyIcon\" src = \"photos/petFriendly.png\" /></td>";
    else if(!petInfo[5] && !petInfo[6])
        html += "<td rowspan = \"2\"><img class = \"friendlyIcon\" src = \"photos/notFriendly.png\" /></td>";
    html += "</tr><tr><td><h3>" + petInfo[2] + "</h3></td></tr>" + 
    "<tr><td rowspan = \"2\"><h3>" + petInfo[7] + "</h3></td></tr></table>" + 
    "<hr />";
    div.innerHTML += html;
}

