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

let routeMapBtn = document.getElementById('routeMapBtn');
let routeMap = document.getElementById('routeMap');
if (routeMapBtn) {
    routeMapBtn.addEventListener("click", () => {
        routeMap.style.display = "block";
    });
}
let mapCancel = document.getElementById('mapCancel');
if (mapCancel) {
    mapCancel.addEventListener("click", () => {
        routeMap.style.display = "none";
    });
}

let saveBus = document.getElementById('saveBus');
if (saveBus) {
    saveBus.addEventListener("click", (e) => {
        let anonna1 = document.getElementById('anonna1');
        let anonna2 = document.getElementById('anonna2');
        let rojina1 = document.getElementById('rojina1');
        let rojina2 = document.getElementById('rojina2');
        let boishaki1 = document.getElementById('boishaki1');
        let boishaki2 = document.getElementById('boishaki2');

        let cnt = 0;
        if (anonna1.value && anonna2.value) {
            cnt++;
        }
        if (rojina1.value && rojina2.value) {
            cnt++;
        }
        if (boishaki1.value && boishaki2.value) {
            cnt++;
        }
        if (cnt == 1) {
            alert("Are you ready to lost 5TK..?");
            saveBus.submit();
        }
        else {
            e.preventDefault();
            alert("You have to be select an bus");
        }
    });
}

let profile = document.getElementById('profile');
let profileBtn = document.getElementById('profileBtn');
if (profileBtn) {
    profileBtn.addEventListener("click", () => {
        profile.style.display = "block";
    });
}

let profileCancel = document.getElementById('profileCancel');
if (profileCancel) {
    profileCancel.addEventListener("click", () => {
        profile.style.display = "none";
    });
}

let profileForm = document.getElementById('profileForm');
let profileUpdate = document.getElementById('profileUpdate');
if (profileUpdate) {
    profileUpdate.addEventListener("click", () => {
        profile.style.display = "none";
        profileForm.style.display = "block";
    });
}

let cancelUpdate = document.getElementById('cancelUpdate');
if (cancelUpdate) {
    cancelUpdate.addEventListener("click", () => {
        profileForm.style.display = "none";
    });
}

let deleteDone = document.getElementById('deleteDone');
if (deleteDone) {
    let name = document.getElementById('uname');
    let email = document.getElementById('uemail');
    let phone = document.getElementById('uphone');
    let gender = document.getElementById('ugender');
    let bg = document.getElementById('ubg');
    let password = document.getElementById('upassword');
    deleteDone.addEventListener("click", () => {
        alert("Your account has been deleted");
        name.value = " ";
        email.value = "akkass@gmail.com";
        phone.value = " ";
        gender.value = " ";
        bg.value = " ";
        password.value = " ";
        deleteDone.submit();
    });
}

let add = document.getElementById('add');
let addCancel = document.getElementById('addCancel');
if (addCancel) {
    addCancel.addEventListener("click", () => {
        add.style.display = "none";
    });
}
let addbtn = document.getElementById('addbtn');
if (addbtn) {
    addbtn.addEventListener("click", () => {
        add.style.display = "block";
    });
}

let updateCancel = document.getElementById('updateCancel');
let update = document.getElementById('update');
if (updateCancel) {
    updateCancel.addEventListener("click", () => {
        update.style.display = "none";
    });
}
let updatebtn = document.getElementById('updatebtn');
if (updatebtn) {
    updatebtn.addEventListener("click", () => {
        update.style.display = "block";
    })
}
