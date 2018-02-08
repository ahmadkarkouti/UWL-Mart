/* exported addGroceries */
/* exported deleteGroceries */

var mydb;
var openmydb = function(){
    mydb = openDatabase("groceries15.db", "0.1", "A Database of UWL MART", 1024 * 1024);
        
    mydb.transaction(function (t) {
        t.executeSql("CREATE TABLE IF NOT EXISTS groceries (id INTEGER PRIMARY KEY ASC, brand TEXT, type TEXT, stock TEXT, price TEXT, trying blob)");
    });
};

openmydb();



var myimage = "<img src= '";
function updateGroceriesList(transaction, results) {
    var listholder = document.getElementById("grocerieslist");
    //var listholder2 = document.getElementById("grocerieslist3");
    
    var i;
    for (i = 0; i < results.rows.length; i++) {
        
        var row = results.rows.item(i);
        listholder.innerHTML += "<li>"+ myimage + row.trying + "'" + "<li>" + row.brand + " - " + row.type + " - " + row.stock + " - £" + row.price + " (<a href='javascript:void(0);' onclick='deleteGroceries(" + row.id + ");'>Delete Groceries</a>)";
        //listholder2.innerHTML += myimage + row.trying + "\'" + " (<a href='javascript:void(0);' onclick='deleteGroceries(" + row.id + ";'></a>";
       
    }
 
}


function updateGroceriesList2(transaction, results) {
    var listholder = document.getElementById("grocerieslist2");
    //var listholder2 = document.getElementById("grocerieslist3");
    
    var i;
    for (i = 0; i < results.rows.length; i++) {
        
        var row = results.rows.item(i);
        listholder.innerHTML += "<li>"+ myimage + row.trying + "'" + "<li>" + row.brand + " - " + row.type + " - £" + row.price;
        //listholder2.innerHTML += myimage + row.trying + "\'" + " (<a href='javascript:void(0);' onclick='deleteGroceries(" + row.id + ";'></a>";
       
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

    