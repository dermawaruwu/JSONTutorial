<script>

    var obj1 = {user:"John", age:"32", country:"USA"};
	var obj2 = {user:"Dan", age:"45", country:"UK"};
	var obj3 = {user:"Frank", age:"12", country:"RI"};
	var obj4 = {u1:obj1, u2:obj2, u3:obj3};

	var meats = ["beef", "pork", "lamb"];
	var fruit = ["apple", "plumb", "grape", "orange"];
	var obj5 = {arr1:meats, arr2:fruit};

	document.write(obj4.u1.user+" is "+ obj4.u1.age+" years old "+"<br/>");
	document.write(obj4.u2.user+" lives in "+obj4.u2.country+"<br/>");
	document.write(obj4.u3.user+" is "+ obj4.u3.age+" years old and lives in "+obj4.u2.country+"<br/>");	
	document.write("<br/>");
	document.write(obj5.arr1[1]+" with "+obj5.arr2[2]+" for dinner");

</script>	
