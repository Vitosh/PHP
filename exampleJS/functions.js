"use strict";

function hello(username){
	console.log("hello, " + username);
}

var obj = {
	hello: function(){
		return "hello, " + this.username;
	},
	username: "Vityata"
};

var obj2 = {
	hello: obj.hello,
	username: "Vit"
}

function average(){
	for (var i = 0, sum = 0, n = arguments.length;
		i<n;
		i++){
		sum += arguments[i];
	}
	return sum/n;
}

hello("Vitosh");
console.log(obj.hello());
console.log(obj2.hello());
console.log(hello());
console.log(average(1,2,3,50));

function User(name, pwd){
	this.name = name;
	this.pwd = pwd;
	this.toString = function(){ return "I am just the user -> " + name};
}

var myUser = new User("vityata", "asdfasdf");
console.log(myUser);
console.log(myUser.name);
console.log(myUser.pwd);
console.log(myUser.toString());