'use strict';

process.stdin.resume();
process.stdin.setEncoding('utf-8');

let inputString = '';
let currentLine = 0;

process.stdin.on('data', inputStdin => {
    inputString += inputStdin;
});

process.stdin.on('end', _ => {
    inputString = inputString.replace(/\s*$/, '')
        .split('\n')
        .map(str => str.replace(/\s*$/, ''));

    main();
});

function readLine() {
    return inputString[currentLine++];
}



function main() {
    const n = parseInt(readLine(), 10);
    // Convert n to binary and create an array of 1s only
    const arr = n.toString(2).split("0");
    
    // Create an array of the length of 1s in arr
    const arrlengths = arr.map(x => x.length);
    
    const maxLength = Math.max(...arrlengths);
    console.log(maxLength);
}
