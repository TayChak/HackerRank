function processData(input) {
    //Enter your code here
    let fine = 0;
    const [actual, expected] = input.split('\n').map(item => {
        const [day, month, year] = item.split(' ').map(Number);

        return { day, month, year };
    });

    (
        actual.year === expected.year &&
        actual.month === expected.month &&
        actual.day > expected.day
    ) && (fine = (actual.day - expected.day) * 15);

    (
        actual.year === expected.year &&
        actual.month > expected.month
    ) && (fine = (actual.month - expected.month) * 500);

    (actual.year > expected.year) && (fine = 10000);

    console.log(fine);
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
