const setError = (element, text) => {
  element.classList.remove("hidden");
  element.innerHTML = text;
};


const reset = (e , err)=>{
  e.style.border = "none"  ;
  err.classList.add("hidden");
}

const validateLogin = () => {
  let returnvalue = false;

  const form = document.forms["login-form"];

  const username = form["username"];
  const usernameErr = document.querySelector(".login-form .err-username");

  if (username.value == "") {
    // console.log("errr usermanme");
    // console.log(usernameErr);
    username.style.border = "2px solid rgb(180, 48, 48)";

    setError(usernameErr, "Enter username or email-id");

    setTimeout(() => {
      reset(username, usernameErr);
    }, 2000);

  }

  const password = form["password"];
  const passwordErr = document.querySelector(".login-form .err-password");

  if(password.value == ""){
    password.style.border = "2px solid rgb(180, 48, 48)";

    setError(passwordErr, "Enter password");
    setTimeout(() => {
      reset(password, passwordErr);
    }, 2000);
  }

  return returnvalue;
};

// validateLogin();
