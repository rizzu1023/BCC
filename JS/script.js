// var FirstName=prompt("Enter your First Name");
// var LastName=prompt("Enter your Last Name");
// var Age=prompt("how old are you");
// var Height=prompt("Enter your Height in centimeter");
// var PetName=prompt("Enter your pet name");
// alert("Thank you! for the imformation");
// var len=PetName.length;
// if(FirstName[0] === LastName[0] && 20<Age<30 && Height>175 && PetName[len-1]=='y' ){

// console.log("Welcome "+FirstName+" you have passed spy test");
// }
// else{
// console.log("Nothing to see here");
// }


var objt={
	name:"Rizwan",
	greet:function(){
		console.log("hello "+this.name);
	}
}

objt.greet();