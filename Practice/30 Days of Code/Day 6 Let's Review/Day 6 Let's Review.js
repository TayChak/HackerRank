function processData(input) {
    //Enter your code here
    let inputSplit = input.split("\n").slice(1);
  inputSplit.forEach(str => {
    let even = [];
    let odd = [];
    for (let i = 0; i < str.length; i++) {
      if (i % 2 === 0) {
        even.push(str[i]);
      } else {
        odd.push(str[i]);
      }
    }
    console.log(`${even.join("")} ${odd.join("")}`);
  });
} 

process.stdin.resume();
process.stdin.setEncoding("ascii");
_input = "";
process.stdin.on("data", function (input) {
    _input += input;
});

process.stdin.on("end", function () {
   processData(_input);
});
