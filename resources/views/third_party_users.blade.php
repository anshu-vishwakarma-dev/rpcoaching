<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Third-Party API Demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #009688;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: 50px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #eee;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        .btn-fetch {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn-fetch:hover {
            background-color: #00796b;
            box-shadow: 0 2px 8px rgba(0, 150, 136, 0.4);
        }
        .btn-fetch:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
        .user-table {
            width: 100%;
            border-collapse: collapse;
        }
        .user-table th, .user-table td {
            text-align: left;
            padding: 15px;
            border-bottom: 1px solid #eee;
        }
        .user-table th {
            background-color: #f8f9fa;
            color: #333;
            font-weight: 600;
        }
        .user-table tr:hover {
            background-color: #fafafa;
        }
        .loader {
            text-align: center;
            padding: 40px;
            color: #777;
        }
        .badge {
            background: #e0f2f1;
            color: #00796b;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h2><i class="fa-solid fa-globe"></i> Third-Party API Data</h2>
        <button id="fetchExternal" class="btn-fetch">
            <i class="fa-solid fa-download"></i> Load External Users
        </button>
    </div>

    <div id="displayArea">
        <div class="loader">
            <i class="fa-solid fa-circle-info"></i> Click the button to fetch data from <strong>JSONPlaceholder</strong>.
        </div>
    </div>
</div>

<script>
    document.getElementById('fetchExternal').addEventListener('click', function() {
        const displayArea = document.getElementById('displayArea');
        const btn = this;
        
        displayArea.innerHTML = '<div class="loader"><i class="fa-solid fa-spinner fa-spin fa-2x"></i><br><br>Fetching from external server...</div>';
        btn.disabled = true;

        // Fetching from a real third-party API
        fetch("https://jsonplaceholder.typicode.com/users")
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(data => {
                btn.disabled = false;
                
                let tableHtml = `
                    <table class="user-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Company</th>
                            </tr>
                        </thead>
                        <tbody>
                `;
                
                data.forEach(user => {
                    tableHtml += `
                        <tr>
                            <td><strong>${user.name}</strong></td>
                            <td>${user.email}</td>
                            <td><span class="badge">@${user.username}</span></td>
                            <td>${user.company.name}</td>
                        </tr>
                    `;
                });

                tableHtml += `</tbody></table>`;
                displayArea.innerHTML = tableHtml;
            })
            .catch(error => {
                console.error('Error:', error);
                btn.disabled = false;
                displayArea.innerHTML = `
                    <div class="loader" style="color: #d32f2f;">
                        <i class="fa-solid fa-triangle-exclamation fa-2x"></i><br><br>
                        Failed to fetch external data.<br>
                        <small>${error.message}</small>
                    </div>
                `;
            });
    });
</script>

</body>
</html>
