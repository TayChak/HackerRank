function processData(input) {
    //Enter your code here
    const inputArray = input.split("\n"); 
    const n = parseInt(inputArray[0]); 
    const phoneBookArray = inputArray.slice(1, n + 1); 
    const queries = inputArray.slice(n + 1);

    // Turn phoneBookArray into phoneBookObj so its easier to look up name keys and             phone number values
    let phoneBookObj = {};
    for (let i = 0; i < phoneBookArray.length; i++) {
        const currentValue = phoneBookArray[i];
        const [key, value] = currentValue.split(" ");
        phoneBookObj[key] = value; // Magic line to assign names and numbers into ab object!
    }

    // Iterate through queries and look up names and numbers in phoneBookObj
    for (let i = 0; i < queries.length; i++) {
        const queryValue = queries[i];
        if (phoneBookObj[queryValue]) {
        console.log(queryValue + "=" + phoneBookObj[queryValue]);
        } else {
        console.log("Not found");
        }
    }
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
