import System.IO;
 var fileName = "counter.txt";
function modify_qty(val) {
	
	
	 // read from filename
     var sr = new StreamReader(Application.dataPath + "/" + fileName);
     var fileContents = sr.ReadToEnd();
     sr.Close();
  
      // put data from filename into a variable
     var qty = fileContents.Split("\n"[0]);
    //var qty = document.getElementById('qty').value;
    var new_qty = parseInt(qty,10) + val;
    
    if (new_qty < 0) {
        new_qty = 0;
    }
    
    document.getElementById('qty').value = new_qty;
  return new_qty;
}

 
  
