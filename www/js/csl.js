$(document).ready(function(){
  //putting the main url in a variable
var url="http://localhost/CSLtst/index.php/cslcontrol/";
  //hide divs with the class '.views' except the one with id of 'home'
  $(".views:not('#home')").hide();
  //function that ensures only the div related to the selected menubar icon is dislayed
  $("li a[href]").click(function(){
    //storing the value of the clicked list a href
    var tabVal=$(this).attr('value');
    //showing a div whose div name is the same as the value of the selected list ahref
    $("#"+tabVal).show();
    //keeping the other divs hidden
    $(".views[id!="+tabVal+"]").hide();
  });
//on loading the document data is loaded from offline html pages used merely to store text
  $("#home_text").load("css/history.html #home_txt");

  $("#eighties_text").load("images/Eighties_seasons.html h1, p");
  
  $("#nineties_text").load("images/Nineties_seasons.html h1, p");

//making an ajax call to fill the champions table. The main part of the url was put into a variable above
  $.getJSON(url+"titleWin", function(data){
   $.each(data, function(){
    $("#senior_champions").append("<tr><td>"+ this["Season"] + "</td><td>"+ this["Winner"] + "</td><td>" + this["Runner up"] + "</td><td>"+ this["Play off"] + "</td></tr>");
    });
  });
  //making an ajax call to fill the senior cup table
  $.getJSON(url+"senCup", function(data){
   $.each(data, function(){
    $("#senior_cup_finals").append("<tr><td>"+ this["Season"] + "</td><td>"+ this["Winner"] + "</td><td>" + this["Score"] + "</td><td>"+ this["Runner-up"] + "</td></tr>");
    });
  });
  //making an ajax call to fill the club_info div with names that each link to a modal
  $.getJSON(url+"getClub", function(data){
   $.each(data, function(){
    $("#club_info").append("<a class=\"name\" role=\"button\" data-toggle=\"modal\" data-target=\"#modalCSL\">"+this["Club"]+"</a>");
    });
   //an array to store rows of images for use in the carousel
   var crests = [];
   $.each(data, function(){
    //not all club names have associated images so for this we exclude the clubs who's JSON value for 'Image' is blank
    if(this["Image"]!=""){
      //clubs with images get pushed into array
      crests.push("<img src=\"images/"+this["Image"]+"\" alt=\""+this["Image"]+"\" title=\""+this["Club"]+"\"/>");
    }
   });
   //there are three rows with their own id in the carousel and each will be assigned 5 out of 15 img's
   $("#pix1").html(crests.slice(0, 5));
   $("#pix2").html(crests.slice(5, 10));
   $("#pix3").html(crests.slice(10, 15));
  });

  $(document).ajaxSuccess(function(event,xhr,settings){
  //when the call to fill the Senior cup table is successfull we append anchor links that link to footnotes that were already hard-coded
    if(settings.url==url+"senCup"){
      $("#senior_cup_finals td:eq(26), #senior_cup_finals td:eq(30)").append("<a href=\"#calry_merv\"><sup> R</sup></a>");
      $("#senior_cup_finals td:eq(34)").append("<a href=\"#salt_calry\"><sup> R-p</sup></a>");
    }
  //when the call to fill the Champions table is successfull we append anchor links that link to footnotes that were already hard-coded
    if(settings.url==url+"titleWin"){
      $("#champions td:eq(11)").append("<a href=\"#merv_salt\"><sup> R</sup></a>");
      $("#champions td:eq(52)").append("<a href=\"#straide\"><sup> Gr</sup></a>");
      $("#champions td:eq(56)").append("<a href=\"#prem\"><sup> Pr</sup></a>");
    }
  //when the call to fill the club_info div with the club name links is successfull we setup the action for the link
    if(settings.url==url+"getClub"){
      $(".name").click(function(){
/*clicking the link gets the text from that link, puts it into a variable and uses the variable to select a heading from
a document that contains text matching the variable value. There is only one modal needed for all the club names*/       
        var aref= $(this).text();
/*we load the modal with the heading containing the variable value and also the h2 and paragraph that
follows the selected heading*/
        $(".modal-body").load("css/history.html h1:contains('"+aref+"'), h1:contains('"+aref+"')+h2, h1:contains('"+aref+"')+h2+p");
 /*the modal footer is given a button named and given a value the same as the above variable
 also a div is created, this will hold info selected by the button  */  
        $(".modal-footer").html("<button id=\"get_honours\" name=\""+aref+"\" value=\""+aref+"\">"+aref+" honours</button><div id=\"honour-display\"></div>");
      });
      $("#club_info .name:last-of-type").css({"margin-right":"50%"});
    }
//after the content has been loaded into the modal successfully  
    if(settings.url=="css/history.html"){
      //the button in the modal footer can be clicked
      $("#get_honours").click(function(){
      //we get the value of this button pass to a variable
        var hons=$(this).attr('value');
      //remove any unwanted characters from this value and pass to another variable
        var hons_request=encodeURIComponent(hons);
 //then send this variable as a GET request within a url requesting JSON
        $.getJSON(url+"getHonours?name="+hons_request, function(data){
  //There were issues with returned data doubling up so an array is used, and the returned data will be spliced      
          var honours=[];
          $.each(data, function(){  
        //putting returning data in table form and pushing to array   
            honours.push("<table class=\"table\" id=\"honstab\"><tr><th>"+data[0]["Source"]+"</th><th>"+data[1]["Source"]+"</th><th>"+data[2]["Source"]+"</th><th>"+data[3]["Source"]+"</th><th>"+data[4]["Source"]+"</th><th>"+data[5]["Source"]+"</th><th>"+data[6]["Source"]+"</th><th>"+data[7]["Source"]+"</th><th>"+data[8]["Source"]+"</th></tr><tr><td>"+data[0]["COUNT(*)"]+"</td><td>"+data[1]["COUNT(*)"]+"</td><td>"+data[2]["COUNT(*)"]+"</td><td>"+data[3]["COUNT(*)"]+"</td><td>"+data[4]["COUNT(*)"]+"</td><td>"+data[5]["COUNT(*)"]+"</td><td>"+data[6]["COUNT(*)"]+"</td><td>"+data[7]["COUNT(*)"]+"</td><td>"+data[8]["COUNT(*)"]+"</td></tr></table>");
        //removing the unwanted echo of our data
            $("#honour-display").html(honours.slice(0,1));
          //this removes any columns from the table that have empty data underneath
            $("#honstab td").each(function(){
            //look out for cells with a zero value
              if ($(this).html()=="0"){
              //get the table cell index of the cells and put to a variable
                emptyCell=$(this).index();
             /*Remove these cells and also their corresponding header with the same index
             , this table only has one row of data under the headings which is why this is possible, so we agin are removing 
             empty cells and the header above it as we only need see the honours that the club has won not lost*/
                $("#honstab th:eq("+emptyCell+"), #honstab td:eq("+emptyCell+")").remove();
              /*if the selected club has no honours they need their own special readout
              so if a whole row ends up being empty then a special table length cell is created*/
                if($("#honstab tr").html()==0){
                  $("#honstab").html("<tr><th>No Honours</th></tr></table>");
                }
              }
            });
          });
        });
      });
    }

  //end of success call after loading info to modal complete
  });
//end of ajaxSuccess
});
//end of overall function
