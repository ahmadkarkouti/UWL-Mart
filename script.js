//         JAVASCRIPT          //







        function openNav() 
        {
            if (x.matches) { // If media query matches
      
                document.getElementById("myNav").style.width = "100%";
                document.getElementById("main").style.marginLeft = "100%";
                document.body = "url(videos/video.mp4)";

            
                }
                else
                {
                    document.getElementById("myNav").style.width = "80%";

                 }
        }

        function closeNav() 
        {
            if (x.matches) { // If media query matches
      
            document.getElementById("myNav").style.width = "0%";
            document.getElementById("main").style.marginLeft = "0%";
            document.body.style.backgroundColor = "white";
                }
                else
                {
                    document.getElementById("myNav").style.width = "0%";
                 }
        }

var x = window.matchMedia("(max-width: 770px)");
openNav(x); // Call listener function at run time
x.addListener(openNav); // Attach listener function on state changes

var x = window.matchMedia("(max-width: 500px)");
closeNav(x); // Call listener function at run time
x.addListener(closeNav); // Attach listener function on state changes




  
// Accordion 

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}

// Trans
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}

// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() 
{
  var data = google.visualization.arrayToDataTable
							([
  ['Task', 'Hours per Day'],
  ['Heinz', 8],
  ['Friends', 2],
  ['Eat', 2],
  ['Hagen Daz', 3],
  ['Gym', 2],
  ["Tesco's vegetables", 7]
]);
}							
							

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':400, 'height':300};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);



