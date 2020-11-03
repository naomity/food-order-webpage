function incrementValue(id)
{
    var value = parseInt(document.getElementById(id).value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<10){
        value++;
        document.getElementById(id).value = value;
    }
}

function decrementValue(id)
{
    var value = parseInt(document.getElementById(id).value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>0){
        value--;
        document.getElementById(id).value = value;
    }
}

function getOrder(){
	var quantity = [[], [], [], [], []]; 
	var category = ["qmeat", "qsea", "qvege", "qmain", "qdrink"]
	for (var i = 0; i < category.length; i++){
		var array = document.getElementsByName(category[i]); 
		for (var j = 0; j < array.length; j++){
			quantity[i][j] = array[j].value; 
		}
	}
	
	var item = [[], [], [], [], []]; 
	for (var i = 0; i < category.length; i++){
		var array = document.getElementsByName(category[i]); 
		for (var j = 0; j < array.length; j++){
			if (array[j].value > 0){
				item[i][j] = array[j].getAttribute('id'); 
			}else{
				item[i][j] = 100; 
			}
		}
	}
	
	var order = ""; 
	var price = 0; 
	var map = {0: "Braised Beef", 1: "Black Pepper Beef", 2:"Kung Pao Chicken", 3:"Fried Chicken Wings", 4:"Sweet and Sour Pork Ribs", 
	5:"Fried Squid", 6:"Stir Fried Prawn", 7:"Egg Yolk Prawn", 8:"Garlic Scallops", 9:"Boiled Fish Fillet", 
	10:"Spicy Tofu", 11:"Cold Cucumber", 12:"Steamed Pumpkin", 13:"Stir Fried Broccoli", 14:"Eggplant with Sauce", 
	15:"Rice", 16:"Noodles", 17:"Porridge", 18:"Orange Juice", 19:"Ice Lemon Tea", 20:"Barley Water"}
	for (var i = 0; i < quantity.length; i++){
		var slice_length = quantity[i].length; 
		for (var j = 0; j < slice_length; j++){
			if (quantity[i][j] > 0){
				order = order.concat(map[item[i][j]], " * ", quantity[i][j], "<br>")
				if (0 <= item[i][j] && item[i][j] < 5){
					price += quantity[i][j] * 1.5; 
				} else if (5 <= item[i][j] && item[i][j] < 10){
					price += quantity[i][j] * 2.5; 
				} else if (10 <= item[i][j] && item[i][j]< 15){
					price += quantity[i][j] * 1.0; 
				} else if (15 <= item[i][j] && item[i][j]< 18){
					price += quantity[i][j] * 0.5; 
				} else{
					price += quantity[i][j] * 2.0; 
				}
			}
		}
	}

	createCookie("order", order, "10");
    createCookie("price", price, "10");
}

function createCookie(name, value, days) {
  var expires;
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = "; expires=" + date.toGMTString();
  }
  else {
    expires = "";
  }
  document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
}
