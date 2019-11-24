// Expected Output: 3
// let n = 7;
// let ar = [10, 20, 20, 10, 10, 30, 50, 10, 20];

// Expected Output: 4
let n = 10;
let ar = [1, 1, 3, 1, 2, 1, 3, 3, 3, 3];


function sockMerchant(n, ar) {
    let pairs = 0;
    let pile = [...ar];
    console.log(pairs, pile);
    let i = 0;

    pile.forEach((e) => {
        console.log('>>outer loop: ', i);

        let firstColor = pile[0];

        console.log('color: ', firstColor);

        for (let j = 1; j < pile.length; j++) {

            console.log('>inner loop: ', j, 'against: ', pile[j]);

            if (firstColor === pile[j]) {
                console.log('MATCH: ', firstColor);
                pairs++;
                pile.splice(j, 1);
                break;
            }
        }
        pile.splice(0, 1);
        console.log(pairs, pile);
        i++;
    });
    return pairs;
}

console.log(sockMerchant(n, ar));