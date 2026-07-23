// بيانات تجريبية للدخول
const VALID_EMAIL = "admin@sudan.com";
const VALID_PASSWORD = "123456";

// عند ارسال الفورم
document.getElementById("loginForm")?.addEventListener("submit", function(e){
    e.preventDefault();
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let error = document.getElementById("error");

    if(email === VALID_EMAIL && password === VALID_PASSWORD){
        localStorage.setItem("isLoggedIn", "true"); // حفظ انو دخل
        window.location.href = "home.html"; // امشي الصفحة الرئيسية
    } else {
        error.textContent = "البريد او كلمة السر خطأ. جرب: admin@sudan.com / 123456";
    }
});

// دالة تتأكد هل مسجل دخول ولا لا
function checkLogin(){
    if(localStorage.getItem("isLoggedIn") !== "true"){
        window.location.href = "index.html"; // رجعو لصفحة الدخول
    }
}

// تسجيل الخروج
function logout(){
    localStorage.removeItem("isLoggedIn");
    window.location.href = "index.html";
}