let signUp = document.getElementById('signUp');
let signUpForm = document.getElementById('signUpForm');
if (signUp) {
    signUp.addEventListener("click", () => {
        signUpForm.style.display = "block";
        console.log("okkk");
    });
}

let regiCancel = document.getElementById('regiCancel');
if (regiCancel) {
    regiCancel.addEventListener("click", () => {
        signUpForm.style.display = "none";
    })
}