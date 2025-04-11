document.write("<br>問１<br>");
function menseki(hankei, pai = 3.14) {
    return("半径が" + hankei + "の時、円の面積は" + hankei * hankei * pai);
}
document.write(menseki(5) + "<br>");
document.write(menseki(7) + "<br>");
document.write(menseki(10) + "<br>");

document.write("<br>問2<br>")
function sum(group, adult, kids) {
    return(group + "グループの合計金額 " + (adult * 500 + kids * 200) + "円です。");
}
document.write(sum("A", 2, 4) + "<br>");
document.write(sum("B", 1, 5) + "<br>");
document.write(sum("C", 3, 7) + "<br>");
