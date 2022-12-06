const baseUrl = "http://localhost/websites/Library-management-system/app/controllers";
const postOptions = {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  }
}

function showError(element, msg) {
  document.getElementById(element).classList.remove("hide");
  document.getElementById(element).innerHTML = msg;

  setTimeout(() =>  {
    document.getElementById(element).classList.add("hide");
    document.getElementById(element).innerHTML = "";
  }, 3500)
}

async function login() {
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  const credentials = { email, password };

  fetch(`${baseUrl}/auth/login.php`, { 
    ...postOptions, 
    body: JSON.stringify(credentials)
  })
  .then(async res => { 
    return {
      status: res.status,
      ...(await res.json())
    }
  })
  .then(res => {
    if (res.status !== 200) {
      return showError("apiRes", res.msg);
    }

    location.assign("http://localhost/websites/Library-management-system/app/index.php")
  })
  .catch(err => {
    console.log(err);
  })
    
}

document.getElementById('loginForm').addEventListener('submit', login);