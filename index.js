class Person{
    constructor(ime,prezime){
        this.ime=ime;
        this.prezime=prezime;
    }
}

class Teacher extends Person{
    constructor(ime,prezime,plata){
        super(ime,prezime);
        this.plata = plata;
    }

}
Person.prototype.smth=function () {
    console.log(this.ime)
}
let teacher = new Teacher('Neki','team',1400);
console.log(teacher)
teacher.smth();
function Osoba(ime,prezime){
    this.ime = ime;
    this.prezime = prezime;
}
function Student(ime,prezime,brIndexa){
    Osoba.apply(this,[ime,prezime]);
    this.brIndexa = brIndexa;
}
Osoba.prototype.displayPrez = function (){
    console.log(this.prezime);
};
Student.prototype = Object.create(Osoba.prototype);

let stud = new Student('Eldin','Kecap','1');
console.log(stud);
stud.displayPrez();
Student.prototype.smt = function(){
    console.log(this.brIndexa);
};
stud.smt();