const TextEncoder = new TextEncoder();

class Matrices {
    IP = [
        58, 50, 42, 34, 26, 18, 10, 2,
        60, 52, 44, 36, 28, 20, 12, 4,
        62, 54, 46, 38, 30, 22, 14, 6,
        64, 56, 48, 40, 32, 24, 16, 8,
        57, 49, 41, 33, 25, 17, 9, 1,
        59, 51, 43, 35, 27, 19, 11, 3,
        61, 53, 45, 37, 29, 21, 13, 5,
        63, 55, 47, 39, 31, 23, 15, 7
    ]
    PC1 = [
        57, 49, 41, 33, 25, 17, 9,
        1, 58, 50, 42, 34, 26, 18,
        10, 2, 59, 51, 43, 35, 27,
        19, 11, 3, 60, 52, 44, 36,
        63, 55, 47, 39, 31, 23, 15,
        7, 62, 54, 46, 38, 30, 22,
        14, 6, 61, 53, 45, 37, 29,
        21, 13, 5, 28, 20, 12, 4
    ]
    PC2 = [
        14, 17, 11, 24, 1, 5,
        3, 28, 15, 6, 21, 10,
        23, 19, 12, 4, 26, 8,
        16, 7, 27, 20, 13, 2,
        41, 52, 31, 37, 47, 55,
        30, 40, 51, 45, 33, 48,
        44, 49, 39, 56, 34, 53,
        46, 42, 50, 36, 29, 32
    ]
    KEY_SHIFTS = [
        1, 1, 2, 2, 2, 2, 2, 2, 1, 2, 2, 2, 2, 2, 2, 1
    ]
    E = [
        32, 1, 2, 3, 4, 5,
        4, 5, 6, 7, 8, 9,
        8, 9, 10, 11, 12, 13,
        12, 13, 14, 15, 16, 17,
        16, 17, 18, 19, 20, 21,
        20, 21, 22, 23, 24, 25,
        24, 25, 26, 27, 28, 29,
        28, 29, 30, 31, 32, 1
    ]
    S1 = [
        [14, 4, 13, 1, 2, 15, 11, 8, 3, 10, 6, 12, 5, 9, 0, 7],
        [0, 15, 7, 4, 14, 2, 13, 1, 10, 6, 12, 11, 9, 5, 3, 8],
        [4, 1, 14, 8, 13, 6, 2, 11, 15, 12, 9, 7, 3, 10, 5, 0],
        [15, 12, 8, 2, 4, 9, 1, 7, 5, 11, 3, 14, 10, 0, 6, 13]
    ]
    S2 = [
        [15, 1, 8, 14, 6, 11, 3, 4, 9, 7, 2, 13, 12, 0, 5, 10],
        [3, 13, 4, 7, 15, 2, 8, 14, 12, 0, 1, 10, 6, 9, 11, 5],
        [0, 14, 7, 11, 10, 4, 13, 1, 5, 8, 12, 6, 9, 3, 2, 15],
        [13, 8, 10, 1, 3, 15, 4, 2, 11, 6, 12, 5, 9, 0, 7, 14]
    ]
    S3 = [
        [10, 0, 9, 14, 6, 3, 15, 5, 1, 13, 12, 7, 11, 4, 2, 8],
        [13, 7, 0, 9, 3, 4, 6, 10, 2, 8, 5, 14, 12, 11, 15, 1],
        [13, 6, 4, 9, 8, 15, 3, 0, 11, 1, 2, 12, 5, 10, 14, 7],
        [1, 10, 13, 0, 6, 9, 8, 7, 4, 15, 14, 3, 11, 5, 2, 12]
    ]
    S4 = [
        [7, 13, 14, 3, 0, 6, 9, 10, 1, 2, 8, 5, 11, 12, 4, 15],
        [13, 8, 11, 5, 6, 15, 0, 3, 4, 7, 2, 12, 1, 10, 14, 9],
        [10, 6, 9, 0, 12, 11, 7, 13, 15, 1, 3, 14, 5, 2, 8, 4],
        [3, 15, 0, 6, 10, 1, 13, 8, 9, 4, 5, 11, 12, 7, 2, 14]
    ]
    S5 = [
        [2, 12, 4, 1, 7, 10, 11, 6, 8, 5, 3, 15, 13, 0, 14, 9],
        [14, 11, 2, 12, 4, 7, 13, 1, 5, 0, 15, 10, 3, 9, 8, 6],
        [4, 2, 1, 11, 10, 13, 7, 8, 15, 9, 12, 5, 6, 3, 0, 14],
        [11, 8, 12, 7, 1, 14, 2, 13, 6, 15, 0, 9, 10, 4, 5, 3]
    ]
    S6 = [
        [12, 1, 10, 15, 9, 2, 6, 8, 0, 13, 3, 4, 14, 7, 5, 11],
        [10, 15, 4, 2, 7, 12, 9, 5, 6, 1, 13, 14, 0, 11, 3, 8],
        [9, 14, 15, 5, 2, 8, 12, 3, 7, 0, 4, 10, 1, 13, 11, 6],
        [4, 3, 2, 12, 15, 10, 0, 6, 11, 1, 7, 13, 8, 9, 5, 14]
    ]
    S7 = [
        [4, 11, 2, 14, 15, 0, 8, 13, 3, 12, 9, 7, 5, 10, 6, 1],
        [13, 0, 11, 7, 4, 9, 1, 10, 14, 3, 5, 12, 2, 15, 8, 6],
        [1, 4, 11, 13, 12, 3, 7, 14, 10, 15, 6, 8, 0, 5, 9, 2],
        [6, 11, 13, 8, 1, 4, 10, 7, 9, 5, 0, 15, 14, 2, 3, 12]
    ]
    S8 = [
        [13, 2, 8, 4, 6, 15, 11, 1, 10, 9, 3, 14, 5, 0, 12, 7],
        [1, 15, 13, 8, 10, 3, 7, 4, 12, 5, 6, 11, 10, 14, 9, 2],
        [7, 11, 4, 1, 9, 12, 14, 2, 0, 6, 10, 13, 15, 3, 5, 8],
        [2, 1, 14, 7, 4, 10, 8, 13, 15, 12, 9, 0, 3, 5, 6, 11]
    ]
    FP = [
        40, 8, 48, 16, 56, 24, 64, 32,
        39, 7, 47, 15, 55, 23, 63, 31,
        38, 6, 46, 14, 54, 22, 62, 30,
        37, 5, 45, 13, 53, 21, 61, 29,
        36, 4, 44, 12, 52, 20, 60, 28,
        35, 3, 43, 11, 51, 19, 59, 27,
        34, 2, 42, 10, 50, 18, 58, 26,
        33, 1, 41, 9, 49, 17, 57, 25
    ]
    P = [
        16, 7, 20, 21, 29, 12, 28, 17,
        1, 15, 23, 26, 5, 18, 31, 10,
        2, 8, 24, 14, 32, 27, 3, 9,
        19, 13, 30, 6, 22, 11, 4, 25
    ]
    S = [
        this.S1, this.S2, this.S3, this.S4, this.S5, this.S6, this.S7, this.S8
    ]
}

const matrices = new Matrices();

function splitStringEqually(str, n) {
    const chunks = str.match(new RegExp(`.{1,${n}}`, 'g')) || [];
    if (chunks.length === 0) return chunks;
    chunks[chunks.length - 1] = chunks[chunks.length - 1].padEnd(n, '0');
    return chunks;
}

function computeXOR(a, b) {

    let res = '';
    for (let i = 0; i < a.length; i++) {
        res += (parseInt(a[i]) ^ parseInt(b[i])).toString();
    }
    return res;
}

function strToBin(str) {
    if (isBinary(str)) return str;

    return Array.from(
        txtEncoder.encode(str),
        (byte) => byte.toString(2).padStart(8, '0')
    ).join('');
}

// gets a string of 1s and 0s and returns a string of characters
function binToStr(bin) {
    const binClone = bin.slice();
    let result = '';
    for (let i = 0; i < binClone.length; i += 8) {
        const binaryByte = binClone.slice(i, i + 8);
        const decimalByte = parseInt(binaryByte, 2);
        result += String.fromCharCode(decimalByte);
    }
    return result;
}

function isBinary(str) {
    return /^[0-1]+$/.test(str);
}

export function generateKey(length = 8) {
    return Array.from({ length }, () => {
        lcg.getNext().toString('hex')
    })
}

function encodeString(binary) {

    // divide into 64 bit blocks
    const blocks = binary.match(/.{1,64}/g) || [];

    // pad last block with 0s
    blocks[blocks.length - 1] = blocks[blocks.length - 1].padStart(64, '0');

    // apply initial permutation
    blocks.forEach((block, i) => {
        blocks[i] = block.split('').map((_, i) => block[matrices.IP[i] - 1]).join('');
    });
    return blocks;
}

function generateSubKeys(binKey) {
    const { PC1, PC2, KEY_SHIFTS } = matrices;
    const keys = [];
    let binKey_PC1 = '';

    PC1.forEach((pos) => {
        binKey_PC1 += binKey[pos - 1];
    });

    let Cn = binKey_PC1.substring(0, 28), Cd = binKey_PC1.substring(28, 56); // 56 explicit for being sure

    for (let i = 0; i < 16; i++) {
        Cn = Cn.substring(KEY_SHIFTS[i]) + Cn.substring(0, KEY_SHIFTS[i]);
        Cd = Cd.substring(KEY_SHIFTS[i]) + Cd.substring(0, KEY_SHIFTS[i]);

        let tmp = Cn + Cd;

        let binKey_PC2 = '';
        PC2.forEach((pos) => {
            binKey_PC2 += tmp[pos - 1];
        });
        keys.push(binKey_PC2);
    }
    return keys;
}

function encryptDES(keys, ip) {
    let cyphertext = '';

    // Split ip in half | 64/2 = 32
    let Ln_minus_1 = ip.substring(0, 32);
    let Rn_minus_1 = ip.substring(32);

    for (let round = 0; round < 16; round++) {
        // Ln = Rn-1
        // Rn =  Utils.computeXOR(Ln-1,f(Rn-1,Kn))
        const Ln = Rn_minus_1;

        // computation of f(Rn-1,Kn)
        let fn = '';
        let e_Rn_minus_1 = '';
        // Apply Expansion table E to expand Rn-1
        for (let i = 0; i < matrices.E.length; i++) {
            e_Rn_minus_1 = e_Rn_minus_1 + Rn_minus_1.charAt(matrices.E[i] - 1);
        }
        //Compute XOR of E(Rn-1) and Kn

        //Divide the resulting string into 8 substrings of length 6
        const b = splitStringEqually(computeXOR(e_Rn_minus_1, keys[round]), 6);
        console.log(`b[${round}]:`)
        console.log(b.length)

        let sMerge = '';
        for (let i = 0; i < 8; i++) {
            const row = parseInt(b[i][0] + b[i][5], 2);
            const col = parseInt(b[i][1] + b[i][2] + b[i][3] + b[i][4], 2);
            sMerge = sMerge + matrices.S[i][row][col].toString(2).padStart(4, '0');
        }

        for (let i = 0; i < matrices.P.length; i++) {
            fn = fn + sMerge.charAt(matrices.P[i] - 1);
        }

        Rn_minus_1 = computeXOR(Ln_minus_1, fn);
        Ln_minus_1 = Ln;
    }

    //merge R16 and L16 (R16 first)
    const merge = Rn_minus_1 + Ln_minus_1;
    // Apply Final Permutation FP
    for (let i = 0; i < matrices.FP.length; i++) {
        cyphertext = cyphertext + merge.charAt(matrices.FP[i] - 1);
    }

    return cyphertext;
}

function decryptDES(keys, message) {
    const reversedKey = keys.slice().reverse();
    return encryptDES(reversedKey, message);
}

export class DES {
    constructor(key = generateKey()) {
        this.keys = generateSubKeys(strToBin(key));
    }

    getKeys() {
        return this.keys;
    }

    generateKeys(key = generateKey()) {
        this.keys = generateSubKeys(strToBin(key));
    }

    encode(message) {
        return encodeString(message);
    }

    encrypt(...message) {
        return message.reduce((acc, cur) => acc + encryptDES(this.keys, cur), '');
    }

    decrypt(...message) {
        return message.reduce((acc, cur) => acc + decryptDES(this.keys, cur), '');
    }

    /**
     * this method is used to decrypt a cyphertext that was encrypted using the DES algorithm
     * it's a wrapper for encoding, decrypting and converting the result to a string
     * @param {string} cyphertext cyphertext to be encoded 
     */
    decryptFull(cyphertext) {
        const encodedCypher = des.encode(cyphertext);
        const decryptedMessage = des.decrypt(...encodedCypher);
        return binToStr(decryptedMessage);
    }

    /**
     * this method is used to encrypt a message using the DES algorithm
     * it's a wrapper for converting the message to a binary, encoding, encrypting and 
     * @param {string} message message to be encrypted
        */
    encryptFull(message) {
        const messageBin = strToBin(message);
        const encodedMessage = des.encode(messageBin);
        return des.encrypt(...encodedMessage);
    }
}

