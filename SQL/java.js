
/*function createDatabase(){
         try{
              if(window.openDatabase){
              var shortName = 'db_xyz';
              var version = '1.0';
              var displayName = 'Display Information';
              var maxSize = 65536; // in bytes
              db = openDatabase(shortName, version, displayName, maxSize);
        }
     }catch(e){
                 alert(e);
           }
     }

     function executeQuery($query,callback){
     try{
         if(window.openDatabase){
         db.transaction(
         function(tx){
         tx.executeSql($query,[],function(tx,result){
         if(typeof(callback) == "function"){
                 callback(result);
         }else{
                 if(callback != undefined){
                       eval(callback+"(result)");
                  }
         }
         },function(tx,error){});
          });
           return rslt;
         }
         }catch(e){}
         }
           function createTable(){
           var sql = 'drop table image';
                 executeQuery(sql);
                 var sqlC = 'CREATE TABLE image (id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT, name TEXT NOT NULL, image BLOB )';
                 executeQuery(sqlC);
           }
           function insertValue(){
                var img = document.getElementById('image');
                var sql = 'insert into image (name,image) VALUES ("sujeet","'+img+'")';
                executeQuery(sql,function(results){alert(results)});
            }
           
            
function updateGroceriesList(transaction, results) {
    var listitems = "";
    var listholder = document.getElementById("grocerieslist");
    
    
    listholder.innerHTML = "";

    
    var i;
    for (i = 0; i < results.rows.length; i++) {
        var row = results.rows.item(i);
        listholder.innerHTML += "<li>" + row.id + " - " + row.id + " - " + row.name + " - " + "$" + row.image + " (<a href='javascript:void(0);' onclick='deleteGroceries(" + row.id + ");'>Delete Groceries</a>)";
    }

}   
   
            
function outputGroceries() {
    if (db) {
        db.transaction(function (t) {
            t.executeSql("SELECT * FROM groceries", [], updateGroceriesList);
        });
    } else {
        alert("db not found, your browser does not support web sql!");
    }
}
*/
var mydb;
var openmydb = function(){
    mydb = openDatabase("groceries.db", "0.1", "A Database of UWL MART", 1024 * 1024);
        
    mydb.transaction(function (t) {
        t.executeSql("CREATE TABLE IF NOT EXISTS groceries (id INTEGER PRIMARY KEY ASC, brand TEXT, type TEXT, stock TEXT, price TEXT)");
        alert("I am in");
    });
};

openmydb();
function updateGroceriesList(transaction, results) {
    var listitems = "";
    var listholder = document.getElementById("grocerieslist");
    
    
    listholder.innerHTML = "";

    
    var i;
    for (i = 0; i < results.rows.length; i++) {
        var row = results.rows.item(i);
        listholder.innerHTML += "<li>" + row.brand + " - " + row.type + " - " + row.stock + " - " + "$" + row.price + " (<a href='javascript:void(0);' onclick='deleteGroceries(" + row.id + ");'>Delete Groceries</a>)";
    }

}



function outputGroceries() {
    if (mydb) {
        mydb.transaction(function (t) {
            t.executeSql("SELECT * FROM groceries", [], updateGroceriesList);
        });
    } else {
        alert("db not found, your browser does not support web sql!");
    }
}

function addGroceries() {
    if (mydb) {
        var brand = document.getElementById("groceriesbrand").value;
        var type = document.getElementById("groceriestype").value;
        var stock = document.getElementById("groceriesstock").value;
        var price = document.getElementById("groceriesprice").value;

        if (brand !== "" && type !== "" && stock !== "" && price !== "") {
            mydb.transaction(function (t) {
                t.executeSql("INSERT INTO groceries (brand, type, stock, price) VALUES (?, ?, ?, ?)", [brand, type, stock, price]);
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

    