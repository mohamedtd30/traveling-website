document.getElementById("creditNo").addEventListener("blur", function () {
    const credit = this.value;
    if (!credit) {
        document.getElementById("creditError").innerText = "Please enter the creditcard number";
        document.getElementById("creditError").style.display = "block";
        flag = true;

    } else if (!validateC(credit)) {
        document.getElementById("creditError").innerText = "Invalid creditcard number";
        document.getElementById("creditError").style.display = "block";
        flag = true;
    }
    });

document.getElementById("ExpireDate").addEventListener("blur", function () {
    const expire = this.value;
    if (!expire) {
        document.getElementById("exError").innerText = "Please enter the expire date";
        document.getElementById("exError").style.display = "block";
        flag = true;
    }
});

document.getElementById("SecureCode").addEventListener("blur", function () {
    const code = this.value;
    if (!code) {
        document.getElementById("codeError").innerText = "Please enter the source code";
        document.getElementById("codeError").style.display = "block";
        flag = true;
    }
    else if (!validateCVV(code)) {
        document.getElementById("codeError").innerText = "Invalid source code";
        document.getElementById("codeError").style.display = "block";
        flag = true;
    }
});

document.getElementById("creditNo").addEventListener("input", function () {
    if (validateC(this.value))
        document.getElementById("creditError").style.display = "none";
    flag = false;
});

document.getElementById("SecureCode").addEventListener("input", function () {
    if (validateCVV(this.value))
        document.getElementById("codeError").style.display = "none";
    flag = false;
});

document.getElementById("ExpireDate").addEventListener("input", function () {
    if (this.value)
        document.getElementById("exError").style.display = "none";
    flag = false;
});

function validateC(id) {
    const Number = 16;
    if (id.length < Number || id.length > Number)
        return false;
    return true;
  }

function validateCVV(cvv) {
    if (typeof cvv !== 'string' || (cvv.length !== 3 && cvv.length !== 4)) {
      return false;
    }
  
    if (!/^\d+$/.test(cvv)) {
      return false;
    }
  
    return true;
  }

  document.getElementById("next").addEventListener("click", function(){
    const login = document.getElementById("next");
    if (flag){
        login.preventDefault();
    }
    else{
        login.submit();
    }
});
