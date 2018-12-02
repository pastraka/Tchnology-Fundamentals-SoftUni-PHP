function sumMagic(inputRaw) {
let input = inputRaw[0].split(` `).map(Number);
let magicSum = Number(inputRaw[1]);

for (let i = 0; i < input.length - 1; i++) {

for (let j = i + 1; j < input.length; j++) {
if (input[i] + input[j] === magicSum) {
console.log(`${input[i]} ${input[j]}`);
break;
}
}
}
}