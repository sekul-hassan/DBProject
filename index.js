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
    saveBus.addEventListener("click", () => {
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
        console.log(cnt);
        if (cnt == 1) {
            saveBus.submit();
            alert("Are you ready to lost 5TK..?");
        }
        else {
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