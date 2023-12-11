function toggleLoginForm() {
    var loginForm = document.getElementById('loginForm');
    loginForm.classList.toggle('hidden');
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

function redirectToSite() {
    // Replace 'https://www.example.com' with the URL of the site you want to redirect to
    window.location.href = 'index.html';
}
