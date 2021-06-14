let uni = {
  name: function (name) {
    this.name = name;
  },
  students: [],
  stud: function (n) {
    this.students.push(n);
  },
  allStudents: function () {
    for (let i = 0; i < this.students.length; i++) {
      console.log(this.students[i]);
    }
  },
};

let a = uni;
a.name("NJIT");
a.stud("Bob");
a.stud("Jack");
a.stud("Bob");
//a.allStudents()
