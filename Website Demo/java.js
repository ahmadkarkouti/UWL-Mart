/* exported addGroceries */
/* exported deleteGroceries */
/* exported addRegistration */
/* exported deleteRegistration */
/* exported validate */
/* exported openCity */
/* exported deleteClothes */
/* exported addClothes */

var mydb;
var openmydb = function(){
    mydb = openDatabase("groceries27.db", "0.1", "A Database of UWL MART", 1024 * 1024);
        
    mydb.transaction(function (t) {
        t.executeSql("CREATE TABLE IF NOT EXISTS groceries (id INTEGER PRIMARY KEY ASC, brand TEXT, type TEXT, stock TEXT, price TEXT, trying blob)");
    });
    
    mydb.transaction(function (t) {
        t.executeSql("CREATE TABLE IF NOT EXISTS clothes (id INTEGER PRIMARY KEY ASC, brand2 TEXT, type2 TEXT, stock2 TEXT, price2 TEXT, picture2 blob)");
    });
        
    mydb.transaction(function (t) {
        t.executeSql("CREATE TABLE IF NOT EXISTS registration (id INTEGER PRIMARY KEY ASC, fname TEXT, lname TEXT, bday TEXT, mnumber TEXT, eaddress TEXT, address1 TEXT, address2 TEXT, pcode TEXT, country TEXT, pword TEXT)");
    });
};

openmydb();




function addRegistration() {
    if (mydb) {
        var fname = document.getElementById("fname").value;
        var lname = document.getElementById("lname").value;
        var bday = document.getElementById("dob").value;
        var mnumber = document.getElementById("mnumber").value;
        var eaddress = document.getElementById("eaddress").value;
        var address1 = document.getElementById("address1").value;
        var address2 = document.getElementById("address2").value;
        var pcode = document.getElementById("pcode").value;
        var country = document.getElementById("country").value;
        var pword = document.getElementById("pword").value;
        

        if (fname !== "" && lname !== "" && bday !== "" && mnumber !== ""  && eaddress !== ""  && address1 !== ""  && address2 !== ""  && pcode !== ""  && country !== ""  && pword !== "") {
            mydb.transaction(function (t) {
                t.executeSql("INSERT INTO registration (fname, lname, bday, mnumber, eaddress, address1, address2, pcode, country, pword) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", [fname, lname, bday, mnumber, eaddress, address1, address2, pcode, country, pword]);
                alert("Registration Successful");
                    window.location = "login.html";
            });
        } else {
            alert("You must fill all the fields");
        }
    } else {
        alert("db not found, your browser does not support web sql!");
    }
}


function deleteRegistration(id) {
    if (mydb) {
        mydb.transaction(function (t) {
            t.executeSql("DELETE FROM Registration WHERE id=?", [id], outputRegistration);
        });
    } else {
        alert("db not found, your browser does not support web sql!");
    }
}


function outputRegistration() {
    if (mydb) {
        mydb.transaction(function (t) {
            t.executeSql("SELECT * FROM registration", [], updateRegistrationList);});
    } else {
        alert("db not found, your browser does not support web sql!");
    }
}



function updateRegistrationList(transaction, results) {
    var listholder = document.getElementById("registrationlist");
    //var listholder2 = document.getElementById("grocerieslist3");
    
    var i;
    for (i = 0; i < results.rows.length; i++) {
        
        var row = results.rows.item(i);
        listholder.innerHTML += "<tr>" + "<td>" + row.fname + "</td> <td>" + row.lname + "</td> <td>" + row.bday + "</td> <td>" + row.mnumber +
        "</td> <td>" + row.eaddress + "</td> <td>" + row.address1 + "</td> <td>" + row.address2 + "</td> <td>" + row.pcode + "</td> <td>" + row.country + "</td> <td>" + row.pword + "</td> <td>" + "<span href='javascript:void(0);' class='w3-bar-item w3-button w3-white w3-xlarge w3-right' onclick='deleteRegistration("  + row.id + ");'>x</td></tr></span>";

       
    }
 
}







var myimage = "<img src= '";
function updateGroceriesList(transaction, results) {
    var listholder = document.getElementById("grocerieslist");
    //var listholder2 = document.getElementById("grocerieslist3");
    
    var i;
    for (i = 0; i < results.rows.length; i++) {
        
        var row = results.rows.item(i);
        listholder.innerHTML += "<tr>"+ "<td>" + myimage + row.trying + "'" + "</td> <td>" + row.brand + "</td> <td>" + row.type + "</td> <td>" + row.stock + "</td> <td> £" + row.price + "</td> <td>" + "<span href='javascript:void(0);' class='w3-bar-item w3-button w3-white w3-xlarge w3-right' onclick='deleteGroceries("  + row.id + ");'>x</td></tr></span>";
       
    }
 
}


function updateGroceriesList2(transaction, results) {
    var listholder = document.getElementById("grocerieslist2");
    //var listholder2 = document.getElementById("grocerieslist3");
    
    var i;
    for (i = 0; i < results.rows.length; i++) {
        
        var row = results.rows.item(i);
        listholder.innerHTML += "<div id='divMessage' class='InsideContent'>" + "<li>" + "<div class='product'>" + myimage + row.trying + "'" + "<li>" + " <div class='product-actions'> <div class='product-info'> <div class='info-block'>" +
        "<div class='product-title'>" + row.brand + "</div> " + "<div class='product-description'>" + row.type + "</div>" +
"<div class='product-sale'>£" + row.price + "</div>" + "<div class='button-buy'>Buy now</div> <div class='add'>Add</div> </div> </div> </div>";
        //listholder2.innerHTML += myimage + row.trying + "\'" + " (<a href='javascript:void(0);' onclick='deleteGroceries(" + row.id + ";'></a>";
       
    }
 
}


function updateClothesList(transaction, results) {
    var listholder = document.getElementById("clotheslist");
    //var listholder2 = document.getElementById("grocerieslist3");
    
    var i;
    for (i = 0; i < results.rows.length; i++) {
        
        var row = results.rows.item(i);
        listholder.innerHTML += "<tr>"+ "<td>" + myimage + row.picture2 + "'" + "</td> <td>" + row.brand2 + "</td> <td>" + row.type2 + "</td> <td>" + row.stock2 + "</td> <td> £" + row.price2 + "</td> <td>" + "<span href='javascript:void(0);' class='w3-bar-item w3-button w3-white w3-xlarge w3-right' onclick='deleteClothes("  + row.id + ");'>x</td></tr></span>";
       
    }
 
}


function updateClothesList2(transaction, results) {
    var listholder = document.getElementById("clotheslist2");
    //var listholder2 = document.getElementById("grocerieslist3");
    
    var i;
    for (i = 0; i < results.rows.length; i++) {
        
        var row = results.rows.item(i);
        listholder.innerHTML += "<div id='divMessage' class='InsideContent'>" + "<li>" + "<div class='product'>" + myimage + row.picture2 + "'" + "<li>" + " <div class='product-actions'> <div class='product-info'> <div class='info-block'>" +
        "<div class='product-title'>" + row.brand2 + "</div> " + "<div class='product-description'>" + row.type2 + "</div>" +
"<div class='product-sale'>£" + row.price2 + "</div>" + "<div class='button-buy'>Buy now</div> <div class='add'>Add</div> </div> </div> </div>";
       
    }
 
}



function outputGroceries() {
    if (mydb) {
        mydb.transaction(function (t) {
            t.executeSql("SELECT * FROM groceries", [], updateGroceriesList);});
    if (mydb) {
        mydb.transaction(function (t) {
            t.executeSql("SELECT * FROM groceries", [], updateGroceriesList2);});

    } else {
        alert("db not found, your browser does not support web sql!");
    }
}}


function outputClothes() {
    if (mydb) {
        mydb.transaction(function (t) {
            t.executeSql("SELECT * FROM clothes", [], updateClothesList);});
    if (mydb) {
        mydb.transaction(function (t) {
            t.executeSql("SELECT * FROM clothes", [], updateClothesList2);});

    } else {
        alert("db not found, your browser does not support web sql!");
    }
}}

function addGroceries() {
    if (mydb) {
        var brand = document.getElementById("groceriesbrand").value;
        var type = document.getElementById("groceriestype").value;
        var stock = document.getElementById("groceriesstock").value;
        var price = document.getElementById("groceriesprice").value;
        var trying = document.getElementById("b64").value;
        

        if (brand !== "" && type !== "") {
          mydb.transaction(function (t) {
            t.executeSql("INSERT INTO groceries (brand, type, stock, price, trying) VALUES (?, ?, ?, ?, ?)", [brand, type, stock, price, trying]);
            outputGroceries();    
            });
        } else {
            alert("You must enter a Brand, type, stock and price!");
        }
        } else {
        alert("db not found, your browser does not support web sql!");
    }
}


function addClothes() {
    if (mydb) {
        var brand2 = document.getElementById("clothesbrand").value;
        var type2 = document.getElementById("clothestype").value;
        var stock2 = document.getElementById("clothesstock").value;
        var price2 = document.getElementById("clothessprice").value;
        var picture2 = document.getElementById("b65").value;
        

        if (brand2 !== "" && type2 !== ""  && stock2 !== ""  && price2 !== "") {
            mydb.transaction(function (t) {
                t.executeSql("INSERT INTO clothes (brand2, type2, stock2, price2, picture2) VALUES (?, ?, ?, ?, ?)", [brand2, type2, stock2, price2, picture2]);
                outputClothes();
            });
        } else {
            alert("You must enter a Brand, type, stock and price!");
        }
    } else {
        alert("db not found, your browser does not support web sql!");
    }
}


function deleteClothes(id) {
    if (mydb) {
        mydb.transaction(function (t) {
            t.executeSql("DELETE FROM Clothes WHERE id=?", [id], outputClothes);
        });
    } else {
        alert("db not found, your browser does not support web sql!");
    }
}

function deleteGroceries(id) {
    if (mydb) {
        mydb.transaction(function (t) {
            t.executeSql("DELETE FROM Groceries WHERE id=?", [id], outputGroceries);
        });
    } else {
        alert("db not found, your browser does not support web sql!");
    }
}


outputGroceries();
outputRegistration();
outputClothes();



function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    

    
function validate(){
        event.preventDefault(); // cancel default behavior
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        mydb.transaction(function(t) {
            t.executeSql('SELECT * FROM registration WHERE eaddress=? AND pword=?', [username, password], function(t, results) {
                 if (results.rows.length > 0) {
                alert("Hello, " + username);
                    //window.location = "index.html";
                 } else {
                    alert("Invalid username or password");
                 }
            }, errorCB);
        });
    }
    
    
function errorCB(tx, err) {
    alert("Error processing SQL: " + err.code);
}



