function changeParagraphColor() {
    var borderR = document.getElementById("border_R").value;
    var borderG = document.getElementById("border_G").value;
    var borderB = document.getElementById("border_B").value;
    var borderWidth = document.getElementById("border_width").value;
    var bgR = document.getElementById("bg_R").value;
    var bgG = document.getElementById("bg_G").value;
    var bgB = document.getElementById("bg_B").value;

    var tag = document.getElementById("paragraph");
    tag.style.borderColor = `rgb(${borderR},${borderG},${borderB})`;
    tag.style.borderWidth = borderWidth
    tag.style.backgroundColor = `rgb(${bgR},${bgG},${bgB})`;
}
