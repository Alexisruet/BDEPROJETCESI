function Validation() {
    var pwd = document.getElementById("password").value;
    var RegexRev = [{
        re: /[A-Z]/g,
        count: 1,
        msg: "Le mot de passe nécessite une majuscule"
    }, {
        re: /\d/g,
        count: 1,
        msg: "Le mot de passe nécessite un chiffre"
    }];

    for (var i = 0; i < RegexRev.length; i++) {
        var item = RegexRev[i];
        var match = pwd.match(item.re);
        if (null === match || match.length < item.count) {
            alert(item.msg);
            return false;
        }
    }
}

function checkForm(form) {
    if (!form.terms.checked) {
        alert("Please indicate that you accept the Terms and Conditions");
        form.terms.focus();
        return false;
    }
    return true;
}