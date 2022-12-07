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

async function staffLogin() {
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  const credentials = { email, password };

  fetch(`${baseUrl}/auth/adminLogin.php`, { 
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

if (document.getElementById('loginStaffForm')) {
  document.getElementById('loginStaffForm').addEventListener('submit', staffLogin);
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

if (document.getElementById('loginForm')) {
  document.getElementById('loginForm').addEventListener('submit', login);
}

async function registerStaff() {
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;
  const fullName = document.getElementById('fullName').value;

  const credentials = { email, password, fullName };

  fetch(`${baseUrl}/staffs/add.php`, { 
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

if (document.getElementById('regStaffForm')) {
  document.getElementById('regStaffForm').addEventListener('submit', registerStaff);
}

async function register() {
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;
  const fullName = document.getElementById('fullName').value;
  const matricNo = document.getElementById('matricNo').value;
  const department = document.getElementById('department').value;


  const credentials = { email, password, fullName, matricNo, department };

  fetch(`${baseUrl}/auth/register.php`, { 
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

if (document.getElementById('regForm')) {
  document.getElementById('regForm').addEventListener('submit', register);
}


function borrowBook(bookId, userId, fine) {
  const data = {
    bookId,
    studentId: userId,
    fine,
    returnDate: new Date(Date.now() + 5000).getTime(),
    dueDate: new Date(Date.now() + 10000).getTime()
  }

  fetch(`${baseUrl}/collections/add.php`, { 
    ...postOptions, 
    body: JSON.stringify(data)
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

    location.reload();
  })
  .catch(err => {
    console.log(err);
  })
}


function deleteStaff(staffId, element) {
  fetch(`${baseUrl}/collections/delete.php?id${staffId}`, { 
    ...deleteOptions, 
    body: JSON.stringify(data)
  })
  .then(async res => { 
    return {
      status: res.status,
      ...(await res.json())
    }
  })
  .then(res => {
    if (res.status !== 200) {
      return showError(element, res.msg);
    }

    location.reload();
  })
  .catch(err => {
    console.log(err);
  })
}