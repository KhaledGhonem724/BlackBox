function toggleLoginForm() {
    var loginForm = document.getElementById('loginForm');
    loginForm.classList.toggle('hidden');
}

function login() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    // Example validation - replace this with your actual login logic
    if (email === 'user@example.com' && password === 'password') {
        alert('Login successful!');
        // You can redirect to another page or perform other actions after successful login
    } else {
        alert('Invalid email or password. Please try again.');
    }

    // Clear the form
    document.getElementById('loginForm').reset();
}

function addSite() {
    var siteName = document.getElementById('siteName').value;
    var username = document.getElementById('username').value;
    var email = document.getElementById('siteEmail').value;
    var password = document.getElementById('sitePassword').value;

    // Create a new list item with additional styling
    var listItem = document.createElement('li');
    listItem.className = 'site-item';
    listItem.innerHTML = `
        <div class="site-item">
            <strong>Site Name:</strong> ${siteName}<br>
            <strong>Username:</strong> ${username}<br>
            <strong>Email:</strong> ${email}<br>
            <strong>Password:</strong> ${password}
        </div>
    `;

    // Append the list item to the siteList
    var siteList = document.getElementById('siteList');
    siteList.appendChild(listItem);

    // Clear the form
    document.getElementById('addSiteForm').reset();

    // Show the added data section
    var addedData = document.getElementById('addedData');
    addedData.classList.remove('hidden');
}
