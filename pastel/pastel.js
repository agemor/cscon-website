function evaluate(sourceCode, definitions) {
    var blocks = sourceCode;
    if (typeof sourceCode == "string")
        blocks = sourceCode.replace(/\(/gi, " ( ").replace(/\)/gi, " ) ").replace(/\s\s+/g, ' ').split(" ");
    var depth = 0;
    var index = 0;
    //console.log(blocks);
    var list = [];
    var inDepthList = [];
    while (index < blocks.length) {
        blocks[index] = blocks[index].trim();
        if (blocks[index] == "(") {
            depth ++;
            if (depth > 1) {
                inDepthList.push(blocks[index]);
            }
        } else if (blocks[index] == ")") {
            if (depth <= 1) {
                if (depth <= 0) {
                    alert("Error: Paren not match");
                    return 0;
                }
                var value = evaluate(inDepthList);
                //console.log(value);
                list.push(value);
                inDepthList = [];
            } else {
                inDepthList.push(blocks[index]);
            }
            depth--;
        } else {
            if (depth < 1) {
                list.push(blocks[index]);
            } else {
                inDepthList.push(blocks[index]);
            }
        }
        index++;
    }
    if (depth > 0) {
        alert("Error: Paren not match");
        return 0;
    }
    if (list.length > 0) {
        switch (list[0]) {
            case "print":
                if (list.length != 2) {
                    alert("Error: function argument do not match");
                    return 0;
                } else {
                    alert(list[1]);
                    return "printed";
                }
                break;
            case "+":
                return Number(list[1]) + Number(list[2]);
            case "-":
                return Number(list[1]) - Number(list[2]);
            case "/":
                return Number(list[1]) / Number(list[2]);
            case "*":
                return Number(list[1]) * Number(list[2]);
            case ">":
                return Number(list[1]) > Number(list[2]);
            case "<":
                return Number(list[1]) < Number(list[2]);
            case "=":
                return list[1] == list[2];
            case "%":
                return Number(list[1]) % Number(list[2]);
            case "if":
                return Number(list[1]) > 0 ? list[2] : list[3];  
            default:
                return list[0];
        }
    }
}


var code = `
(print hello-world)
(print (* (+ 1 1) 4))
(print (if (< 1 3) (yes) (no)))
`;


//evaluate(code);