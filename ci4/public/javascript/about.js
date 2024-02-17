function showDateTime() {
    var currentDate = new Date();
    var dateTimeString = 'Current Date and Time: ' + currentDate.toLocaleString(); document.getElementById('dateTime').innerHTML = dateTimeString;
}

const person = {
    name: "Angela 'SaiDa' Mae M. Tauyan",
    age: 20
};

const personInfoElement = document.getElementById('personInfo');
    personInfoElement.textContent = `I am ${person.name} and I'm ${person.age} years old.`;


function myNickname() {
    return "My nicknames are Angel/ Angela/ Gela/ Angge/ Mae."
}
document.getElementById("nickname").innerHTML = myNickname();

class Website {
  constructor(name, year) {
    this.name = name;
    this.year = year;

  }
  age() {
    const date = new Date();
    return date.getFullYear() - this.year;
  }
}

const myWeb = new Website("SaiDa", 2023);
document.getElementById("web").innerHTML =
"My website is " + myWeb.age() + " years old.";

document.getElementById("p1").innerHTML = "Please Enjoy my Website!!!";

function myFunction() {
  alert("I am just an alert box!");
}