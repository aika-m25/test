document.write("<br>問1<br>")
for (var q1 = 1; q1 <= 5; q1++) {
    document.write("★");
}

document.write("<br><br>問2<br>");
for (var q2 = 1; q2 <= 6; q2++) {
    document.write("★");
    if (q2 % 3 == 0) {
        document.write("<br>");
    }
}

document.write("<br>問3<br>");
for (var q3 = 1; q3 <= 10; q3++) {
    document.write("☆");
    if (q3 % 5 == 0) {
        document.write("<br>");
    }
}

document.write("<br>問4<br>");
for (var q4 = 1; q4 <= 20; q4++) {
    document.write("★");
    if (q4 % 5 == 0) {
        document.write("<br>");
    }
}

document.write("<br>問5<br>");
for (var q5 = 1; q5 <= 12; q5++) {
    document.write("★");
    if (q5 % 3 == 0) {
        document.write("<br>");
    }
}

document.write("<br>問6<br>");
for (var q6 = 1; q6 <= 3; q6++) {
    for (var q6a = 1; q6a <= 3; q6a++) {
        if (q6a % 3 == 0) {
            document.write("★");
        } else {
            document.write("☆");
        }
    }
    document.write("<br>");
}
    

document.write("<br>問7<br>");
for (var q7 = 1; q7 <= 4; q7++) {
    for (var q7a = 1; q7a <= 5; q7a++) {
        if (q7a % 2 == 1) {
            document.write("★");
        } else {
            document.write("☆");
        }
    }
document.write("<br>");
}


document.write("<br>問8<br>");
for (var q8 = 1; q8 <= 5; q8++) {
    for (var q8a = 1; q8a < q8+1; q8a++) {
        document.write("★");
    }
    document.write("<br>");
}