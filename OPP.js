function uni(theUniName) {
  return {
    name: theUniName,
    students: [],
    stud: function (n) {
      this.students.push(n);
    },
    allStudents: function () {
      console.log("Students from " + this.name + ":");
      for (let i = 0; i < this.students.length; i++) {
        console.log(this.students[i]);
      }
      console.log();
    },
  };
}

let a = uni("NJIT");
a.stud("Bob");
a.stud("Jack");
a.stud("joe");
a.allStudents();

let b = uni("RU");
b.stud("Jone");
b.stud("Rat");
b.stud("Row");
b.allStudents();
