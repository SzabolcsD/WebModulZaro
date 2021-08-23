
function ellenoriz(){
     var ddl = document.getElementById("szak");
    if(ddl.selectedIndex == 0) {
        alert('Kérem válasszon egy szakot!');
    }
    else {
        var selectedText = ddl.options[ddl.selectedIndex].text;
        alert('Sikeres jelentkezés, mint: '+selectedText);
    }
}