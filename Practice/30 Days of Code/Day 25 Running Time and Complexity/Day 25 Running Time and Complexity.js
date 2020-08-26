function processData(input) {
    let result = input.split('\n').slice(1).map(isPrime);
    //Enter your code here
    function isPrime(input, i) {
        let messages = ['Not prime', 'Prime'];

        if (input == 1) { 
            return messages[0];
        }
        if (input == 2) {
            return messages[1];
        }
        if (input % 2 == 0) {
            return messages[0];
        } 
        
        for (i = 3; i <= Math.sqrt(input); i += 2) {
            if (input % i == 0) { 
                return messages[0];
            }
        } 
        return messages[1];
    }

    console.log(result.join("\n"));
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
